<template>
  <nuxt-link
    class="text-dark rmLink"
    :to="{ name: 'admin-exercise-id', params: { id: cardData.cardId }}"
  >
    <b-card  no-body
      class="cardradius"
      :class="{'shadow-lg':hover}"
      @mouseover="hover = true"
      @mouseleave="hover = false">
      <b-card-text class="px-4 pt-2">
        <div>
          <h4 class="pt-1">{{cardData.name}}</h4>
          <small class="text-muted">Created Date : {{cardData.createDate}}</small>
        </div>  {{cardData.desc}}
      </b-card-text>
      <v-divider></v-divider>
      <b-row class="text-center" no-gutters>
        <b-col>
          <small>
            <v-icon>mdi-checkbox-marked-circle</v-icon>
            <h6 class="text-muted pt-1">{{cardData.countList.choice}}</h6>
          </small>
        </b-col>
        <v-divider vertical></v-divider>
        <b-col>
          <small>
            <v-icon>mdi-upload</v-icon>
            <h6 class="text-muted pt-1">{{cardData.countList.upload}}</h6>
          </small>
        </b-col>
        <v-divider vertical></v-divider>
        <b-col>
          <small>
            <v-icon>mdi-tooltip-text</v-icon>
            <h6 class="text-muted pt-1">{{cardData.countList.text}}</h6>
          </small>
        </b-col>
      </b-row>
    </b-card>
  </nuxt-link>
</template><script>

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