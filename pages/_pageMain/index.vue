<template>
<b-container class ="p-5">

    <div>
        <h1><strong>ประกาศแจ้งเตือน</strong></h1>
    </div>

    <b-row class = "justify-content-center pt-4"> 
        <Notitag v-bind:TagData="TagData"/>
    </b-row>

    <b-row class = "pt-4"  style="padding:0px 100px;"> 

        <Sortdropdown v-bind:SortData="SortData"/> 

        <b-col>
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
    
    <b-row style="padding:0px 150px;">
    <Noticard v-bind:CardData="CardData" v-for="index in 10" :key="index"/> 
    </b-row>
    <pagebar v-bind:PageBarData="PageBarData"/>


           
</b-container>

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
    {  sorting:"แบบ1",icon:"fa fa-sort-alpha-asc"},
    {  sorting:"แบบ2", icon:"fa fa-sort-amount-asc"},
    {  sorting:"แบบ3",icon:"fa fa-sort-numeric-asc"},
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