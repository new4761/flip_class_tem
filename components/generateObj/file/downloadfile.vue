<template>
  <a :href="link">
    <b-button size="md" variant="yellow" pill class=" m-1">
      <b-badge pill variant="light">
        <i class="fa fa-download"></i>
      </b-badge>
      {{buttonText}}
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
