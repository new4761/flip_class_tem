<template>
  <!-- <b-card
    no-body
    :style="maxWidth"
    :img-src="cardData.imgSrc"
    img-top
    class="cardradius align-content-center text-left"
    v-b-modal.lessonModal
  >-->
  <b-card no-body  class="cardradius align-content-center text-left" v-b-modal.lessonModal style="width:240px;">
    <!-- <v-card
          :hover="hover ? 16 : 2"
          class="mx-auto"
          height="350"
          max-width="350"
        >
          <v-card-text class="font-weight-medium mt-12 text-center subtitle-1">
            Close Delay (Mouse leave)
          </v-card-text>
    </v-card>-->
    <v-img
      @mouseover="expand=true"
      @mouseleave="expand=false"
      :src="cardData.imgSrc"
      aspect-ratio="2"
      class="m-1"
      transition="slide-x-transition"
    ></v-img>

    <b-card-body class="px-3">
      <h6 class="align-items-start text-wrap">
        <b-row no-gutters>
          <b-col cols="2">
            <b-badge
              :variant="cardData.typeVariant "
              class="font-weight-light"
            >{{ cardData.typeName }}</b-badge>
          </b-col >
          <b-col cols="9">{{cardData.cardTitle}}</b-col>
        </b-row>
      </h6>
      <div>
        <b-card-text class="small text-muted pt-1">
          <AvatarRef class="m-1 small" :CreaterData="cardData.cardCreaterData" />
          <div class="m-1 pt-1 text-muted flex-wrap small">{{cardData.lastUpdate}}</div>
        </b-card-text>
      </div>
    </b-card-body>
    <!-- <div>
        <b-badge
          class="mr-1 p-1 font-weight-light"
          v-for="(item,index) in cardData.cardTag"
          :key="index"
          :variant="item.tagVariant"
        >{{item.tagName}}</b-badge>
    </div>-->
    <!-- <b-card-text class="p-2">{{cardData.cardSmallDes}}</b-card-text> -->

    <!-- <div class="text-center">
      <b-button
        class="d-inline"
        disabled
        size="sm"
        block
        variant="warning"
        v-b-modal.lessonModal
      >รายละเอียดเพิ่มเติม</b-button>
    </div>-->

    <!-- <v-speed-dial
      absolute
      top
      right
      small
      v-model="fab"
      direction="bottom"
      :open-on-hover="true"
      transition="slide-x-transition"
    >
      <template v-slot:activator>
        <v-btn small v-model="fab" white fab>
          <v-icon v-if="fab">close</v-icon>
          <v-icon v-else>more_vert</v-icon>
        </v-btn>
      </template>
      <v-btn fab green small class="bg-primary text-white">
        <v-icon>chat</v-icon>
      </v-btn>
      <v-btn fab  small class="text-warning">
        <v-icon>mdi-plus</v-icon>
      </v-btn>
      <v-btn fab small color="bg-red text-white">
        <v-icon>mdi-delete</v-icon>
      </v-btn>
    </v-speed-dial> -->
    <!-- <v-progress-linear height="14" :value="cardData.progress" color="bg-green radiusButton  ">
      <strong class="small text-dark">{{cardData.progress}}%</strong>
    </v-progress-linear>-->
  </b-card>
</template>
<script>
import AvatarRef from "~/components/AvatarRef";
export default {
  props: {
    cardData: Object
  },
  components: {
    AvatarRef
  },
  data: () => ({
    fab: null
  })
};
</script>