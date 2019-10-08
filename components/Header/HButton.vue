<template><div>
    <b-button  v-for="data in ButtonData" :key="data" variant="primary" class="mr-2">
        <i :class="data.icon">
            
            </i>&nbsp; {{ data.name }}
    </b-button>

          </div>
</template>
<script>
export default {
    data:()=>({
ButtonData:[
    {icon:"",
     name:"test1"},

    {icon:"",
     name:"test2"},]

    })
}
</script>