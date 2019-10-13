<template>
    <b-container fluid>
      
      <b-nav-item v-for="(data,idx) in ButtonData" :key="idx" 
      class="container mx-auto px-3 flex justify-between">
        <i :class="data.icon"> </i>&nbsp; {{ data.name }}
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
