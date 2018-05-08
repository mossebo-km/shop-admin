<script>
  import Core from '../core'
  import Base from '../mixins/Base'

  export default {
    name: "main-menu",

    data() {
      return {
        items: []
      }
    },

    watch: {
      '$route': 'checkExpanded'
    },

    mixins: [
      Base
    ],

    mounted() {
      this.init()
    },

    methods: {
      init() {
        [].forEach.call(document.querySelectorAll('.sidebar-nav-sub'), el => {
          el.setAttribute('data-height', this.getMenuHeight(el))
        })

        this.checkExpanded()
      },

      getMenuHeight(elMenu) {
        return elMenu.childNodes[0].scrollHeight
      },

      getMainMenuEl() {
        return this.$el
      },

      getParents(el, selector = '*') {
        let parents = []
        let p = el.parentNode

        while (p !== this.$el) {
          if (p.matches(selector)) {
            parents.push(p)
          }

          el = p
          p = p.parentNode
        }

        return parents
      },

      checkExpanded() {
        this.$nextTick(() => {
          let elsToCLose = this.$el.querySelectorAll('.sidebar-nav-menu.open:not(.manual) + .sidebar-nav-sub')

          ;[].forEach.call(elsToCLose, elMenu => {
            this.closeItem(elMenu.previousSibling, elMenu)
          })

          let elActiveLink = this.$el.querySelector('a.active')

          if (!elActiveLink) return

          let elClosestMenu = elActiveLink.closest('.sidebar-nav-sub')

          if (! elClosestMenu) return

          this.expand(elClosestMenu.previousSibling, elClosestMenu)
        })
      },

      getChildrensHeight(elMenu) {
        return [].reduce.call(elMenu.querySelectorAll('.sidebar-nav-menu.open + .sidebar-nav-sub'), (acc, el) => {
          return acc + parseInt(el.getAttribute('data-height'))
        }, 0)
      },

      expandItem(elLink, elMenu) {
        elLink.classList.add('open')

        let height = parseInt(elMenu.getAttribute('data-height')) + this.getChildrensHeight(elMenu)
        elMenu.style.height = height + 'px'
      },

      expand(elLink, elMenu) {
        this.expandItem(elLink, elMenu)

        ;[].forEach.call(this.getParents(elLink, '.sidebar-nav-sub'), el => {
          this.expandItem(el.previousSibling, el)
        })
      },

      closeItem(elLink, elMenu) {
        elLink.classList.remove('open')
        elMenu.removeAttribute('style')
      },

      close(elLink, elMenu) {
        ;[].reverse.call(elMenu.querySelectorAll('.sidebar-nav-sub')).forEach(el => {
          this.closeItem(el.previousSibling, el)
        })

        this.closeItem(elLink, elMenu)

        ;[].forEach.call(this.getParents(elLink, '.sidebar-nav-sub'), el => {
          this.expandItem(el.previousSibling, el)
        })
      },

      expandToggle(elLink, elMenu) {
        if (elLink.classList.contains('open')) {
          this.close(elLink, elMenu)
        }
        else {
          this.expand(elLink, elMenu)
        }
      },

      expandLinkClick(elLink) {
        elLink.classList.toggle('manual')
        this.expandToggle(elLink, elLink.nextSibling)
      },

      prepareItems(menuItems = []) {
        return menuItems.reduce((acc, item) => {
          if (item.permission && !this.userCan(item.permission)) {
            return acc
          }

          if (item.children instanceof Array && item.children.length > 0) {
            let children = this.prepareItems(item.children)

            if (children.length === 0) {
              return acc
            }

            acc.push({
              ... item,
              children
            })

            return acc
          }

          acc.push(item)

          return acc
        }, [])
      }
    },

    render(createElement) {
      this.items = this.prepareItems(Core.getMainMenuData())


      let makeTitleEl = (title) => {
        return createElement(
          'span',
          {
            attrs: {
              class: 'sidebar-nav-mini-hide'
            }
          },
          title
        )
      }

      let __makeIconEl = iconClasses => {
        return createElement(
          'i',
          {
            attrs: {
              class: iconClasses
            }
          }
        )
      }

      let makeIconEl = iconCLasses => {
        return __makeIconEl(`${iconCLasses} sidebar-nav-icon`)
      }

      let makeIndicatorEl = () => {
        return __makeIconEl('fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide')
      }

      let urlIsLocal = (url) => {
        url = Core.trim(url)

        if (url.indexOf('http://') === 0 || url.indexOf('https://') === 0) {
            return url.indexOf(window.location.origin) === 0
        }

        return true
      }

      function mergeDeep(target, ...sources) {
        if (!sources.length) return target;
        const source = sources.shift();

        if (_.isObject(target) && _.isObject(source)) {
          for (const key in source) {
            if (_.isObject(source[key]) && !_.isFunction(source[key])) {
              if (!target[key]) Object.assign(target, { [key]: {} });
              mergeDeep(target[key], source[key]);
            }
            else {
              Object.assign(target, { [key]: source[key] });
            }
          }
        }

        return mergeDeep(target, ...sources);
      }

      let makeLink = ({url, onClick, icon, title, children}) => {
        let tagName = 'a'
        let isLocal = url ? urlIsLocal(url) : false
        let params = {
          key: Core.uniqueId()
        }

        if (typeof onClick === 'function') {
          params = mergeDeep(params, {
            on: {
              click: onClick
            }
          })
        }
        if (url && isLocal) {
          tagName = 'router-link'
          params = mergeDeep(params, {
            attrs: {
              to: url,
              'active-class': 'active'
            }
          })
        }
        else if (url && !isLocal) {
          params = mergeDeep(params, {
            attrs: {
              href: url,
              target: '_blank'
            }
          })
        }
        else {
          params = mergeDeep(params, {
            attrs: {
              href: 'javascript:void(0);'
            }
          })
        }

        let childrenElsArray = []

        if (children instanceof Array && children.length > 0) {
          params = mergeDeep(params, {
            on: {
              click: event => this.expandLinkClick(event.target.closest('.sidebar-nav-menu'))
            },
            attrs: {
              class: 'sidebar-nav-menu'
            }
          })

          childrenElsArray.push(makeIndicatorEl())
        }

        if (icon) {
          childrenElsArray.push(makeIconEl(icon))
        }

        if (title) {
          childrenElsArray.push(makeTitleEl(title))
        }

        return createElement(tagName, params, childrenElsArray)
      }

      let makeElsLiArray = (items = []) => {
        return items.reduce((acc, item) => {
          let slots = [makeLink(item)]

          if (item.children) {

            slots.push(createElement(
              'div',
              {
                attrs: {
                  class: 'sidebar-nav-sub'
                }
              },
              [createElement('ul', makeElsLiArray(item.children))]
            ))
          }

          acc.push(createElement('li', slots))

          return acc
        }, [])
      }

      return createElement(
        'ul',
        {
          attrs: {
            class: 'sidebar-nav'
          }
        },
        makeElsLiArray(this.items)
      )
    }
  }
</script>

<style>
    .sidebar-nav li {
        position: relative;
    }

    .sidebar-nav .sidebar-nav-sub > ul {
        display: block;
    }

    .sidebar-nav .sidebar-nav-menu + .sidebar-nav-sub {
        height: 0;
        overflow: hidden;
        position: relative;
        transition: all .228s ease-out;
        transform: translate3d(0, 0, 0);
    }

    .sidebar-nav .sidebar-nav-menu:not(.open) + .sidebar-nav-sub {
        height: 0!important;
    }

    .sidebar-nav .sidebar-nav-menu.open .sidebar-nav-menu:not(.open) {
        max-height: none;
        transition: none;
    }
</style>