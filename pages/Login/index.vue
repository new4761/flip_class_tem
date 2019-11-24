<template>
  <div class="app bg justify-content-center align-items-center">
    <div class="container">
      <b-row class="justify-content-center">
        <b-col md="9" style="max-width: 750px;">
          <b-card-group class="shadow-lg">
            <b-card
              no-body
              class="border-0 cardbg text-white py-5 d-md-down-none"
              style="min-height: 370px;"
            >
              <b-card-body class="text-center">
                <div>
                  <h2>Flip Classroom</h2>
                  <p>Learn Anytime, anywhere</p>
                  <SVGlearn />
                </div>
              </b-card-body>
            </b-card>

            <b-card no-body class="border-0 px-4">
              <div v-show="hide">
                <v-tabs hide-slider>
                  <v-spacer></v-spacer>

                  <v-tab v-on:click="buttonhide = true" class="tab">Student</v-tab>
                  <v-tab v-on:click="buttonhide = false" class="tab">Teacher</v-tab>

                  <v-tab-item>
                    <StudentLogin />
                  </v-tab-item>

                  <v-tab-item>
                    <TeacherLogin />
                  </v-tab-item>
                </v-tabs>
              </div>


              <div v-show="!hide">
                <ForgetPassCard />
              </div>

              <b-card-body class="pb-4 pt-0">
                <b-row>
                
                  <b-col v-show="buttonhide" cols="6">
                   <nuxt-link to= "/" v-show="hide">
                    <v-btn  depressed class="login px-4 text-white">Login</v-btn>
                    </nuxt-link>
                  </b-col>
                  
                  
                  <b-col v-show="!buttonhide" cols="6">
                    <nuxt-link to= "/admin" v-show="hide">
                    <v-btn depressed class="tlogin px-4 text-white">Login</v-btn>
                     </nuxt-link>
                  </b-col>


                  <b-col cols="6" class="text-right">
                    <b-button
                      v-show="hide"
                      v-on:click="hide = !hide"
                      variant="link"
                      class="px-0 text-gray-600"
                    >Forgot password?</b-button>
                    <b-button
                      v-show="!hide"
                      v-on:click="hide = !hide"
                      variant="link"
                      class="px-0"
                    >back</b-button>
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
import ForgetPassCard from "./components/ForgetPassCard";
import SVGlearn from "./components/SVGlearn";
import StudentLogin from "./components/StudentLogin";
import TeacherLogin from "./components/TeacherLogin";

export default {
  layout: "clean",

  components: {
    StudentLogin,
    TeacherLogin,
    ForgetPassCard,
    SVGlearn
  },

  data: () => ({
    hide: true,
    buttonhide: true
  })
};
</script>
<style>
@import "./css/LoginStyle.css";
</style>