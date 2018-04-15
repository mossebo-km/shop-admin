import Core from './'

export default {
  getRole() {
    return parseInt(window.config.role)
  },

  isSuperAdmin() {
    return this.getRole() === 1
  }
}