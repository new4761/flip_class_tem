<template>
<header class="animated fadeIn">

<b-navbar class="nav justify-content-center fixed-bottom d-lg-none navbar-light bg-light"  >
   <HButtombar/>
</b-navbar>
 
<b-navbar  type="dark" variant="info">
    <b-navbar-brand class="mr-auto" href="#"><h> Flip classroom</h></b-navbar-brand>

  <b-nav>
    <HeaderDropdown class="ml-auto"/>
  </b-nav>

</b-navbar>

<b-navbar class="nav justify-content-center d-md-down-none" >
  <b-navbar-nav>
    <HButton/>
  </b-navbar-nav>
</b-navbar>

</header>
  
</template>
<script>

import HButtombar from "./HButtombar.vue";
import HeaderDropdown from "./HeaderDropdown.vue";
import HButton from "./HButton.vue";


export default {
  components: {
    HeaderDropdown,
    HButton,
    HButtombar
  },
  methods: {
  }
};
</script>

<style>
@import './css/HeaderStyle.css';
</style>
