<template>
  <b-row no-gutters>
    <h5 class="py-1">
     Link iflame Google Slide
      <small class="text-muted">(จำเป็น)</small>
    </h5>
    <b-form-input v-model="data.link" type="text" required placeholder="กรุณาวางLink iflame Google Slide"></b-form-input>
  </b-row>
</template>
<script>
export default {
name:"textTitle",
  data:()=>({
data:{
type: "iflameSlider",
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