<template>
  <b-row no-gutters>
    <h5 class="py-1">
      ระบุคำอธิบาย
      <small class="text-muted">(จำเป็น)</small>
    </h5>
    <b-form-input v-model="data.title" type="text" required placeholder="กำหนดข้อความ"></b-form-input>
    <h5 class="py-1">
      Link to google drive
      <small class="text-muted">(จำเป็น)</small>
    </h5>
    <b-form-input v-model="data.link" type="text" required placeholder="Link to google drive"></b-form-input>
  </b-row>
</template>
<script>
export default {
name:"",
  data:()=>({
data:{
type: "downLoadFile",
title:null,
link:null
},
 }),
  methods: { getchildValue() {
      //console.log("getchildValue");
      //console.log(this.data);
      // console.log("from in" + input)
     if((this.data.title!=null&&this.data.link!='')&&(this.data.link!=null&&this.data.title!='')){
    this.$emit('getchildValue',true,this.data)

     }
  }
  }

}

</script>