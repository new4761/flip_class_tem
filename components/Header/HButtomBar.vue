<template>
    <b-container fluid>
      
      <b-nav-item v-for="(data,idx) in BarData" :key="idx" 
      class="container mx-auto px-3 flex justify-between">
        <i :class="data.icon"> </i>&nbsp; {{ data.name }}
      </b-nav-item>
    </b-container>
</template>

<script>

export default {
    data:()=>({
BarData:[
    {
     icon:"icon-home",
     name:"หน้าหลัก"},

    {
     icon:"icon-bell",
     name:"ประกาศ"},

    {
     icon:"icon-notebook",
     name:"บทเรียน"},

    {
     icon:"icon-globe-alt",
     name:"เเหล่งเรียนรู้ภายนอก"},]

    })
}
</script>

<style>
@import './css/HeaderStyle.css';
</style>
