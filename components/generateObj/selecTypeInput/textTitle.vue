<template>
  <b-row no-gutters>
    <h5 class="py-1">
      ระบุข้อความ
      <small class="text-muted">(จำเป็น)</small>
    </h5>
    <b-form-input v-model="data.title" type="text" required placeholder="กำหนดข้อความ"></b-form-input>
  </b-row>
</template>
<script>
export default {
name:"textTitle",
  data:()=>({
data:{
type: "textTitle",
title:null,
},
 }),
  methods: { getchildValue() {
      //console.log("getchildValue");
      //console.log(this.data);
      // console.log("from in" + input)
     if((this.data.title!=null&&this.data.title!='')){
    this.$emit('getchildValue',true,this.data)

     }
  }
  }

}

</script>