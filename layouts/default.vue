<template>
  <div class="app" style="background-color:white;">
    <header>
    <AppHeader />
    </header>
  <div>
        <nuxt />
</div>
<footer>
    <AppFooter />
    </footer>
  </div>
</template>
<style scoped>

</style>


<script>
import nav from "./menu";
import { Header as AppHeader, Footer as AppFooter } from "~/components/";

export default {
  name: "full",
  components: {
    AppHeader,
    AppFooter
  },
  data() {
    return {
      nav: nav.items
    };
  },
  computed: {
    name() {
      return this.$route.name;
    },
    list() {
      return this.$route.matched;
    }
  }
};
</script>