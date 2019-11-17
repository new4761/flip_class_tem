<template>

  <a :href="link">
    <b-button size="lg" variant="blue" pill class=" m-1">
      {{buttonText}}
      <i class="fa fa-external-link pl-1"></i>
    </b-button>
  </a>

</template>
<script>
export default {
  props: {
   link: {
      type: String
    },
    buttonText: {
      type: String
    }
  }
};
</script>

