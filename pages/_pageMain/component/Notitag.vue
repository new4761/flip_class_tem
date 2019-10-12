<template>
<div>

    <b-button v-for="(data,idx) in TagData" :key="idx" :variant="data.type" 
              class="tag mx-2 my-0">
        {{ data.name }}
    </b-button>


</div>
</template>
<script>

export default {
    data:()=>({
TagData:[
    {  
     name:"tag1",
     type:"success"
     },

    {
     name:"tag2",
     type:"danger"
     },

    {
     name:"tag3",
     type:"warning"
     },]

    })
}
</script>

<style>
@import '../css/notistyle.css';

</style>