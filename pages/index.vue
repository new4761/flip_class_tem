<template>
  <div class="justify-content-center text-md-left text-sm-center">
    <b-row class="mx-2 justify-content-center">
      <b-row class="background bgtop justify-content-center">
        <b-col md="10">
          <b-row class="justify-content-center align-items-stretch">
            <b-col sm="12" md="8">
              <h2 class="text-md-left-sm-center mb-3">
                <strong>ประกาศสำคัญ</strong>
              </h2>
              <Carouesl />
            </b-col>
            <b-col md="4" sm="12" class="mx-sm-auto">
              <h2 class="text-md-left-sm-center mb-3">
                <strong>ประกาศ</strong>
              </h2>
              <NewsBox />
            </b-col>
          </b-row>
        </b-col>

        <SVGdivide />
      </b-row>

      <b-row class="background justify-content-center">
        <b-col md="10" sm="12" align="center">
          <UserCard v-bind:UserCardData="UserCardData" />
        </b-col>
      </b-row>

      <!-- <div >
      <SVGPart/>
      </div>-->

      <b-col md="10" style="max-width: 1200px;">
        <b-row>
          <v-tabs grow centered multiple>
            <v-tab>
              <h3>กิจกรรมล่าสุด</h3>
            </v-tab>
            <v-tab>
              <h3>แบบฝึกหัด</h3>
            </v-tab>
            <v-tab>
              <h3>บทเรียน</h3>
            </v-tab>

            <v-tab-item>
              <b-row class="justify-content-around">
                <b-col md="4" align="center" class="mx-2 d-md-down-none">
                  <SVGpicWork />
                </b-col>

                <b-col md="6" sm="12" align="center" class="mx-0 pt-5">
                  <h3 class="text-muted text-sm-center text-md-left ml-2">กิจกรรมล่าสุดของคุณ</h3>

                  <DoingCardlesson :cardData="lessonData" />
                </b-col>
              </b-row>
            </v-tab-item>


            <v-tab-item>
              <b-row class="justify-content-around">
                <b-col md="4" align="center" class="mx-2 d-md-down-none">
                  <SVGpicRoom />
                </b-col>

                <b-col md="6" sm="12" align="center" class="mx-0">
                  <h3 class="text-muted text-sm-center text-md-left ml-2">บทเรียนของคุณ</h3>
                  <v-slide-group
                    prev-icon="fa fa-arrow-left"
                    next-icon="fa fa-arrow-right"
                    show-arrows
                  >
                    <v-slide-item v-for="n in 15" :key="n" class="m-md-4 m-sm-2">
                      <Cardlesson class="mt-2 mx-3" :cardData="lessonData" />
                    </v-slide-item>
                  </v-slide-group>
                </b-col>
              </b-row>
            </v-tab-item>

            <v-tab-item>
              <b-row class="justify-content-around">
                <b-col md="4" align="center" class="mx-2 d-md-down-none">
                  <SVGpicLesson />
                </b-col>

                <b-col md="6" sm="12" align="center" class="mx-0">
                  <h3 class="text-muted text-sm-center text-md-left ml-2">แบบฝึกหัดของคุณ</h3>
                  <v-slide-group
                    prev-icon="fa fa-arrow-left"
                    next-icon="fa fa-arrow-right"
                    show-arrows
                  >
                    <v-slide-item v-for="n in 15" :key="n" class="m-md-4 m-sm-2">
                      <Cardlesson class="mt-2 mx-3" :cardData="lessonData" />
                    </v-slide-item>
                  </v-slide-group>
                </b-col>
              </b-row>
            </v-tab-item>

          </v-tabs>
        </b-row>

        <b-row class="background bgtop justify-content-center my-5">
          <SVGdivide2 />

          <!-- <div class="rt180" >
      <SVGPart/>
          </div>-->

          <b-row class="background justify-content-center text-center d-md-down-none">
            <IntroCard />
          </b-row>


          <b-col class="text-center justify-content-center" md="8" sm="12">
            <h2>รายละเอียดการจัดทำเเละเครติด</h2>
            <h6
              md="8"
              class
            >Nuxt is a progressive framework based on Vue.js to create modern web applications. It is based on Vue.js official libraries (vue, vue-router and vuex) and powerful development tools (webpack, Babel and PostCSS). Nuxt goal is to make web development powerful and performant with a great developer experience in mind.</h6>
          </b-col>

          <!-- <div>
      <SVGPart/>
          </div>-->

          <SVGdivide />
        </b-row>
      </b-col>
    </b-row>
  </div>
</template>

<script>
import UserCard from "./components/UserCardProfile";
import Carouesl from "./components/indexCarousel";
import NewsBox from "./components/NewsBox";
import SVGdivide from "./components/SVG/SVGdivide";
import SVGdivide2 from "./components/SVG/SVGdivide2";
import SVGpicWork from "./components/SVG/SVGpicWork";
import SVGpicRoom from "./components/SVG/SVGpicRoom";
import SVGpicLesson from "./components/SVG/SVGpicLesson";
import IntroCard from "./components/IntroCard";
import DoingCardlesson from "~/components/lessonCard/DoingCard";
import Cardlesson from "~/components/lessonCard/LessonCard";

import { mapGetters } from "vuex";
import { mapState } from "vuex";
export default {
  components: {
    Carouesl,
    Cardlesson,
    NewsBox,
    DoingCardlesson,
    UserCard,
    IntroCard,
    SVGdivide,
    SVGdivide2,
    SVGpicWork,
    SVGpicRoom,
    SVGpicLesson
  },
  computed: mapState({
    lessonData: state => state.testStore.lessonData,
    UserCardData: state => state.student.UserCardData,
  }),

  middleware: "testpage",
  // mounted: {
  //   lessonData: function() {
  //  returnaxios.get("/api").then(response => (this.lessonData = response));
  //   }
  // },
  data: () => ({
    maxSmallcardWight: 300,
  })
};
</script>
<style>
@import "./css/realpagestyle.css";
</style>
