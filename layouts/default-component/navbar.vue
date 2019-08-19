<template>
  <sui-menu class="mainNavbar" :widths="3">
    <sui-menu-item>Editorials</sui-menu-item>
    <sui-menu-item>Reviews</sui-menu-item>
    <sui-menu-item active>Upcoming Events</sui-menu-item>
  </sui-menu>
</template>
<script>
export default {
  data:()=>({
    activeItem: 0,
    search: ''
  })
}
</script> 


<style >
.mainNavbar{height: 60px; color:#fff;   line-height: 60px; }
</style>