<template>
  <b-modal v-model="showCheckModal" centered header-bg-variant="blue">
    <template v-slot:modal-header="{ close }">
      <h4 class="text-white">
        <v-icon style="color:white" class="pr-2">class</v-icon>ตรวจสอบความถูกต้องของข้อมูล
      </h4>
    </template>

    <b-row no-gutters>
      <b-col cols="8">
        <h1>{{sentform.className}}</h1>
      </b-col>
      <b-col cols="4" class="text-right">
        <small class="text-muted h6 ">ชื่อห้องเรียน</small>
      </b-col>
    </b-row>
    <v-divider></v-divider>
    <b-row no-gutters>
      <b-col cols="8">
        <h6>{{sentform.classDesc}}</h6>
      </b-col>
   <b-col cols="4" class="text-right">
        <small class="text-muted h6 ">คำอธิบายห้องเรียน</small>
      </b-col>
    </b-row>
    <v-divider></v-divider>
    <b-img src="https://picsum.photos/300/150/?image=41" center fluid-grow alt="Fluid image"></b-img>
    <template v-slot:modal-footer="{ ok, cancel, hide }">
      <b-button
        type="submit"
        style="width:180%;"
        size="md"
        block
        pill
        variant="success"
      >ยืนยันข้อมูล</b-button>
      <br />
      <b-button type="reset" size="md" block pill variant="danger" @click="HideCheckModal() ">ยกเลิก</b-button>
    </template>
  </b-modal>
</template>
<script>
export default {
  props: {
    showCheckModal: {
      type: Boolean
    },
    sentform: {
      className: { type: String },
      classDesc: { type: String },
      classWallpaper: { type: String }
    }
  },
  methods: {
    HideCheckModal(e) {
      this.$emit("HideCheckModal", false);
    }
  }
};
</script>
