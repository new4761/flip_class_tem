<template>
 <nuxt-link
    class="text-dark rmLink"
    :to="{ name: 'classroom-classroomID', params: { classroomID: cardData.cardId }}"
  >
  <b-card  no-body
      class="cardradius"
      :class="{'shadow-lg':hover}"
      @mouseover="hover = true"
      @mouseleave="hover = false">
    <b-img
      class="p-1 cardradius"
      :src="cardData.imgsrc"
      fluid
      alt="Responsive image"
    ></b-img>
    <b-card-text class="px-4 pt-2">
      <div>
        <h5 class="pt-1">{{cardData.name}}</h5>
        <small class="text-muted">Created Date : {{cardData.createDate}}</small>
      </div>{{cardData.desc}}
    </b-card-text>
    <v-divider></v-divider>
    <b-row class="text-center" no-gutters>
      <b-col>
        <small>
          <v-icon>mdi-account-multiple</v-icon>
          <h6 class="text-muted pt-1">{{cardData.countList.student}}</h6>
        </small>
      </b-col>
      <v-divider vertical></v-divider>
      <b-col>
        <small>
          <v-icon>mdi-library-books</v-icon>
          <h6 class="text-muted pt-1">{{cardData.countList.lesson}}</h6>
        </small>
      </b-col>
      <v-divider vertical></v-divider>
      <b-col>
        <small>
          <v-icon>assignment</v-icon>
          <h6 class="text-muted pt-1">{{cardData.countList.exercise}}</h6>
        </small>
      </b-col>
    </b-row>
  </b-card>
 </nuxt-link>
</template>
<script>
export default {
  props: {
    cardData: {
      imgsrc:{type:String},
      cardId: { type: String },
      name: { type: String },
      createDate: { type: String },
      desc: { type: String },
      countList: { type: Array }
    }
  },
  data: () => ({
    hover: false
  })
};
</script>