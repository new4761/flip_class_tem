<template>
  <b-col md="12" class="ml-md-3">
    <p class="text-left text-wrap">{{conntent}}</p>
  </b-col>
</template>
<script>
export default {
  props: {
    conntent: {
      type: String
    }
  }
};
</script>