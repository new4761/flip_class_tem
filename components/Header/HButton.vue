<template>
<div>
    
    <nuxt-link :to=data.link class="Hbutton"  v-for="(data,idx) in ButtonData" :key="idx">
       <a class="hoverline"><i :class="data.icon"> </i>&nbsp;{{ data.name }}</a>
    </nuxt-link >

</div>
</template>
<script>

export default {
    props:['ButtonData'],
    data:()=>({

    })
}
</script>

<style>
@import './css/HeaderStyle.css';
</style>