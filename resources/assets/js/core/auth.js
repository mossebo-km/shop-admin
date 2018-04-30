import Core from './'

export default {
  getRole() {
    return parseInt(window.config.role)
  },

  isSuperAdmin(action) {
    return true
    return this.getRole() === 1
  },

  getUserId() {
    return parseInt(window.config.user.id)
  }
}