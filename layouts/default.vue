<template>
  <div class="app">
    <AppHeader/>
        <div class="container-fluid">
          <nuxt />
        </div>
    <AppFooter/>
  </div>
</template>

<script>
import nav from './menu'
import { Header as AppHeader, Footer as AppFooter} from '~/components/'

export default {
  name: 'full',
  components: {
    AppHeader,
    AppFooter
  },
  data () {
    return {
      nav: nav.items
    }
  },
  computed: {
    name () {
      return this.$route.name
    },
    list () {
      return this.$route.matched
    }
  }
}
</script>