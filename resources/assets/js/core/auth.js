import Core from './'

export default {
  getRole() {
    return parseInt(window.config.role)
  },

  isSuperAdmin() {
    return true
    return this.getRole() === 1
  }
}