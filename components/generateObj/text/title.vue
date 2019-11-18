<template>
  <b-col md="12">
    <h2 class="text-left">{{title}}</h2>
  </b-col>
</template>
<script>
export default {
  props: {
    title: {
      type: String
    }
  }
};
</script>