<template>
  <b-container fluid>
    <lessonCreaterModal @HideModal="statusModal" :modalShow="showModal" />

      <b-navbar type="dark" variant="dark">
      <h3 class="px-3 text-white">
        <v-icon class="pr-3 text-white">mdi-library-books</v-icon>บทเรียนทั้งหมด
      </h3>
    </b-navbar>
    
    <b-row class="mt-3" no-gutters>

      <b-col v-for="item in lessonList" :key="item.cardId" xl="3" md="4" sm="12" class="p-2">
        <lessonCreated :cardData="item" />
      </b-col>
    </b-row>

    <v-btn
      @click="showModal=!showModal"
      fab
      medium
      bottom
      fixed
      style="background-color:#55fa5f"
      right
      color="dark"
    >
      <v-icon large style="color:white;">mdi-plus</v-icon>
    </v-btn>
  </b-container>
</template>
<script>
//card LessonRoom
import lessonCreated from "~/components/adminComponent/lesson/cardCreatedLesson";
//modal obj
import lessonCreaterModal from "~/components/adminComponent/buildingObj/lesson/newLesson";

export default {
  layout: "admin",
  components: {
    lessonCreated,
    lessonCreaterModal
  },
  data: () => ({
    showModal: false,
    lessonList: [
      {
        cardId: "1",
        name: "ทดสอบชื่อบทเรียน",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          article: 30,
          test: 60
        }
      },
      {
        cardId: "2",
        name: "ทดสอบชื่อบทเรียนขนาฟหใญ่",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          article: 30,
          test: 60
        }
      },
      {
        cardId: "3",
        name: "ทดสอบชื่อบทเรียนขนาฟหใญ่มากๆๆๆๆ",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          article: 30,
          test: 60
        }
      }
    ]
  }),
  methods: {
    statusModal(e) {
      this.showModal = e;
    }
  }
};
</script>