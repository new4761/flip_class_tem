<template>
  <div class="overlay background bg-myblue justify-content-center text-md-left text-sm-center">

    <!-- <b-row  class="justify-content-center text-md-left text-sm-center mx-2">
      <b-col md="4" sm="12">
        <DoingCardlesson :cardData="lessonData.lessonData" />
      </b-col> 
    </b-row> -->


    <b-row class="mx-2 justify-content-center">

      <b-col md="10">
        <b-row class="justify-content-center align-items-stretch">
          <b-col sm="12" md="8">
            <h3 class="text-md-left-sm-center text-white mb-3">ประกาศสำคัญ</h3>
            <Carouesl />
          </b-col>
          <b-col md="4" sm="12" class="mx-sm-auto">
            <h3 class="text-md-left-sm-center text-white mb-3">ประกาศ</h3>
            <NewsBox />
          </b-col>
        </b-row>
      </b-col>

      
<div class="rt180">
      <SVGPart/>
</div>

     

      <b-row class="bg-white background justify-content-center">
        <b-col md="10" sm="12" align="center">
          <UserCard v-bind:UserCardData="UserCardData" />
        </b-col>
      </b-row>

      <b-row class="background justify-content-center text-center d-md-down-none bg-white">
        <IntroCard />
      </b-row>
      
<div >
      <SVGPart/>
</div>

      <b-col md="10">
        <b-row class="mb-sm-5" no-gutters>
          <b-col sm="12" md="12">
            <b-row>
              <b-col sm="12" md="12">
                <h3 class="text-white text-sm-center text-md-left ml-2">บทเรียนของคุณ</h3>
                <v-slide-group class show-arrows>
                  <v-slide-item v-for="n in 15" :key="n" class="m-md-4 m-sm-2">
                    <Cardlesson class="mt-2 mx-3" :cardData="lessonData.lessonData" />
                  </v-slide-item>
                </v-slide-group>
              </b-col>
            </b-row>
          </b-col>
        </b-row>

        <b-row class="bg-white background justify-content-center my-5">
                      
<div class="rt180" >
      <SVGPart/>
</div>
          <b-col class="text-center justify-content-center" md="8" sm="12">

            <h2>ใส่รายละเอียดการจัดทำเเละเครติด</h2>
            <h6
              md="8"
              class
            >Material is an adaptable system of guidelines, components, and tools that support the best practices of user interface design. Backed by open-source code, Material streamlines collaboration between designers and developers, and helps teams quickly build beautiful products.</h6>
          </b-col>

  <div>
      <SVGPart/>
</div>

        </b-row>
      </b-col>
    </b-row>
  </div>
</template>

<script>
import UserCard from "./components/UserCardProfile";
import Carouesl from "./components/indexCarousel";
import NewsBox from "./components/NewsBox";
import SVGPart from "./components/SVGPart";
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
    SVGPart
  },
  computed: mapState({
    lessonData: state => state.testStore.lessonData
  }),

  middleware: "testpage",
  // mounted: {
  //   lessonData: function() {
  //  returnaxios.get("/api").then(response => (this.lessonData = response));
  //   }
  // },
  data: () => ({
    maxSmallcardWight: 300,

     UserCardData:[
     
    {title:"บทเรียน",
     icon:"fa fa-book",
     value:"20",
     maxvalue:"30",
     link:"#"
  },
      {title:"แบบฝึกหัด",
      icon:"fa fa-certificate",
     value:"10",
     maxvalue:"60",
     link:"#"
  },
      {title:"งาน",
      icon:"fa fa-folder-open",
     value:"9",
     maxvalue:"20",
     link:"#"
  },
    ],

    //  lessonData: {
    //   lastUpdate: "14/7/2542 10:24",
    //   imgSrc: "https://placekitten.com/380/200",
    //   typeVariant: "primary",
    //   typeName: "test",
    //   cardTitle: "test",
    //   cardTag: [
    //     { tagVariant: "primary", tagName: "tagName" },
    //     { tagVariant: "primary", tagName: "tagName" },
    //     { tagVariant: "primary", tagName: "tagName" }
    //   ],
    //   cardSmallDes:
    //     "Now you can finally test your work by changing VUE_APP_API_CLIENT in the targeted environment to either mock or server. But note that each time you change it you have to restart/rebuild your app.",
    //   cardViewCount: 3000,
    //   cardDoneCount: 3000,
    //   cardCreaterData: {
    //     src: "https://placekitten.com/380/200",
    //     name: "GodNewInwZa"
    //   },
    //   progress: 30
    // }
  })
};
</script>
<style>
@import "./css/realpagestyle.css";
</style>
