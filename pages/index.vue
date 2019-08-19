<template>
  <div>
    <br />
    <sui-grid>
      <sui-grid-row>
        <sui-grid-column :width="13">
          <Carouesl />
          <br />
          <h1 is="sui-header" dividing>ประกาศสำคัญ</h1>
          <Main class="Newsbox" />
        </sui-grid-column>
        <sui-grid-column :width="3">
          <Lesson />
        </sui-grid-column>
      </sui-grid-row>
      <vs-divider />
      <sui-grid-row>
        <sui-grid-column :width="4">
          <Main class="Newsbox" />
        </sui-grid-column>
        <sui-grid-column :width="1"></sui-grid-column>
        <sui-grid-column :width="11">
          <h3>New</h3>
          <p>update text</p>
          <SliderContent />
        </sui-grid-column>
      </sui-grid-row>
    </sui-grid>
  </div>
</template>
<script>
import Carouesl from "./index/carousel";
import SliderContent from "./index/sliderContent";
import Main from "./index/Newsbox/Main";
import Lesson from "./index/Newsbox/lesson";
export default {
  components: {
    Carouesl,
    SliderContent,
    Main,
    Lesson
  }
};
</script>
