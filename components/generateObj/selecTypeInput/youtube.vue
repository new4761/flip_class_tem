<template>
  <b-row no-gutters>
    <h5 class="py-1">
     Link Embed Youtube
      <small class="text-muted">(จำเป็น)</small>
    </h5>
    <b-form-input v-model="data.link" type="text" required placeholder="กรุณาวางLink Embed Youtube"></b-form-input>
  </b-row>
</template>
<script>
export default {
name:"youtube",
  data:()=>({
data:{
type: "youtube",
link:null,
},
 }),
  methods: { getchildValue() {
      //console.log("getchildValue");
      //console.log(this.data);
      // console.log("from in" + input)
     if((this.data.link!=null&&this.data.link!='')){
    this.$emit('getchildValue',true,this.data)

     }
  }
  }

}

</script>