<template>
  <b-card
    no-body
    :style="maxWidth"
    :img-src="cardData.imgSrc"
    img-top
    class="cardradius align-content-center text-left"
  >
    <b-card-body>
      <b-card-title>
        <b-badge :variant="cardData.typeVariant " class="mr-1 p-2 font-weight-light">{{ cardData.typeName }}</b-badge>
        {{cardData.cardTitle}}
      </b-card-title>
      <div>
        <b-badge
          class="mr-1 p-1 font-weight-light"
          v-for="(item,index) in cardData.cardTag"
          :key="index"
          :variant="item.tagVariant"
        >{{item.tagName}}</b-badge>
      </div>
      <b-card-text class="p-2">{{cardData.cardSmallDes}}</b-card-text>

      <div
        class="d-flex align-items-center justify-content-sm-start text-muted flex-md-row flex-wrap"
      >
        <i class="d-inline material-icons float-left">remove_red_eye</i>
        <small class="d-inline ml-1 float-left">{{cardData.cardViewCount}}</small>
        <i class="d-inline material-icons ml-1 float-left">check_box</i>
        <small class="d-inline ml-1 float-left mr-auto">{{cardData.cardDoneCount}}</small>
        <div class="ml-auto float-right">
          <small v-b-modal.accountModal>
            CreateBy :
            <img
              :src="cardData.cardCreaterData.src"
              class="img-avatar ml-1"
              width="20"
              height="20"
            />
            {{cardData.cardCreaterData.name}}
          </small>
        </div>
      </div>
    </b-card-body>
    <div class="text-center">
      <b-button
        class="d-inline"
        disabled
        size="sm"
        block
        variant="warning"
        v-b-modal.lessonModal
      >รายละเอียดเพิ่มเติม</b-button>
    </div>
  </b-card>
</template>
<script>
export default {
  props: {
    cardData: Object,
    maxWidth:String
  },
  data: () => ({})
};
</script>