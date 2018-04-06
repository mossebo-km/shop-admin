import Core from './'

export default {
  __data: {},

  isAvailable: 'localStorage' in window && window['localStorage'] !== null,

  add: function(identif, data) {
    this.__data[identif] = data;

    if (!this.isAvailable) return;
    if (typeof data === 'function') return;

    if (typeof data !== 'string') {
      data = JSON.stringify(data);
    }

    localStorage.setItem(identif, data);
  },

  get: function(identif) {
    if (identif in this.__data) {
      let data = this.__data[identif]

      if (typeof data !== 'string') {
        try {
          data = JSON.parse(JSON.stringify(this.__data[identif]))
        }
        catch(e){
          delete this.__data[identif]
          return this.get(identif)
        }
      }

      return data
    }

    if (!this.isAvailable) return;

    var data = localStorage.getItem(identif);

    try {
      data = JSON.parse(data);
    }
    catch(e){}

    this.__data[identif] = data;

    return data;
  },


  /*
    Достаем данные из хранилища.
    Если данных нет, или хранилище не доступно - используем getDataFunc для получения данных.
  */

  remember: function(identif, getDataFunc, callback) {
    var _ = this;

    var data = this.get(identif);

    if (data) {
      helper.runCallback(callback, data);
    }
    else {
      try {
        getDataFunc(function(data) {
          _.add(identif, data);
          Core.runCallback(callback, data);
        });
      }
      catch(e) {
        console.log(e);
      }
    }
  }
}