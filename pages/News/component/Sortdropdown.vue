<template>
        <b class = "d-flex align-items-center ml-auto">
            <i class="fa fa-sort fa-2x"></i>
                <b-dropdown size="sm" text="จัดเรียงโดย" class="ml-2">
                <b-dropdown-item-button v-for="(data,index) in SortData" :key="index">
                    <i :class="data.icon"></i>
                    {{data.sorting}}</b-dropdown-item-button>
              </b-dropdown>
        </b>
</template>

<script>

export default {
    props:['SortData'],
    data:()=>({

    })
}
</script>