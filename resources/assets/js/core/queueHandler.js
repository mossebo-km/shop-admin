/*
  Очереди запросов.

  В какой-то момент все вышло из под контроля...

  Типы очередей:

  block - блокирует поступающие на обработку запросы, пока выполняется текущий.

  break - прерывает текущий запрос, если поступает следующий.

  iteration - все запросы выполняются по очереди.
*/

import Core from './'
import tRequest from './tRequest'

const availableTypes = [
  'block',
  'break',
  'iteration'
]

export default {
  __queue: {},

  makeQueue(type, name = false) {
    if (availableTypes.indexOf(type) === -1) {
      throw new Error(`Неизвестный тип очереди: ${type}.`)
    }

    if (!name) {
      throw new Error('Не задано имя очереди.')
    }

    if (name in this.__queue) {
      return this.__queue[name]
    }

    let queue;

    switch (type) {
      case 'block':
        queue = new BlockQueue()
        break

      case 'break':
        queue = new BreakQueue()
        break

      case 'iteration':
        queue = new IterationQueue()
        break
    }

    this.__queue[name] = queue

    return queue
  },

  addItem(name, asyncItem) {
    if (! (name in this.__queue)) {
      throw new Error('Не найдено имя очереди.')
    }

    return this.__queue[name].add(asyncItem)
  }
}

export class Queue {
  constructor() {
    this.__inProcess = false
    this.__items = []
    this.counter = 0
  }

  add(asyncItem) {
    const item = this.__wrapAsync(asyncItem)
    this.__items.push(item)
    this.__run()

    return item
  }

  clean() {
    this.__items = []

    if (this.__itemInProcess) {
      this.__itemInProcess.abort()
      this.__itemInProcess = false
    }
  }

  clear() {
    this.clean()
  }

  __run() {
    if (!this.__itemInProcess && this.__items.length) {
      this.__itemInProcess = this.__items[0]
      this.__items[0].start()
    }
  }

  __wrapAsync(asyncItem) {
    let itemClass = false;

    if (typeof asyncItem === 'function') {
      itemClass = QueueFunction
    }

    if (asyncItem instanceof tRequest) {
      itemClass = QueueTRequest
    }

    if (! itemClass) {
      throw new Error("Неизвестный тип запроса.")
    }

    const item = new itemClass(asyncItem, () => {
      this.__remove(item)
      this.__run()
    })

    item.__id = this.counter++

    return item
  }

  __remove(item) {
    for (let i = 0; i < this.__items.length; i++) {
      if (item.__id === this.__items[i].__id) {
        this.__items.splice(i, 1)

        if (this.__itemInProcess && this.__itemInProcess.__id === item.__id) {
          this.__itemInProcess = false
        }

        break
      }
    }
  }
}


export class BlockQueue extends Queue {
  add(asyncItem) {
    const item = this.__wrapAsync(asyncItem)

    if (!this.__items.length) {
      this.__items.push(item)
      this.__run()
    }

    return item
  }
}


export class BreakQueue extends Queue {
  add(asyncItem) {
    if (this.__items.length) {
      this.__items[0].abort()
    }

    const item = this.__wrapAsync(asyncItem)
    this.__items.push(item)
    this.__run()

    return item
  }
}


export class IterationQueue extends Queue {}


class QueueItem {
  constructor(asyncItem, onBeforeDone = false) {
    this.status = true
    this.asyncItem = asyncItem
    this.onBeforeDone = onBeforeDone
  }

  __beforeDone() {
    if (this.onBeforeDone) {
      this.onBeforeDone()
    }
  }

  abort() {
    this.status = false
    this.__beforeDone()
  }

  start() {
    var _ = this

    _.asyncItem().then(function() {
      if (_.status) {
        _.__beforeDone()

        if (typeof _.resolver === 'function') {
          _.resolver.apply(_, arguments)
        }
      }
    })
  }

  onDone() {
    return new Promise((resolve, reject) => {
      this.resolver = function() {
        resolve.apply(Promise, arguments)
      }
    })
  }
}

class QueueFunction extends QueueItem {
  start() {
    var _ = this

    _.asyncItem().then(function() {
      _.__beforeDone()
      if (typeof _.resolver === 'function') {
        _.resolver.apply(this, arguments)
      }
    })
  }

  onDone() {
    var _ = this

    return new Promise((resolve, reject) => {
      _.resolver = function() {
        if (_.status) {
          resolve.apply(Promise, arguments)
        }
      }
    })
  }
}

class QueueTRequest extends QueueItem {
  start() {
    this.asyncItem.any(() => {
      this.__beforeDone()
    })

    this.asyncItem.start()
  }

  abort() {
    this.__beforeDone()
    this.asyncItem.abort()
  }

  onDone() {
    return this.asyncItem
  }
}