<template>
  <header class="animated fadeIn">



    <b-navbar class ="shadow header navbar-dark bg-myblue py-1" > 
      <b-navbar-brand class="mr-auto" href="#">
        <h2>Flip classroom</h2>
      </b-navbar-brand>

      <b-nav class=" justify-content-center mx-auto d-md-down-none" id="navcontent"> 
        <HButton v-bind:ButtonData="ButtonData" />
      </b-nav>

        <b-nav>
        <HeaderDropdown class="ml-auto" />
        </b-nav>

    </b-navbar>

    <!-- <b-navbar class="nav justify-content-center d-md-down-none">
      <b-navbar-nav>
        <HButton v-bind:ButtonData="ButtonData" />
      </b-navbar-nav>
    </b-navbar> -->


    <b-navbar class="nav justify-content-center fixed-bottom d-lg-none navbar-light bg-light">
      <HButtombar v-bind:ButtonData="ButtonData" />
    </b-navbar>





  </header>
</template>

<script>
import HButtombar from "./HButtomBar.vue";
import HeaderDropdown from "./HeaderDropdown.vue";
import HButton from "./HButton.vue";

export default {
  components: {
    HeaderDropdown,
    HButton,
    HButtombar
  },
  data() {
    return {
      ButtonData: [
        { icon: "icon-home", name: "หน้าหลัก"  ,link:"/" },
        { icon: "icon-bell", name: "ประกาศ" ,link:"/news" },
        { icon: "icon-notebook", name: "บทเรียน" ,link:"/lesson" },
      // { icon: "icon-globe-alt", name: "เเหล่งเรียนรู้ภายนอก" ,link:"#" }
      ]
    };
  }
};
</script>

<style>
@import "./css/HeaderStyle.css";
</style>
