<template>
  <div>
    <Carouesl />
    <vs-divider/>
    <h3>New</h3>
    <p>update text</p>
    <News />
    <vs-divider/>
      <h3>New</h3>
    <p>update text</p>
    <SliderContent/>
  </div>
</template>
<script>
import Carouesl from "./index/carousel";
import News from "./index/news";
import SliderContent from "./index/sliderContent";
export default {
  components: {
    Carouesl,
    News,
    SliderContent
  }
};
</script>