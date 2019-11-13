<template>
  <b-row align-v="center" class="text-left" no-gutters>
    <b-col cols="2">
      <b-img  sizes="60" fluid rounded  src="https://picsum.photos/250/250/?image=58" left alt="Image 1"></b-img>
    </b-col>
    <b-col cols="8" class="mx-2" >
      <h6 class="pt-2" >
        <b-row no-gutters>
          <b-col cols="2">
              <b-badge :variant="MediaData.type.variant">{{MediaData.type.name}}</b-badge>
          </b-col>
          <b-col cols="8" class="text-wrap ml-md-3">{{MediaData.title}}</b-col>
          </b-row>
      </h6>
      <small class="small text-muted">
        <AvatarRef class="small float-left" :CreaterData="MediaData.CreaterData" />
      </small>
      <!-- <p class="mb-0 mt-1">{{MediaData.smallDes}}</p> -->
      <!-- <div class="d-flex align-items-center mt-2 text-muted flex-md-row flex-wrap">
      <i class="d-inline material-icons">remove_red_eye</i>
      <small class="d-inline ml-1">{{MediaData.viewCount}}</small>
      <b-button variant="cyan" class="text-white ml-auto px-5" size="md" pill>รายละเอียดเพิ่มเติม</b-button>
      </div>-->
      <!-- <v-divider class="mx-3"></v-divider> -->
    </b-col>
  </b-row>
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