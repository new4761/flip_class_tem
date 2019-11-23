<template>
    <b-container fluid>
      
      <b-nav-item v-for="(data,idx) in ButtonData" :key="idx" 
     class="mx-auto px-0 flex justify-between text-nowrap text-center">
     <nuxt-link :to=data.link class="DHbutton">
        <i :class="data.icon"> </i><br>{{ data.name }} 
        </nuxt-link>
      </b-nav-item>
      
    </b-container>
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
