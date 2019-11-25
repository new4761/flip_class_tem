<template>
  <b-row no-gutters>
    <h5 class="py-1">
      ระบุข้อความบรรยาย
      <small class="text-muted">(จำเป็น)</small>
    </h5>
    <b-form-textarea v-model="data.content" type="text" required placeholder="กำหนดข้อความ"></b-form-textarea>
  </b-row>
</template>
<script>
export default {

  data:()=>({
data:{
type: "textContent",
content:null,
},
 }),
  methods: { getchildValue() {
      //console.log("getchildValue");
      //console.log(this.data);
      // console.log("from in" + input)
     if((this.data.content!=null&&this.data.content!='')){
    this.$emit('getchildValue',true,this.data)

     }
  }
  }

}

</script>