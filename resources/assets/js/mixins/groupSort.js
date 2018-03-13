export default {
  methods: {
    getNewGroup(level, parentId) {
      return {
        level,
        isExpandable: false,
        parentId: parentId,
        items: []
      }
    },

    makeGroups(items = [], parentId = 0, level = 0, result = []) {
      const itemsByParentId = items.filter(el => el.parent_id === parentId)
      let group = this.getNewGroup(level, parentId)

      for (let i = 0; i < itemsByParentId.length; i++) {

        let item = itemsByParentId[i]
        group.items.push(item)

        if (items.some(el => el.parent_id === item.id)) {
          group.isExpandable = true
          result.push(group)

          this.makeGroups(items, item.id, level + 1, result)

          group = this.getNewGroup(level)
        }
      }

      if (group.items.length) {
        result.push(group)
      }

      return result
    },

    getItemsGroups() {
      return this.makeGroups(this.items)
    },

    expand(id) {
      document.querySelector(`#table-group-${id}`).classList.toggle('expanded');
    },

    openGroup() {

    }
  }
}