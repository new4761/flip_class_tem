<template>
  <b-card no-body class="p-1 my-auto bg-transparent  border-0">
    <b-carousel
   
      style="text-shadow: 1px 1px 2px #333; min-height:250px; "
      controls
      indicators
      background="#ababab"
      :interval="4000"
      img-height="350"
      img-width="400"
      v-model="slide"
      @sliding-start="onSlideStart"
      @sliding-end="onSlideEnd"
    >
      <!-- Slides with custom text -->
      <b-carousel-slide v-for="(item ,index) in Data" :key="index" :img-src="item.src" max-hight="200">
        <div class="d-none d-lg-block">
          <h3>{{item.title}}</h3>
          <p class="lead">{{item.des}}</p>
        </div>
      </b-carousel-slide>
    </b-carousel>
  </b-card>
</template>
<script>



import { mapState } from "vuex";

export default {
  name: "carousels",

 computed: mapState({
    Data: state => state.mainNews.Data
  }),


  data: () => ({
    slide: 0,
    sliding: null,

  }),
  methods: {
    onSlideStart(slide) {
      this.sliding = true;
    },
    onSlideEnd(slide) {
      this.sliding = false;
    }
  }
};
</script>

