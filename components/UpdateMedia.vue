<template>
  <b-media right-align vertical-align="center" class="text-left">
    <h5 class="mt-0 mb-1">
      <b-badge :variant="MediaData.type.variant" class="mr-1 mb-2">{{MediaData.type.name}}</b-badge>
      {{MediaData.title}}
    </h5>
    <small class="text-muted">
      ณ วันที่
      <strong class="mr-3">{{MediaData.upTime}}</strong>
      <AvatarRef :CreaterData="MediaData.CreaterData" />
    </small>
    <!-- <p class="mb-0 mt-1">{{MediaData.smallDes}}</p> -->
    <div class="d-flex align-items-center mt-2 text-muted flex-md-row flex-wrap">
      <i class="d-inline material-icons">remove_red_eye</i>
      <small class="d-inline ml-1">{{MediaData.viewCount}}</small>
      <b-button variant="cyan" class="text-white ml-auto px-5" size="md" pill>รายละเอียดเพิ่มเติม</b-button>
    </div>
    <!-- <v-divider class="mx-3"></v-divider> -->
  </b-media>
</template>
<script>
import AvatarRef from "~/components/AvatarRef";
export default {
  components: { AvatarRef },
  props: {
    MediaData: Object
  }
};
</script>