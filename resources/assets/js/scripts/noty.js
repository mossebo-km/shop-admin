import Noty from 'noty'

const defaultParms = {
    type: 'info',
    progressBar: false,
    theme: 'bootstrap-v4',
    'timeout': 5000,
}

export default function noty(message, options = {}) {
  if (!message) return

  new Noty({
    ...defaultParms,
    ...options,
    text: message
  }).show()
}