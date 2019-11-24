<template>
  <div>
    <b-navbar type="dark" variant="dark">
      <h3 class="px-3 text-white">
        <v-icon class="pr-3 text-white">mdi-library-books</v-icon>บทเรียนทั้งหมด
      </h3>
    </b-navbar>

    <b-card-group class="px-3">
      <b-row>
        <b-col xl="3" md="4" sm="12" v-for="(data,index) in lessonList" :key="index">
          <lessonCreated :cardData="data" />
        </b-col>
      </b-row>
    </b-card-group>
  </div>
</template>
<script>
//card LessonRoom
import lessonCreated from "~/components/adminComponent/lesson/cardCreatedLesson";
export default {
  props: {
    lessonList: { type: Array }
  },
  components: { lessonCreated }
};
</script>