<template>
  <b-container fluid>
       <classCreaterModal :modalShow="showModal"/>
    <b-row no-gutters>
      <b-col v-for="n in 8" :key="n" lg="3" xl="2" sm="6" class="p-1">
        <roomCreated />
      </b-col>
    </b-row>
    <v-btn @click="showModal=!showModal" fab medium bottom fixed style="background-color:#55fa5f" right color="dark">
      <v-icon large style="color:white;">mdi-plus</v-icon>
    </v-btn>
 
  </b-container>
</template>
<script>
//card ClassRoom
import roomCreated from "~/components/adminComponent/classroom/cardCreatedRoom";
//modal obj
import classCreaterModal from "~/components/adminComponent/buildingObj/newClass";
export default {
  layout: "admin",
  components: {
    roomCreated,
    classCreaterModal
  },
  data: () => ({
    showModal: false
  })
};
</script>