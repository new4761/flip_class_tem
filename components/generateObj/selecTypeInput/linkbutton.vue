<template>
  <b-row no-gutters>
     <h5 class="py-1">
            ข้อความบนปุ่ม
            <small class="text-muted">(จำเป็น)</small>
          </h5>
          <b-form-input    v-model="data.title" type="text" required placeholder="กำหนดข้อความบนปุ่ม"></b-form-input>
          <h5 class="py-1">
            วาง Link สำหรับไปสู่ Website ต่างๆ
            <small class="text-muted">(จำเป็น)</small>
          </h5>
          <b-form-input  v-model="data.link" type="text" required placeholder="วาง Link ต่างๆ"></b-form-input>
        </b-row>
</template>
<script>
export default {
  data:()=>({
data:{
type: "linkButton",
title:null,
link:null
}


  }),
  methods: {
    getchildValue() {
      //console.log("getchildValue");
      //console.log(this.data);
      // console.log("from in" + input)
     if((this.data.title!=null&&this.data.title!='')&&(this.data.link!=null&&this.data.link!='')){
    this.$emit('getchildValue',true,this.data)

     }
  }
  }}

</script>

