<template>
  <div>
    <header>
      <AppHeader />
    </header>
    <section>
      <b-row no-gutters>
        <b-col>
          <b-navbar toggleable="lg" type="dark" variant="dark">
            <b-navbar-brand href="#">ชื่อบทเรียน</b-navbar-brand>
          </b-navbar>
          <nuxt />
        </b-col>
        <b-col cols="3" style="height:100vh; background-color:#ffff; " class="overflow-auto">
          <myAside />
        </b-col>
      </b-row>
    </section>

    <footer>
      <AppFooter />
    </footer>
  </div>
</template>

<script>
import nav from "./menu";
import myAside from "./LessonComponent/LessonAside";
import { Header as AppHeader, Footer as AppFooter } from "~/components/";

export default {
  name: "full",
  components: {
    AppHeader,
    AppFooter,
    myAside
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