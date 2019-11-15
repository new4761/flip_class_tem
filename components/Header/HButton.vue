<template>
<div>
    
    <nuxt-link :to=data.link class="Hbutton"  v-for="(data,idx) in ButtonData" :key="idx">
        <i :class="data.icon"> </i>&nbsp; {{ data.name }}
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