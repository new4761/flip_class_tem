<template>
        <b-col class = "d-flex align-items-center">
            <i class="fa fa-sort fa-2x"></i>
                <b-dropdown size="sm" text="จัดเรียงโดย" class="m-2">

                <b-dropdown-item-button v-for="(data,index) in OptionData" :key="index" >
                    <i :class="data.icon"></i>
                    {{data.sorting}}</b-dropdown-item-button>

              </b-dropdown>
        </b-col>
</template>

<script>

export default {
    data:()=>({
OptionData:[
    {  
     sorting:"แบบ1",
     icon:"fa fa-sort-alpha-asc"
     },

    {  
     sorting:"แบบ2",
     icon:"fa fa-sort-amount-asc"
     },

    {  
     sorting:"แบบ3",
     icon:"fa fa-sort-numeric-asc"
     },]

    })
}
</script>