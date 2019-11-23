<template>
  <b-container>
    <b-row>
      <b-col md="8" sm="12">
        <h3>{{getID}}</h3>
      </b-col>
      <b-col md="8" sm="12">{{post.test}}</b-col>
    </b-row>
    {{pathSp}}
  </b-container>
</template>
<script>
//import Card
import cardLesson from "~/components/adminComponent/lesson/cardCreatedLesson";
export default {
  layout: "admin",
  components: { cardLesson },
  data: () => {
    return {
      posts: [
        {
          id: "1",
          test: "aqweqwe"
        },
        {
          id: "2",
          test: "wrwrlwpt"
        },
        {
          id: "3",
          test: "wrwrlwqweqweqwept"
        }
      ]
    };
  },
  computed: {
    pathSp() {
      let pathArray = this.$route.path.split("/");
      pathArray.shift();
      return pathArray;
    },
    getID() {
      return this.$route.params.id;
    },
    post: function() {
      return this.posts.find(post => post.id === this.$route.params.id);
    }
  },
  methods: {}
};
</script>