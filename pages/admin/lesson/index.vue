<template>
  <b-container fluid>
    <lessonCreaterModal  @HideModal="statusModal"  :modalShow="showModal" />
    <b-row no-gutters>
      <b-col v-for="n in 8" :key="n" lg="3" xl="2" sm="6" class="p-2">
        <lessonCreated />
      </b-col>
    </b-row>
<v-btn @click="showModal=!showModal" fab medium bottom fixed style="background-color:#55fa5f" right color="dark">
      <v-icon large style="color:white;">mdi-plus</v-icon>
    </v-btn>
  </b-container>
</template>
<script>
//card ClassRoom
import lessonCreated from "~/components/adminComponent/lesson/cardCreatedLesson";
//modal obj
import lessonCreaterModal from "~/components/adminComponent/buildingObj/lesson/newLesson";

export default {
  layout: "admin",
  components: {
    lessonCreated,lessonCreaterModal
  },
  data: () => ({
    showModal: false
  }),
    methods: {
    statusModal(e) {
   this.showModal = e
    },

    }
};
</script>