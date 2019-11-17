<template>
  <b-media tag="li">
    <template v-slot:aside>
      <b-img
        width="60"
        height="60"
        rounded
        src="https://picsum.photos/250/250/?image=58"
        alt="Image 1"
      ></b-img>
    </template>
     <h6 class="align-items-start ">

            <b-badge
              :variant="MediaData.type.variant"
              class="font-weight-light float-left mr-1"
            >{{ MediaData.type.name }}</b-badge>
{{MediaData.title}}

      </h6>
    <p class="mb-0">
      <small class="small text-muted">
        <AvatarRef class="small float-left" :CreaterData="MediaData.CreaterData" />
      </small>
    </p>
  </b-media>
  <!-- <b-col md="3" sm="3"></b-col>
    <b-col md="7" sm="8">
      <p class="mb-0 mt-1">{{MediaData.smallDes}}</p> 
       <div class="d-flex align-items-center mt-2 text-muted flex-md-row flex-wrap">
      <i class="d-inline material-icons">remove_red_eye</i>
      <small class="d-inline ml-1">{{MediaData.viewCount}}</small>
      <b-button variant="cyan" class="text-white ml-auto px-5" size="md" pill>รายละเอียดเพิ่มเติม</b-button>
  </div>-->
  <!-- <v-divider class="mx-3"></v-divider>
  </b-col>-->
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