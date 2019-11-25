<template>
  <b-container fluid  class="px-5">
    <classCreaterModal @HideModal="statusModal" :modalShow="showModal" />
    
     <b-navbar type="dark" variant="dark">
      <h3 class="px-3 text-white pt-2">
        <v-icon class="pr-3 text-white">mdi-book</v-icon>ห้องเรียนทั้งหมด
      </h3>
    </b-navbar>
    <b-row class="mt-3" no-gutters>
      <b-col v-for="data in classRoomList" :key="data.cardId" md="4"  xl="3" sm="12" class="p-1">
        <roomCreated :cardData="data" />
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
    > <v-icon large style="color:white;">mdi-plus</v-icon>
    </v-btn>
  </b-container>
</template>
<script>
//card ClassRoom
import roomCreated from "~/components/adminComponent/classroom/cardCreatedRoom";
//modal obj
import classCreaterModal from "~/components/adminComponent/buildingObj/classroom/newClass";

export default {
  layout: "admin",
  components: {
    roomCreated,
    classCreaterModal
  },
  data: () => ({
    showModal: false,
    classRoomList: [
      {
        cardId: "1",
        imgsrc: "https://picsum.photos/1024/400/?image=41",
        name: "ทดสอบชื่อห้องเรียน",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          student: 30,
          lesson: 60,
          exercise: 10
        }
      },
      {
        cardId: "2",
        imgsrc: "https://picsum.photos/1024/400/?image=51",
        name: "ทดสอบชื่อบทเรียนขนาฟหใญ่",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          student: 30,
          lesson: 60,
          exercise: 10
        }
      },
      {
        cardId: "3",
        imgsrc: "https://picsum.photos/1024/400/?image=68",
        name: "ทดสอบชื่อบทเรียนขนาฟหใญ่มากๆๆๆๆ",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          student: 30,
          lesson: 60,
          exercise: 10
        }
      }
    ],
  }),
  methods: {
    statusModal(e) {
      this.showModal = e;
    }
  }
};
</script>