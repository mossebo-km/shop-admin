import Core from '../core'

export default {
  methods: {
    /**
     * todo: Доделать проверку на права
     *
     * @returns {*}
     */
    userCan(action) {
      // if (['attribute.edit', 'attribute.create', 'attribute.delete'].indexOf(action) !== -1) {
      //   return true
      // }

      return Core.auth.isSuperAdmin(action)
    },
  },
}