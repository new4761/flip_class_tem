<template>
  <div>
    <b-navbar type="dark" variant="dark">
      <h3 class="px-3 text-white">
        <v-icon class="pr-3 text-white">assignment</v-icon>เเบบฝึกหัด
      </h3>
    </b-navbar>

    <b-card-group class="px-3">
      <b-row>
        <b-col xl="3" md="4" sm="12" v-for="(data,index) in exerciseList" :key="index">
          <exerciseCreated :cardData="data" />
        </b-col>
      </b-row>
    </b-card-group>
  </div>
</template>
<script>
//card ExerciseRoom
import exerciseCreated from "~/components/adminComponent/exercise/cardCreatedExercise";
export default {
  props: {
    exerciseList: { type: Array }
  },
  components: { exerciseCreated }
};
</script>