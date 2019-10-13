<template>

    <b-row class = "justify-content-center  pt-4 ">
        <b-card v-for="(data,index) in CardData" :key="index" class="border-0 w-100">
            <b-row class = "justify-content-center  px-3">
                    <b-col class="col-4" >
                         <img class="card-img" src="~static/img/500x500.jpg"> <!-- why it not showing when use data.image -->
                    </b-col>
                    <b-col  class = "px-3">
                        <b-row class = "px-3">
                            <h4>
                                <b-badge :variant= data.tagtype>{{data.tagname}}</b-badge> 
                                {{data.header}} </h4> 
                        </b-row>
                        <b-row class ="px-3">
                        <small class="text-muted">{{data.time}} {{data.date}}</small>
                        <small>&nbsp; โดย <i class="fa fa-user"></i> {{data.username}}  </small>
                         <br>{{data.content}}
                        </b-row>

                        </b-col>
                </b-row>
                    <b-row> 
                    <b-col class="col-4" ></b-col>
                      <b-col>                        
                            <b-row class = "d-flex align-items-center px-3">
                                <small class="text-muted"><i class="fa fa-eye"></i> &nbsp; {{data.view}} </small>
                                <a :href= data.link class="cardbutton btn btn-primary ml-auto">
                                    รายละเอียดเพิ่มเติม</a>
                            </b-row>
                        </b-col>
                    </b-row>
        </b-card>
        

    </b-row>


</template>

<script>

export default {
    props:['CardData'],
    data:()=>({

    })
}
</script>