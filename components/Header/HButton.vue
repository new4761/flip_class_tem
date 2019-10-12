<template>
<div>
    
    <b-button  v-for="(data,idx) in ButtonData" :key="idx" variant="primary" class="Hbutton mx-3 my-0">
        <i :class="data.icon"> </i>&nbsp; {{ data.name }}
    </b-button>

</div>
</template>
<script>

export default {
    data:()=>({
ButtonData:[
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