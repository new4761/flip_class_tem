<t<template>
  <b-row no-gutters>
    <h5 class="py-1">
      ระบุชื่อไฟล์ที่ต้องการให้อัพโหลด
      <small class="text-muted">(จำเป็น)</small>
    </h5>
    <b-form-input v-model="data.title" type="text" required placeholder="ระบุชื่อไฟล์ที่ต้องการให้อัพโหลด"></b-form-input>
    <h5 class="py-1">
      ระบุคำอธิบาย
    </h5>
    <b-form-input v-model="data.desc" type="text"  placeholder="ระบุคำอธิบาย"></b-form-input>
  </b-row>
</template>
<script>
export default {
name:"",
  data:()=>({
data:{
type: "upLoadFile",
title:null,
desc:null
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