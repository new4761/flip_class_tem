<template>
  <b-col cols="4">
    <b-img-lazy :src="srcLink" fluid-grow alt="Responsive image"></b-img-lazy>
  </b-col>
</template>
<script>
export default {
  props: {
    srcLink: {
      type: String
    }
  }
};
</script>