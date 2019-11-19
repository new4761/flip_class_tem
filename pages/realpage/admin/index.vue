<template>
  <b-container fluid>
    <b-row no-gutters>
      <b-col v-for="n in 8" :key="n" lg="3" xl="2" sm="6" class="p-2">
        <roomCreated />
      </b-col>
    </b-row>
    <v-btn fab medium bottom fixed style="background-color:#55fa5f" right color="dark">
      <v-icon large style="color:white;">mdi-plus</v-icon>
    </v-btn>
  </b-container>
</template>
<script>
//card ClassRoom
import roomCreated from "~/components/adminComponent/classroom/cardCreatedRoom.vue";
export default {
  layout: "admin",
  components: {
    roomCreated
  }
};
</script>