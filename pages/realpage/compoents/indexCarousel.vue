<template>
  <b-card no-body class="p-1 my-auto">
    <b-carousel
   
      style="text-shadow: 1px 1px 2px #333; min-height:350px; "
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
export default {
  name: "carousels",
  data: () => ({
    slide: 0,
    sliding: null,
    Data: [
      {
        src: "https://via.placeholder.com/400x200",
        title: "Hello world!",
        des: "การเเจ้งเตือนหัวข้อที่ีมีขนาดยาวขึ้นเเละมีหลายบรรทัดมากขึ้น  "
      },
      {
        src: "https://via.placeholder.com/400x200",
        title: "Hello world!2",
        des: "การเเจ้งเตือนหัวข้อที่ีมีขนาดยาวขึ้นเเละมีหลายบรรทัดมากขึ้น  "
      },
      {
        src: "https://via.placeholder.com/400x200",
        title: "Hello world!3",
        des:
          "การเเจ้งเตือนหัวข้อที่ีมีขนาดยาวขึ้นเเละมีหลายบรรทัดมากขึ้นการเเจ้งเตือนหัวข้อที่ีมีขนาดยาวขึ้นเเละมีหลายบรรทัดมากขึ้นการเเจ้งเตือนหัวข้อที่ีมีขนาดยาวขึ้นเเละมีหลายบรรทัดมากขึ้น  "
      }
    ]
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

