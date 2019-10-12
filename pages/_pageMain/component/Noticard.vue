<template>

    <b-row  class = "justify-content-center  pt-4 ">
        <b-card v-for="index in 5" :key="index" class="border-0 w-100">
            <b-row class = "justify-content-center  px-3">
                    <b-col class="col-4" >
                         <img class="card-img" src="~static/img/500x500.jpg">
                    </b-col>
                    <b-col  class = "px-3">
                        <b-row class = "px-3">
                            <a href="#" class="btn btn-primary">Button</a>
                            <small class="text-muted">Last updated 3 mins ago </small>
                        </b-row>
                        <b-row class ="px-3">
                        <small class="text-muted">time date</small>
                        <small>by <i class="fa fa-user"></i>  </small>
                         <br>text
                        </b-row>
                            
                            <b-row class = "px-3">
                                <small class="text-muted">Last updated 3 mins ago </small>
                                <a href="#" class="btn btn-primary ml-auto small">Button</a>
                            </b-row>     
                        </b-col>
                </b-row>
        </b-card>
    </b-row>


</template>