<template>
  <div>
    <b-row class="justify-content-center text-md-left text-sm-center">
      <b-col sm="12" md="8  " class="py-3 justify-content-center">
        <Carouesl />
      </b-col>
      <b-col sm="10" offset-sm="1" offset-md="0" md="3" class="py-3">
        <div class="justify-content-center">
          <h2 class="d-inline">บทเรียนล่าสุด</h2>
          <b-button size="md" class="px-3 ml-1 mb-2" pill variant="primary">
            ดำเนินการต่อ
            <i class="fa fa-arrow-circle-right fa-lg"></i>
          </b-button>
        </div>
        <br />
        <Cardlesson :cardData="testData" maxWidth="max-width:450px" />
      </b-col>
    </b-row>
    <hr />
    <b-row>
      <b-col sm="12" md="7" class="py-3"></b-col>
      <b-col sm="8" offset-sm="2" md="4" class="py-3"></b-col>
    </b-row>
  </div>
</template>

<script>
import Carouesl from "./compoents/carousel";
import Cardlesson from "~/components/lessonCard/LessonCard";
export default {
  components: {
    Carouesl,
    Cardlesson
  },
  data: () => ({
    testData: {
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
      cardCreaterData: { src: "https://placekitten.com/380/200", name: "GodNewInwZa" }
    }
  })
};
</script>