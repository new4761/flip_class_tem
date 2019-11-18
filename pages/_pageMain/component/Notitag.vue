<template>
<div>
 
    <b-button v-for="(data,idx) in TagData" :key="idx" :variant="data.type" 
              class="tag m-2">
        {{ data.name }}
    </b-button>


</div>
</template>
<script>

export default {
    props:['TagData'],
    data:()=>({

    })
}
</script>

<style>
@import '../css/notistyle.css';

</style>