<template>
  <b-container fluid>
    <newExerciseModal @HideModal="statusModal" :modalShow="showModal" />

      <b-navbar type="dark" variant="dark">
      <h3 class="px-3 text-white pt-2">
        <v-icon class="pr-3 text-white">assignment</v-icon>แบบฝึกหัดทั้งหมด
      </h3>
    </b-navbar>

    <b-row class="mt-3" no-gutters>
      <b-col v-for="data in ExerciseList" :key="data.cardID" xl="3" md="4" sm="12" class="p-2">
        <exerciseCreated :cardData="data" />
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
//card ExerciseRoom
import exerciseCreated from "~/components/adminComponent/exercise/cardCreatedExercise";
//modal obj
import newExerciseModal from "~/components/adminComponent/buildingObj/exercise/newExercise";

export default {
  layout: "admin",
  components: {
    newExerciseModal,
    exerciseCreated
  },
  data: () => ({
    showModal: false,
    ExerciseList: [
      {
        cardId: "1",
        name: "ทดสอบชื่อเเบบฝึกหัด",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          choice: 30,
          upload: 60,
          text: 80
        }
      },
      {
        cardId: "2",
        name: "ทดสอบชื่อบทเรียนขนาฟหใญ่asdasdasdasdqweqweqew",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          choice: 30,
          upload: 60,
          text: 80
        }
      },
      {
        cardId: "3",
        name: "ทดสอบชื่อบทเรียนขนาฟหใญ่มากๆๆๆๆ",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          choice: 30,
          upload: 60,
          text: 80
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