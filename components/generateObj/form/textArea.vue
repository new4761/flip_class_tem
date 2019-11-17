<template>
<b-col md="6" sm="12">
  <h5>{{title}}</h5>
       <p class="text-muted text-left ">*{{desc}}</p>
     <b-form-textarea
      id="textarea"
      v-model="text"
      placeholder="Enter something..."
      rows="3"
      max-rows="6"
    ></b-form-textarea>
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