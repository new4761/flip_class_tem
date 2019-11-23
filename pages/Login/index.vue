<template>
  <div class="app bg justify-content-center align-items-center">
    
    <div class="container">
      <b-row class="justify-content-center">
        <b-col md="9" style="max-width: 750px;">
          <b-card-group class="shadow-lg">
            <b-card
              no-body
              class="border-0 cardbg text-white py-5 d-md-down-none"
                      style="min-height: 370px;">
            
              <b-card-body class="text-center " >
        
                <div >
                  <h2>Flip Classroom</h2>
                  <p>Learn Anytime, anywhere</p>       
                  <SVGlearn/>          
                </div>
          
              </b-card-body>

            </b-card>

            <b-card no-body class="border-0 px-4">

             <div v-show="hide">
               <LoginCard/>
               
             </div>



              <div v-show="!hide">
              <ForgetPassCard/>
              </div>


            <b-card-body class="pb-4 pt-0">
            <b-row>
            <b-col cols="6">
              <v-btn  v-show="hide" depressed class="login px-4 bg-blue text-white">Login</v-btn>
            </b-col>
            <b-col cols="6" class="text-right">
              <b-button v-show="hide" v-on:click="hide = !hide"  variant="link" class="px-0">Forgot password?</b-button>
              <b-button v-show="!hide" v-on:click="hide = !hide"  variant="link" class="px-0">back</b-button>
            </b-col>

            </b-row>
            </b-card-body>

            </b-card>
          </b-card-group>
        </b-col>
      </b-row>
    </div>
  </div>
</template>




<script>
import LoginCard from "./components/LoginCard";
import ForgetPassCard from "./components/ForgetPassCard";
import SVGlearn from "./components/SVGlearn";


export default {

    layout: "clean",

  components: {
    LoginCard,
    ForgetPassCard,
    SVGlearn
  },

   data: () => ({
      hide: true
   }),
   
};


</script>
<style>
@import "./css/Loginstyle.css";
</style>