<template>
  <div class="justify-content-center text-md-left text-sm-center">
    <!-- <b-media no-body>
      <b-media-body class="ml-3">
        <Carouesl />
      </b-media-body>
      <b-media-aside vertical-align="center">
        <NewsBox style="height:100%;" />
      </b-media-aside>
    </b-media>-->
    <b-row class="justify-content-center d-flex align-items-stretch">
      <b-col sm="12" md="12">
        <Carouesl />
      </b-col>
    </b-row>

    <!-- <b-col sm="12" offset-md="0" md="3" class="py-3">
        <div>
          <h2 class="d-inline">บทเรียนล่าสุด</h2>
          <b-button size="md" class="px-3 ml-1 mb-2" pill variant="primary">
            ดำเนินการต่อ
            <i class="fa fa-arrow-circle-right fa-lg"></i>
          </b-button>
          <br />
          <Cardlesson class="mx-auto mt-2" :cardData="lessonData.lessonData" />
        </div>
    </b-col>-->

    <!-- <v-divider class="mx-5"></v-divider> -->
    <b-row class="justify-content-center m-auto">
      <b-col class="text-center m-3 p-5 justify-content-center" md="8">
        <h2>คำอธิบายเว็บพร้อมภาพอะไรก็ได้</h2>
        <h6
          md="8"
          class
        >Material is an adaptable system of guidelines, components, and tools that support the best practices of user interface design. Backed by open-source code, Material streamlines collaboration between designers and developers, and helps teams quickly build beautiful products.</h6>
      </b-col>
    </b-row>
    <!-- <v-divider class="mx-5"></v-divider> -->
    <!-- <h4 class="mr-auto">หลักสูตรที่คุณสามารถดำเนินการได้</h4>
    <br />
    <b-row class="justify-content-center mx-md-5 mx-sm-1">
           <b-col sm="12" md="12">
        <DoingCardlesson :cardData="lessonData.lessonData" />
    </b-col>-->
    <!-- <b-col md="12" sm="12">
        <h2  class="text-sm-center text-md-left ml-md-5">บทเรียนล่าสุด</h2>
        <br />
        <div class="mx-5">
        <DoingCardlesson class="mx-5" :cardData="lessonData.lessonData" />
        </div>
    </b-col>-->
    <b-row class="mb-sm-5" no-gutters>
      <b-col sm="12" md="7">
        <h2 class="mr-auto">หลักสูตรที่คุณสามารถดำเนินการได้</h2>
        <h5 class="text-muted ml-2">ดำเนินการล่าสุด</h5>
        <br />
        <DoingCardlesson class="mx-4" :cardData="lessonData.lessonData" />
        <b-row>
          <b-col sm="12" md="12">
            <h5 class="text-muted text-sm-center text-md-left ml-2">บทเรียนของคุณ</h5>
            <!-- <v-slide-group class="pa-4" prev-icon="mdi-minus" next-icon="mdi-plus" show-arrows> -->
            <v-slide-group class show-arrows>
              <v-slide-item v-for="n in 15" :key="n" class="m-md-4 m-sm-2">
                <Cardlesson class="mt-2 mx-3" :cardData="lessonData.lessonData" />
              </v-slide-item>
            </v-slide-group>
          </b-col>
        </b-row>
      </b-col>
        <!-- <v-divider vertical></v-divider> -->
      <b-col md="4" sm="12" class="mx-sm-auto">
        <h2 class="text-md-left text-sm-center">ประกาศเเจ้งเตือน</h2>
        <NewsBox />
      </b-col>
    </b-row>

    <!-- <b-col sm="12" md="12">
        <h2 class="text-sm-center text-md-left ml-md-5">บทเรียนของคุณ</h2>
        <v-slide-group class="pa-4" prev-icon="mdi-minus" next-icon="mdi-plus" show-arrows>
        <v-slide-group class="pa-4 px-md-5" show-arrows>
          <v-slide-item v-for="n in 15" :key="n" class="m-md-4 m-sm-2">
            <Cardlesson class="mt-2" style="width:300px" :cardData="lessonData.lessonData" />
          </v-slide-item>
        </v-slide-group>
    </b-col>-->
    <b-row no-gutters>
      <b-col sm="12" md="12">
        <h5 class="text-muted text-sm-center text-md-left ml-2">เเบบฝึกหัดของคุณ</h5>
        <!-- <v-slide-group class="pa-4" prev-icon="mdi-minus" next-icon="mdi-plus" show-arrows> -->
        <v-slide-group class show-arrows>
          <v-slide-item v-for="n in 15" :key="n" class="m-md-4 m-sm-2">
            <Cardlesson class="mt-2 mx-3" :cardData="lessonData.lessonData" />
          </v-slide-item>
        </v-slide-group>
      </b-col>
    </b-row>
    <b-row class="justify-content-center m-auto">
      <b-col class="text-center m-3 p-5 justify-content-center" md="8">
        <h2>ใส่รายละเอียดการจัดทำเเละเครติด</h2>
        <h6
          md="8"
          class
        >Material is an adaptable system of guidelines, components, and tools that support the best practices of user interface design. Backed by open-source code, Material streamlines collaboration between designers and developers, and helps teams quickly build beautiful products.</h6>
      </b-col>
    </b-row>
  </div>
</template>

<script>
import Carouesl from "./compoents/indexCarousel";
import NewsBox from "./compoents/NewsBox";
import DoingCardlesson from "~/components/lessonCard/DoingCard";
import Cardlesson from "~/components/lessonCard/LessonCard";
import { mapGetters } from "vuex";
import { mapState } from "vuex";
export default {
  components: {
    Carouesl,
    Cardlesson,
    NewsBox,
    DoingCardlesson
  },

  // computed: mapGetters({
  //     articles: "testStore/testget"
  //   }),

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
    maxSmallcardWight: 300
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