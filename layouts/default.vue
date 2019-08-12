<template lang="html">
<div>
<Navbar/>
<vs-alert active="true"  style="text-align:center; ">
<i class=" wrench icon"></i> คณะนี้ website  กำลังอยู่ในการพัฒนาหากพบข้อผิดพลาดใดๆ สามารถทำการเเก้ไปยังอาจารย์ได้ทันที
</vs-alert>
<div > </div>
<el-row :gutter="20">
  <el-col :span="22" :offset="1"><nuxt/></el-col>
</el-row>

<footer/>
</div>
</template>

<script>
import Silderbar from "./default-component/sliderbar";
import Navbar from "./default-component/navbar";
import Footer from "./default-component/footer";
export default {
  components: { Silderbar, Navbar, Footer},
  data: () => ({})
};
</script>

