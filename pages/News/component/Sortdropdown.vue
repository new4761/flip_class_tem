<template>
        <b class = "d-flex align-items-center ml-auto">
            <i class="fa fa-sort fa-2x"></i>
                <b-dropdown size="sm" text="จัดเรียงโดย" class="ml-2">
                <b-dropdown-item-button v-for="(data,index) in SortData" :key="index"
                >
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
    ,
  methods:{
      sortby(prop){
      this.CardData.sort((a,b) => a[prop] < b[prop] ? -1 : 1)
      }
  }
  
}

</script>