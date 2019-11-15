<template>
  <b-card no-body class="text-left">
    <b-row no-gutters >
      <b-col cols="10">
        <div class="m-3">
          <b-card-title class="font-weight-light">
            <h5>
              <b-badge :variant="cardData.typeVariant " class="mr-1 p-2">{{ cardData.typeName }}</b-badge>
              {{cardData.cardTitle}}
            </h5>
          </b-card-title>
          <div>
            <b-card-text class="small text-muted">
              <AvatarRef class="m-1" :CreaterData="cardData.cardCreaterData" />
              <div class="m-1 text-muted flex-wrap">
                อัพเดทล่าสุด
                {{cardData.lastUpdate}}
              </div>
            </b-card-text>
          </div>
          <!-- <v-progress-linear height="14" :value="cardData.progress" color="bg-green radiusButton  ">
            <strong class="small text-dark">{{cardData.progress}}%</strong>
          </v-progress-linear>-->
        </div>
      </b-col >
      <!-- <b-button class='text-center'  size="lg" block variant="primary"> ดำเนินการต่อ <i class="fa fa-arrow-circle-right fa-lg ml-1 pb-1"></i></b-button> -->
      <b-col vertical>
        <b-button style="height:100%;" block variant="primary">
          <i class="fa fa-chevron-right" style="font-size:30px"></i>
        </b-button>
      </b-col>
    </b-row>
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