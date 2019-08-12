<template>
  <hooper :infiniteScroll="true" :itemsToShow="3">
    <slide v-for="i in 6 " :key="i" >
      <vs-row  vs-justify="center">  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
       <vs-card actionable class="cardx">
        <div slot="header">
          <h3>
            Hello world !
          </h3>
        </div>
        <div slot="media">
   
        </div>
        <div>
          <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
        </div>
        <div slot="footer">
          <vs-row vs-justify="flex-end">
            <vs-button color="primary" type="gradient" >View</vs-button>
            <vs-button color="danger" type="gradient">Delete</vs-button>
          </vs-row>
        </div>
      </vs-card>
    </vs-col></vs-row>
    </slide>
  

    <hooper-pagination slot="hooper-addons"></hooper-pagination>
  </hooper>
</template>

<script>
import {
  Hooper,
  Slide,
  Pagination as HooperPagination
  } from 'hooper';

export default {
  components: {
    Hooper,
    Slide,
    HooperPagination
  }
}
</script>