<template>
  <div class="justify-content-center text-md-left text-sm-center">
    <b-row class="mx-2 justify-content-center">
      <b-col md="10">
        <b-row class="justify-content-center align-items-stretch">
          <b-col sm="12" md="8">
            <Carouesl />
          </b-col>
          <b-col md="4" sm="12" class="mx-sm-auto">
            <h3 class="text-md-left text-sm-center text-muted mb-3">ประกาศเเจ้งเตือน</h3>
            <NewsBox />
          </b-col>
        </b-row>

        <b-row class="justify-content-center my-5">
          <b-col class="text-center justify-content-center" md="8" sm="12">
            <h2>คำอธิบายเว็บพร้อมภาพอะไรก็ได้</h2>
            <h6
              md="8"
              class
            >Material is an adaptable system of guidelines, components, and tools that support the best practices of user interface design. Backed by open-source code, Material streamlines collaboration between designers and developers, and helps teams quickly build beautiful products.</h6>
          </b-col>
        </b-row>
        <b-row class="mb-sm-5" no-gutters>
          <b-col sm="12" md="12">
            <h2 class="mr-auto">หลักสูตรที่คุณสามารถดำเนินการได้</h2>
            <!-- <h5 class="text-muted ml-2">ดำเนินการล่าสุด</h5>
        <br />
            <DoingCardlesson class="mx-4" :cardData="lessonData.lessonData" />-->
            <b-col cols="12" class="mt-md-3 mt-sm-0">
              <b-row>
                <b-col md="8" sm="12">
                  <UserCard />
                </b-col>
                <b-col md="4" sm="12">
                  <h5 class="text-muted ml-2">ดำเนินการล่าสุด</h5>
                  <DoingCardlesson :cardData="lessonData.lessonData" />
                </b-col>
              </b-row>
            </b-col>
            <b-row>
              <b-col sm="12" md="12">
                <h5 class="text-muted text-sm-center text-md-left ml-2">บทเรียนของคุณ</h5>
                <v-slide-group class show-arrows>
                  <v-slide-item v-for="n in 15" :key="n" class="m-md-4 m-sm-2">
                    <Cardlesson class="mt-2 mx-3" :cardData="lessonData.lessonData" />
                  </v-slide-item>
                </v-slide-group>
              </b-col>
            </b-row>
          </b-col>
          <!-- <v-divider vertical></v-divider> -->
        </b-row>

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
        <b-row class="justify-content-center my-5">
          <b-col class="text-center justify-content-center" md="8" sm="12">
            <h2>ใส่รายละเอียดการจัดทำเเละเครติด</h2>
            <h6
              md="8"
              class
            >Material is an adaptable system of guidelines, components, and tools that support the best practices of user interface design. Backed by open-source code, Material streamlines collaboration between designers and developers, and helps teams quickly build beautiful products.</h6>
          </b-col>
        </b-row>
      </b-col>
    </b-row>
  </div>
</template>

<script>
import UserCard from "~/components/UserCardProfile";
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
    DoingCardlesson,
    UserCard
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