export default class ModalBuilder {
  constructor(options) {
    this.options = {
      ...this.defaultParams,
      ...options
    }

    this.build()
  }

  build() {
    var elTemp = document.createElement('div')
    elTemp.innerHTML = `<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog ${this.options.centered ? 'modal-dialog-centered' : ''}" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">${this.options.title}</h2>
          </div>
          <div class="modal-body">
            ${this.options.message}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary js-modal-close">Закрыть</button>
            ${this.options.onConfirm ?
              '<button type="button" class="btn btn-primary js-modal-confirm">Confirm</button>' :
              ''
            }
          </div>
        </div>
      </div>
    </div>`;


    elTemp.querySelector('.js-modal-close').addEventListener('click', () => {
      if (typeof this.options.onClose === 'function') {
        this.options.onClose()
      }

      this.close()
    })

    if (typeof this.options.onConfirm === 'function') {
      elTemp.querySelector('.js-modal-confirm').addEventListener('click', () => {
        this.options.onConfirm()
        this.close()
      })
    }

    this.$modal = $(elTemp.children[0])
  }

  close() {
    this.$modal.modal('toggle')

    setTimeout(() => {
      this.$modal.remove()
    }, 1000)
  }

  show() {
    $('body').append(this.$modal)

    setTimeout(() => {
      this.$modal.modal('toggle')
    }, 1000);
  }
}

ModalBuilder.defaultParams = {
  centered: true,
  keyboard: true,
}