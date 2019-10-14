<template>
  <div>{{ articles }}</div>
</template>
<script>
import { mapGetters } from "vuex";
import axios from "axios";
export default {
  computed: mapGetters({
    articles: "testStore/get"
  }),

  middleware: "testpage"
  // created() {
  //   axios.get("/api").then(response => {
  //     this.posts = response.data;
  //   });
  // },
  // // // mounted() {
  // // //   axios
  // // //     .get("/api")
  // // //     .then(response => (this.testData = response.data));
  // // // },
  // data: () => ({ testData: null, posts: null, lessonData: null })
};
</script>