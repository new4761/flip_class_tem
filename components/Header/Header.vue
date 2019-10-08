<template>
  <header class="app-header navbar">
    
    <b-link class="navbar-brand" to="#"></b-link>

    <b-navbar-nav class="ml-auto">
      <b-nav-item class="d-md-down-none">
        <HButton />
      </b-nav-item>
      <HeaderDropdown />
    </b-navbar-nav>
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
  methods: {}
};
</script>
