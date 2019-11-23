<template>
  <b-col md="4" sm="12" class="text-left">
    <h5> <i class="fa fa-upload mr-1"></i>{{fileName}}</h5>
    <b-form-file
      v-model="file"
      :state="Boolean(file)"
      placeholder="Choose a file or drop it here..."
      drop-placeholder="Drop file here..."
    ></b-form-file>
        <p class="text-muted text-right mt-1">*{{desc}}</p>
  </b-col>
</template>
<script>
export default {
    props: {
    fileName: {
      type: String
    },
    desc: {
      type: String
    }
  },
  data() {
    return {
      file: null
    };
  }
};
</script>