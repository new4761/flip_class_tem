<template>
<b-col md="4" sm="6">
      <h5>{{title}}</h5>
     <b-form-input v-model="text" placeholder="Enter your name"></b-form-input>
          <p class="text-muted text-right mt-1 ">*{{desc}}</p>
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
    }
  },
    data:()=>({
    text: null
  })
}
</script>