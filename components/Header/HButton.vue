<template><div>
    <b-button  v-for="(data,idx) in ButtonData" :key="idx" variant="primary" class="Hbutton m-1">
        <i :class="data.icon">
            
            </i>&nbsp; {{ data.name }}
    </b-button>

          </div>
</template>
<script>

export default {
    data:()=>({
ButtonData:[
    {
     icon:"icon-home",
     name:"Home"},

    {
     icon:"icon-question",
     name:"Help"},]

    })
}
</script>

<style>
@import './css/HeaderStyle.css';
</style>