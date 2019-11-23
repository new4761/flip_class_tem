<template>
  <nuxt-link
    class="text-dark rmLink"
    :to="{ name: 'admin-Lesson-id', params: { id: cardData.cardId }}"
  >
    <b-card
      no-body
      class="cardradius"
      :class="{'shadow-lg':hover}"
      @mouseover="hover = true"
      @mouseleave="hover = false"
    >
      <b-card-text class="px-4 pt-2">
        <div>
          <h4 class="pt-1">{{cardData.name}}</h4>
          <small class="text-muted">Created Date : {{cardData.createDate}}</small>
        </div>
        {{cardData.desc}}
      </b-card-text>
      <v-divider></v-divider>
      <b-row class="text-center" no-gutters>
        <b-col>
          <small>
            <i class="fa fa-graduation-cap fa-2x text-muted"></i>
            <h6 class="text-muted">{{cardData.countList.article}}</h6>
          </small>
        </b-col>
        <v-divider vertical></v-divider>
        <b-col>
          <small>
            <i class="fa fa-wpforms fa-2x text-muted"></i>
            <h6 class="text-muted">{{cardData.countList.test}}</h6>
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