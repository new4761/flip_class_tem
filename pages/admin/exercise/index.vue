<template>
  <b-container fluid>
    <newExerciseModal @HideModal="statusModal"  :modalShow="showModal"/>
    <b-row no-gutters>
      <b-col v-for="n in 8" :key="n" lg="3" xl="2" sm="6" class="p-2">
        <exerciseCreated />
      </b-col>
    </b-row>
    <v-btn  @click="showModal=!showModal" fab medium bottom fixed style="background-color:#55fa5f" right color="dark">
      <v-icon large style="color:white;">mdi-plus</v-icon>
    </v-btn>
  </b-container>
</template>
<script>
//card ClassRoom
import exerciseCreated from "~/components/adminComponent/exercise/cardCreatedExercise";
//modal obj
import newExerciseModal from "~/components/adminComponent/buildingObj/exercise/newExercise";

export default {
  layout: "admin",
  components: {
    newExerciseModal,exerciseCreated
  },
   data: () => ({
    showModal: false
  }),
    methods: {
    statusModal(e) {
   this.showModal = e
    },

    }
}
</script>