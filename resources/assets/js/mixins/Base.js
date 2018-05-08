import Core from '../core'

export default {
  methods: {
    /**
     * todo: Доделать проверку на права
     *
     * @returns {*}
     */
    userCan(action, addNamespace = true) {
      if (this.rbacNamespace && addNamespace) {
        action = ([this.rbacNamespace, action]).join('.')
      }

      return Core.user.can(action)
    },
  },
}