<template>
  <div class="justify-content-center text-md-left text-sm-center">


    <b-row class="mx-2 justify-content-center">
            
      <b-row class="background bgtop  justify-content-center">


      <b-col md="10">
        <b-row class="justify-content-center align-items-stretch">
          <b-col sm="12" md="8">
            <h2 class="text-md-left-sm-center mb-3"><strong>ประกาศสำคัญ</strong></h2>
            <Carouesl />
          </b-col>
          <b-col md="4" sm="12" class="mx-sm-auto">
            <h2 class="text-md-left-sm-center mb-3"><strong>ประกาศ</strong></h2>
            <NewsBox />
          </b-col>
          

        </b-row>
     
      </b-col>

      <SVGdivide/>

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
          <v-tabs grow centered multiple >
           <v-tab> <h3>บทเรียน</h3> </v-tab>
           <v-tab> <h3>แบบฝึกหัด</h3></v-tab>
           <v-tab> <h3>กิจกรรมล่าสุด</h3></v-tab>
          <v-tab-item>
         

      <b-row class="justify-content-around">

      <b-col md="4" align="center" class="mx-2 d-md-down-none">
        <SVGpicRoom/>
      </b-col>


      <b-col md="6" sm="12" align="center" class="mx-0">
                <h3 class="text-muted text-sm-center text-md-left ml-2">บทเรียนของคุณ</h3>
                <v-slide-group prev-icon="fa fa-arrow-left"
                               next-icon="fa fa-arrow-right" 
                               show-arrows>
                  <v-slide-item v-for="n in 15" :key="n" class="m-md-4 m-sm-2">
                    <Cardlesson class="mt-2 mx-3" :cardData="lessonData.lessonData" />
                  </v-slide-item>
                </v-slide-group>
        </b-col>
        </b-row>
        
        </v-tab-item>

               <v-tab-item>
         

      <b-row class="justify-content-around">

      <b-col md="4" align="center" class="mx-2 d-md-down-none">
        <SVGpicLesson/>
      </b-col>


      <b-col md="6" sm="12" align="center" class="mx-0">
                <h3 class="text-muted text-sm-center text-md-left ml-2">แบบฝึกหัดของคุณ</h3>
                <v-slide-group prev-icon="fa fa-arrow-left"
                               next-icon="fa fa-arrow-right" 
                               show-arrows>
                  <v-slide-item v-for="n in 15" :key="n" class="m-md-4 m-sm-2">
                    <Cardlesson class="mt-2 mx-3" :cardData="lessonData.lessonData" />
                  </v-slide-item>
                </v-slide-group>
        </b-col>
        </b-row>
        
        </v-tab-item>

               <v-tab-item>
         

      <b-row class="justify-content-around">

      <b-col md="4" align="center" class="mx-2 d-md-down-none">
        <SVGpicWork/>
      </b-col>


      <b-col md="6" sm="12" align="center" class="mx-0 pt-5">
          <h3 class="text-muted text-sm-center text-md-left ml-2">กิจกรรมล่าสุดของคุณ</h3>
 
        <DoingCardlesson :cardData="lessonData.lessonData" />
  
        </b-col>
        </b-row>
        
        </v-tab-item>

        

        </v-tabs>

       
      
        </b-row>
        

        <b-row class="background bgtop justify-content-center my-5">


          <SVGdivide2/>
                      
<!-- <div class="rt180" >
      <SVGPart/>
</div> -->

          <b-col class="text-center justify-content-center" md="8" sm="12">
            <h2>ใส่รายละเอียดการจัดทำเเละเครติด</h2>
            <h6
              md="8"
              class
            >Material is an adaptable system of guidelines, components, and tools that support the best practices of user interface design. Backed by open-source code, Material streamlines collaboration between designers and developers, and helps teams quickly build beautiful products.</h6>
          </b-col>

                <b-row class="background justify-content-center text-center d-md-down-none">
        <IntroCard />
      </b-row>

  <!-- <div>
      <SVGPart/>
</div> -->

        <SVGdivide/>

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

    UserCardData: [
      {
        title: "บทเรียน",
        icon: "fa fa-book",
        value: "20",
        maxvalue: "30",
        link: "#"
      },
      {
        title: "แบบฝึกหัด",
        icon: "fa fa-certificate",
        value: "10",
        maxvalue: "60",
        link: "#"
      },
      {
        title: "งาน",
        icon: "fa fa-folder-open",
        value: "9",
        maxvalue: "20",
        link: "#"
      }
    ]

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
