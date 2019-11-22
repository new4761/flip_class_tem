<template>
<div class="background bgtop">
<b class ="p-5">

    <b-row class = "pl-5 ml-5">
        <h1><strong>ประกาศแจ้งเตือน</strong></h1>
    </b-row>

    <b-row class = "pt-4 px-5 justify-content-center"> 
        <Notitag v-bind:TagData="TagData"/>
    </b-row>

   <b-row align-h="around" class = "pt-4 px-4" >
       
        <b-col cols="auto" class = "d-flex">
            <Sortdropdown v-bind:SortData="SortData"/>
        </b-col>
        
        <b-col cols="auto" class = "d-flex">  
            <div class="input-group ml-auto">
                <input type="text" class="form-control" placeholder="ค้นหา..." aria-label="ค้นหา...">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">
                            <i class="icon-magnifier"></i>
                        </button>
                    </span>
            </div>
        </b-col>        
    </b-row>
    
    <b-row  class = "justify-content-center">
        <b-col md="9" sm="7" class="px-4 bg-white cardradius">
    <Noticard v-bind:CardData="CardData" v-for="index in 10" :key="index"/> 
        
        <pagebar v-bind:PageBarData="PageBarData"/>

        </b-col>
    </b-row>
    
    

           
</b>
</div>

</template>

<script>
import Noticard from "./component/Noticard.vue";
import Notitag from "./component/Notitag.vue";
import Pagebar from "./component/Pagebar.vue";
import Sortdropdown from "./component/Sortdropdown.vue";

export default {
    components: {
        Noticard,
        Notitag,
        Pagebar,
        Sortdropdown
  },
  
  data(){
      return{
    CardData:[
    {tagtype:"warning",
     tagname:"tag",
     imgsrc:"https://via.placeholder.com/400x200", //help
     header:"This is Title!!!",
     time:"99.99",
     date:"99/99/9999",
     username:"username",
     content:"Short description",
     view:"3000",
     link:"#"}
    ],

    TagData:[
    {  name:"tag1",type:"success"},
    {  name:"tag2",type:"danger"},
    {  name:"tag3",type:"warning"}
    ],

    SortData:[
    {  sorting:"ประเภท1",icon:"fa fa-sort-alpha-asc"},
    {  sorting:"ประเภท2", icon:"fa fa-sort-amount-asc"},
    {  sorting:"ประเภท3",icon:"fa fa-sort-numeric-asc"},
    ],

    PageBarData:[
    {  link:"#" },
    {  link:"#" },
    {  link:"#" }
    ]

    }
  }
  
}

</script>


<style >


</style>