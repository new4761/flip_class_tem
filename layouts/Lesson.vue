<template>
  <div class="app">
    <header>
      <AppHeader />
    </header>
    <div>
      <div class="d-flex">
        <div class="flex-fill">
          <b-navbar justified type="dark" variant="dark">
            <b-navbar-nav>
              <b-navbar-brand href="#">ชื่อบทเรียน /</b-navbar-brand>

              <b-nav-item href="#">Link</b-nav-item>
            </b-navbar-nav>
          </b-navbar>
          <nuxt style="height:100vh;" class="animated-witdh overflow-auto" />
        </div>
        <div class="overflow">
          <b-button
            type="button"
            style="height:53px;background-color:#D3D9DE;"
            @click="myexpand = !myexpand"
            block
          >
            <i v-if="myexpand" class="fa fa-chevron-circle-right fa-lg "><p class="ml-1 d-inline">ข้อมูลบทเรียน</p></i>
            <i v-else class="fa fa-chevron-circle-left fa-lg"></i>
          </b-button>
          <a @click="myexpand ?'' :myexpand=true">
            <myAside
              style="height:100vh;"
              class="animated-witdh overflow-auto"
              :expand="myexpand"
              :style="{ 'width': (myexpand ? 200:50) + 'px'}"
            />
          </a>
        </div>
      </div>
      <!-- <b-row no-gutters>
        <div class="d-flex">
          <div class="flex-grow">
            <b-navbar toggleable="lg" type="dark" variant="dark">
              <b-navbar-brand href="#">ชื่อบทเรียน</b-navbar-brand>
            </b-navbar>
            <nuxt />
          </div>
          <div class>
            <myAside style="max-width:200px;" />
          </div>
        </div>
      </b-row>-->
    </div>
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
  //    methods: {
  //   	one() {
  //     	console.log('one');
  //       this.bool = !this.bool;
  //     },
  //     two() {
  //     	console.log('two');
  //       this.bool = !this.bool;
  //     }
  //   },
  data() {
    return {
      nav: nav.items,
      myexpand: true
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