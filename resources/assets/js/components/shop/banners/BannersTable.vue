<script>
  import bTable from 'bootstrap-vue/es/components/table/table'
  import bPagination from 'bootstrap-vue/es/components/pagination/pagination'
  import bFormSelect from 'bootstrap-vue/es/components/form-select/form-select'
  import bModal from 'bootstrap-vue/es/components/modal/modal'

  import Core from '../../../core'

  import Toggle from '../../Toggle'
  import Loading from '../../Loading'
  import LanguagePicker from '../../LanguagePicker'

  import TablePage from '../../../mixins/TablePage'
  import Translatable from '../../../mixins/Translatable'
  import StatusChangeable from '../../../mixins/StatusChangeable'
  import TreeSelect from '../../TreeSelect'

  import BannersTableModel from '../../../resources/shop/banner/BannersTableModel'
  import TableWithFilters from '../../../mixins/TableWithFilters'

  const defaultTableState = {
    page: 1,
    perPage: 15,
    place: 'all'
  }

  export default {
    name: 'banners-table',

    mixins: [
      TablePage,
      TableWithFilters,
      StatusChangeable,
      Translatable,
    ],

    components : {
      Toggle,
      Loading,
      bTable,
      bPagination,
      bFormSelect,
      bModal,
      LanguagePicker,
      TreeSelect
    },

    data () {
      let fields = [
        {
          key: 'id',
          sortable: false,
        },
        {
          key: 'title',
          sortable: false,
          label: 'Название',
          thStyle: {
            width: this.userCan('shop.banners.see', false) ? "70%" : "100%"
          }
        },
        {
          key: 'places',
          sortable: false,
          label: 'Места размещения',
          thStyle: {
            width: this.userCan('shop.banners.see', false) ? "70%" : "100%"
          }
        },
      ]

      if (this.userCan('edit')) {
        fields.push({
          key: 'enabled',
          sortable: false,
        })
      }

      if (this.userCan('delete')) {
        fields.push({
          key: 'delete',
          sortable: false,
        })
      }

      return {
        rbacNamespace: 'shop.banners',
        loading: false,
        totalRows: 0,
        perPageOptions: [ 15, 30, 60 ],
        ... defaultTableState,
        fields,

        bannerPlaces: [],

        banners: [],

        usedMainData: [
          'languages',
          'banner-places'
        ]
      }
    },

    methods: {
      /*
        Загрузка списка.
      */

      fetchItems ({currentPage, perPage, sortBy, sortDesc}) {
        return new Promise(resolve => {
          new Core.requestHandler('get', this.makePageApiUrl(), {
            page: currentPage,
            perPage,
            sortBy,
            sortType: sortDesc ? 'desc' : 'asc',
            place: this.place
          })
            .success(response => {
              const data = response.data;

              this.totalRows = this.nanToNum(parseInt(data.totalRows))
              this.page = parseInt(data.page) || 1
              this.perPage = this.nanToNum(parseInt(data.perPage))

              const items = data.banners || []

              resolve(items.map(item => new BannersTableModel(item, this.languages)))
            })
            .start()
        })
      },

      setType(type) {
        if (this.type === type) return

        this.type = type

        this.refreshTable()
      },

      bannerPlacesList(places = []) {
        return places.reduce((acc, placeId) => {
          let place = this.bannerPlaces.find(place => place.id === placeId)

          if (place) {
            acc.push(place.name)
          }

          return acc
        }, []).join(', ')
      },

      bannerTitle(banner) {
        return ['title', 'caption'].reduce((acc, item) => {
          if (banner.i18n[this.activeLanguageCode][item]) {
            acc.push(banner.i18n[this.activeLanguageCode][item])
          }

          return acc
        }, []).join(' ')
      },

      setBannerPlaces(places) {
        this.place = places
        this.refreshTable()
      }
    },

    computed: {
      bannerPlacesSelect() {

        return this.bannerPlaces.reduce((acc, item) => {
          acc.push({
            id: item.id,
            title: item.name
          })

          return acc
        }, [{
          id: 'all',
          title: 'Все'
        }])
      }
    }
  }
</script>

<template>
  <div>
    <div class="block full">
      <div class="block-title clearfix">
        <h1>
          <strong>
            Баннеры
          </strong>
        </h1>

        <div class="block-title-control">
          <language-picker :languages="languages" :activeLanguageCode.sync="activeLanguageCode" />

          <span class="btn-separator-xs"></span>

          <router-link v-if="userCan('create')" to="/shop/banners/create" class="btn btn-sm btn-success active">
            <i class="fa fa-plus-circle"></i> Создать
          </router-link>
        </div>
      </div>

      <loading :loading="loading">
        <div class="table-responsive" style="overflow: visible">
          <div class="dataTables_wrapper form-inline no-footer">
            <div class="row">
              <div class="col-sm-6 col-xs-12 clearfix">
                <div class="dataTables_paginate paging_bootstrap" v-if="showPagination">
                  <b-pagination :total-rows="totalRows" :per-page="perPage" v-model="page" class="my-0" />
                </div>
              </div>

              <div class="col-sm-6 col-xs-12 clearfix">
                <div class="dataTables_filter pull-right" style="min-width: 200px">
                  <tree-select
                    :options="bannerPlacesSelect"
                    :selected="place"
                    @update:selected="setBannerPlaces"
                    :params="{minimumResultsForSearch: -1, allowClear: false}"
                  ></tree-select>
                </div>
              </div>
            </div>

            <b-table
              @refreshed="setHistoryState"
              v-if="activeLanguageCode"
              show-empty
              stacked="md"
              ref="table"
              :items="fetchItems"
              :fields="fields"
              :busy.sync="loading"
              :current-page="page"
              :per-page="perPage"
              @sort-changed="sortingChanged"
              empty-text="Список баннеров пуст."
              empty-filtered-text="Баннеров с такими параметрами не найдены."
              class="table table-vcenter table-condensed table-hover table-bordered no-footer">

              <!--  ID  -->

              <template slot="HEAD_id" slot-scope="banner">
                <span class="table-column-id">ID</span>
              </template>

              <template slot="id" slot-scope="banner">
                <router-link :to="banner.item.url">
                  <span class="table-column-id">
                    {{ banner.item.id }}
                  </span>
                </router-link>
              </template>

              <!--  Название  -->

              <template slot="title" slot-scope="banner">
                <router-link :to="banner.item.url" v-html="bannerTitle(banner.item)" />
              </template>

              <!--  Цена  -->

              <template slot="places" slot-scope="banner">
                {{ bannerPlacesList(banner.item.places) }}
              </template>

              <!--  Статус  -->

              <template slot="HEAD_enabled" slot-scope="banner">
                <span class="table-column-enabled">Статус</span>
              </template>

              <template slot="enabled" slot-scope="banner">
                <span class="table-column-enabled">
                  <toggle @change="statusChange(banner.item.id)" :checked="banner.item.enabled" :key="banner.item.id" />
                </span>
              </template>

              <!--  Удаление  -->

              <template slot="HEAD_delete" slot-scope="banner">
                <span class="table-column-delete"></span>
              </template>

              <template slot="delete" slot-scope="banner">
                <span class="table-column-delete">
                  <a class="btn btn-danger" @click="remove(banner.item.id)">
                    <i class="fa fa-times"></i>
                  </a>
                </span>
              </template>
            </b-table>

            <div class="row">
              <div class="col-sm-6 col-xs-12 clearfix">
                <div class="dataTables_paginate paging_bootstrap" v-if="showPagination">
                  <b-pagination
                    :total-rows="totalRows"
                    :per-page="perPage"
                    v-model="page"
                    class="my-0"
                  />
                </div>
              </div>


              <div class="col-sm-6 col-xs-6">
                <div class="dataTables_length">
                  <label>
                    <b-form-select :options="perPageOptions" :value="perPage" @change="setPerPage" />
                  </label>
                </div>

                <div class="dataTables_info" role="status" aria-live="polite">
                  <strong>{{ showedFrom }}</strong> - <strong>{{ showedTo }}</strong> из <strong>{{ totalRows }}</strong>
                </div>
              </div>
            </div>
          </div>

        </div>
      </loading>
    </div>

    <b-modal
      id="removeModal"
      ref="removeModal"
      title="Удаление баннера"
      title-tag="h3"
      centered
      ok-title="Удалить"
      cancel-title="Отмена"
      hide-header-close
      @ok="removeConfirm">

      Вы действительно хотите удалить баннер?
    </b-modal>
  </div>
</template>
