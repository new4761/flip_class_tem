<template>
  <b-col md="8" sm="12" >
    <b-form-group class="text-left ml-md-5 mx-auto">
      <!-- <p>{{ myOptions }}</p> -->
      <h5>{{title}}</h5>
      <p class="text-muted mt-1 text-wrap ">{{desc}}</p>
      <b-form-radio-group v-model="selected" :options="myOptions" name="radio-inline" stacked></b-form-radio-group>
    </b-form-group>
  </b-col>
</template>
<script>
export default {
  props: {
    title: {
      type: String
    },
    desc: {
      type: String
    },
    myOptions: {
      type: Array
    }
  },
  data: () => ({
    selected: null, 
     options: [
          { text: 'Radio 1', value: 'radio1' },
          { text: 'Radio 3', value: 'radio2' },
          { text: 'Radio 3 (disabled)', value: 'radio3', disabled: true },
          { text: 'Radio 4', value: 'radio4' }
        ]
  })
};
</script>