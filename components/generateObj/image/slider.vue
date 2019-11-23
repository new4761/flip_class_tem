<template>
    <b-col md="12" sm="12">
       <b-embed
    type="iframe"
    aspect="16by9"
    :src="iframeLink"
    allowfullscreen
  ></b-embed>
    </b-col>
</template>
<script>
export default {
  props: {

    iframeLink: {
      type: String
    }
  },
  data: () => ({
  
  })
};
</script>