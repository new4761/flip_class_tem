<template>
  <div class="justify-content-center mx-auto text-md-left text-sm-center offset-md-1 offset-sm-0">
    <b-row class="justify-content-center">
      <b-col sm="12" md="10  " class="py-3">
        <Carouesl />
      </b-col>
    </b-row>
    <v-divider class="mx-5"></v-divider>
    <b-row class="justify-content-center">
      <b-col sm="12" md="7">
        <div>
          <h2 class="d-inline">ข้อมูลอัพเดทล่าสุด</h2>
          <br />
          <NewsBox class="mt-4" />
        </div>
      </b-col>
      <b-col sm="12" offset-md="0" md="3" class="py-3">
        <div>
          <h2 class="d-inline">บทเรียนล่าสุด</h2>
          <b-button size="md" class="px-3 ml-1 mb-2" pill variant="primary">
            ดำเนินการต่อ
            <i class="fa fa-arrow-circle-right fa-lg"></i>
          </b-button>
          <br />
          <Cardlesson class="mx-auto mt-2" :cardData="testData" />
        </div>
      </b-col>
    </b-row>
    <v-divider class="mx-5"></v-divider>
    <b-row class="justify-content-center m-auto">
      <b-col class="text-center m-3 p-5 justify-content-center" md="8">
        <h4 class="display-4">คำอธิบายเว็บพร้อมภาพอะไรก็ได้</h4>
        <h6
          md="8"
          class
        >Material is an adaptable system of guidelines, components, and tools that support the best practices of user interface design. Backed by open-source code, Material streamlines collaboration between designers and developers, and helps teams quickly build beautiful products.</h6>
      </b-col>
    </b-row>

  <br>
    <b-row class="justify-content-center m-auto">
      <b-col sm="12" md="5">
        <h2 class="text-sm-center text-md-left ml-md-5">บทเรียนของคุณ</h2>
        <!-- <v-slide-group class="pa-4" prev-icon="mdi-minus" next-icon="mdi-plus" show-arrows> -->
        <v-slide-group class="pa-4" show-arrows>
          <v-slide-item v-for="n in 15" :key="n" class="m-4">
            <Cardlesson class="mt-2;max-width:220px" :cardData="testData" />
          </v-slide-item>
        </v-slide-group>
      </b-col>
 <v-divider class="mx-5" vertical></v-divider>
      <b-col sm="12" md="5">
        <h2 class="text-sm-center text-md-left  ml-md-5">เเบบฝึกหัดของคุณ</h2>
        <!-- <v-slide-group class="pa-4" prev-icon="mdi-minus" next-icon="mdi-plus" show-arrows> -->
        <v-slide-group class="pa-4" show-arrows>
          <v-slide-item v-for="n in 15" :key="n" class="m-4">
            <Cardlesson class="mt-2;max-width:220px" :cardData="testData" />
          </v-slide-item>
        </v-slide-group>
      </b-col>
    </b-row>
      <b-row class="justify-content-center m-auto">
      <b-col class="text-center m-3 p-5 justify-content-center" md="8">
        <h4 class="display-4">ใส่รายละเอียดการจัดทำเเละเครติด</h4>
        <h6
          md="8"
          class
        >Material is an adaptable system of guidelines, components, and tools that support the best practices of user interface design. Backed by open-source code, Material streamlines collaboration between designers and developers, and helps teams quickly build beautiful products.</h6>
      </b-col>
    </b-row>
  </div>
</template>

<script>
import Carouesl from "./compoents/Carousel";

import NewsBox from "./compoents/NewsBox";
import Cardlesson from "~/components/lessonCard/LessonCard";
export default {
  components: {
    Carouesl,
    Cardlesson,
    NewsBox
  },
  data: () => ({
    testData: {
      lastUpdate: "14/7/2542 10:24",
      imgSrc: "https://placekitten.com/380/200",
      typeVariant: "primary",
      typeName: "test",
      cardTitle: "test",
      cardTag: [
        { tagVariant: "primary", tagName: "tagName" },
        { tagVariant: "primary", tagName: "tagName" },
        { tagVariant: "primary", tagName: "tagName" }
      ],
      cardSmallDes:
        "Now you can finally test your work by changing VUE_APP_API_CLIENT in the targeted environment to either mock or server. But note that each time you change it you have to restart/rebuild your app.",
      cardViewCount: 3000,
      cardDoneCount: 3000,
      cardCreaterData: {
        src: "https://placekitten.com/380/200",
        name: "GodNewInwZa"
      },
      progress: 30
    }
  })
};
</script>