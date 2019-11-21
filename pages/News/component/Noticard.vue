<template>

    <b-row class = "justify-content-center pt-4">
        <b-media v-for="(data,index) in CardData" :key="index" class="border-0 w-100">
            <b-row class = "justify-content-center d-md-none">
                <b-col>
                     <img class="card-img" :src="data.imgsrc"> 
                </b-col>
            </b-row>
            <b-row class = "justify-content-center px-md-5">
                    <b-col class="col-4 d-sm-down-none" >
                         <img class="card-img" :src="data.imgsrc">
                    </b-col>
                    <b-col  class = "px-3">
                        <b-row class = "px-3">
                            <h4>
                                <b-badge :variant= data.tagtype>{{data.tagname}}</b-badge> 
                                {{data.header}} </h4> 
                        </b-row>
                        <b-row class ="px-3">
                          <small class="text-muted">{{data.time}} {{data.date}}&nbsp;</small>
                          <small>โดย <i class="fa fa-user"></i> {{data.username}}  </small>        
                        </b-row>
                        <b-row class ="px-3 ">
                            {{data.content}}
                        </b-row>
                        
                        <b-row class = "justify-content-center pt-4 ">
                            <a :href= data.link class="cardbutton btn btn-primary ml-md-auto mr-3 text-nowrap "> 
                            <b class="h6">รายละเอียดเพิ่มเติม</b> </a>
                        </b-row>


                    </b-col>
                </b-row>
                    <!-- <b-row> 
                    <b-col class="col-4" ></b-col>
                      <b-col>                        
                            <b-row class = "d-flex align-items-center px-3">
                                <small class="text-muted"><i class="fa fa-eye"></i> &nbsp; {{data.view}} </small>
                                <a :href= data.link class="cardbutton btn btn-primary ml-auto">
                                    รายละเอียดเพิ่มเติม</a>
                            </b-row>
                        </b-col>
                    </b-row> -->

            <v-divider class="mx-sm-5 mx-0"></v-divider>
        </b-media>
        

    </b-row>


</template>

<script>
import AvatarRef from "~/components/AvatarRef";

export default {
    props:['CardData'],

    
components: {
    AvatarRef
  },
    data:()=>({

    })
}
</script>
