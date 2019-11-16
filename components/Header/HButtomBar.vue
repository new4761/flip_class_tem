<template>
    <b-container fluid>
      
      <b-nav-item v-for="(data,idx) in ButtonData" :key="idx" 
     class="mx-auto px-0 flex justify-between text-nowrap text-center"> 
        <i :class="data.icon"> </i><br>{{ data.name }} 
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
