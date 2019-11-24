<template>
  <b-card class="bg-transparent text-center border-0" no-body style="maxwidth: 1000px;">
    <b-row no-gutters class="justify-content-center ">
      
      <!-- <b-col class="text-left mx-1 my-1">
        <v-card max-width="600" height="100%" class="centerBlock bg-myblue text-white">
          <v-list-item>
            <v-list-item-avatar class="my-2" size="70">
              <img
                :src="imgsrc"
              />
            </v-list-item-avatar>
            <v-list-item-content class="text-white">
              <v-card-title>{{username}}</v-card-title>
              <v-card-subtitle class="mx-3 text-muted">{{stdid}}</v-card-subtitle>
            </v-list-item-content>
          </v-list-item>
        </v-card>
      </b-col> -->

      <b-col
        sm="12"
        md="2"
        class="mx-1 my-1"
        v-for="(data,idx) in UserCardData" :key="idx"
      >
      <nuxt-link :to=data.link class="usercard">
        <v-card max-width="300" height="100%" class="centerBlock bg-myblue text-white">
          <v-card-text class="cardstat text-white">
            <i :class="data.icon"></i>
            {{data.title}} &nbsp;
            <v-progress-circular 
              class="my-1"
              :size="70"
              :width="8"
              :value="(data.value/data.maxvalue)*100"
              :rotate="-90"
            >
              {{data.value}}/
              <small class="text-muted">{{data.maxvalue}}</small>
            </v-progress-circular>
          </v-card-text>
        </v-card>
        </nuxt-link>
      </b-col>
    </b-row>
  </b-card>
</template>

<script>
export default {
    props:['UserCardData'],
    data:()=>({
      username:"สมชาย นามสกุลที่ยาวจนเหลือคณานับ",
      stdid:"std@42069",
      imgsrc:"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQiPBeloxh97nLE084M0KPmYpvh-IuH3uF8YhOKMmFnIvxjmUzV"
    })
}

</script>

<style>
@import '../css/realpagestyle.css';

</style>