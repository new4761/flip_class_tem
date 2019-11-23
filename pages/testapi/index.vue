<template>
  <div>{{ lessonData }}</div>
</template>
<script>
import { mapState } from "vuex";
import { mapGetters } from "vuex";
// import Vuex from 'vuex'
import axios from "axios";
export default {
  // computed: mapState({
  //   articles: "testStore/testget"
  // }),
  computed: mapState({
  lessonData: state => state.testStore.lessonData
}),

  middleware: "testpage"
  // async fetch({ store, params }) {
  //   let { data } = await axios.get("http://my-api/stars");
  //   store.commit("setStars", data);
  // }
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