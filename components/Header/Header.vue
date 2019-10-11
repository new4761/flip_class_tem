<template>
<header class="animated fadeIn">
 
  <b-navbar toggleable="lg" type="dark" variant="info">
  
  <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
    <b-navbar-brand class="mr-auto" href="#"><h2>Flip classroom</h2></b-navbar-brand>
  
    <b-nav>
    <HeaderDropdown class="d-lg-none" v-if = "login ==='true'"/>
    </b-nav>

    
    <b-collapse is-nav id="nav_collapse">
      <b-navbar-nav class="ml-auto">
          <HButton/>
      </b-navbar-nav>
    </b-collapse>

    <b-nav>
    <HeaderDropdown class="d-md-down-none"  v-if = "login ==='true'"/>
    </b-nav>


  </b-navbar>
</header>
  
</template>

<script>
import HeaderDropdown from "./HeaderDropdown.vue";
import HButton from "./HButton.vue";


export default {
  name: "c-header",
  components: {
    HeaderDropdown,
    HButton
  },

  data() {
    return {
      login: "true"
    };
  },

  methods: {
 
  }

  
};


</script>

<style>
@import './css/HeaderStyle.css';
</style>
