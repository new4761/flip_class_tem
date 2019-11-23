<template>
    <b-modal v-model="showCheckModal" centered header-bg-variant="warning">
    <template v-slot:modal-header="{ close }">
      <h4 class="text-dark">
        <v-icon  class="pr-2">assignment</v-icon>ตรวจสอบความถูกต้องของข้อมูล
      </h4>
    </template>

    <b-row no-gutters>
      <b-col cols="8">
        <h1>{{sentform.execName}}</h1>
      </b-col>
      <b-col cols="4" class="text-right">
        <small class="text-muted h6 ">ชื่อเเบบฝึกหัด</small>
      </b-col>
    </b-row>
    <v-divider></v-divider>
    <b-row no-gutters>
      <b-col cols="8">
        <h6>{{sentform.execDesc}}</h6>
      </b-col>
   <b-col cols="4" class="text-right">
        <small class="text-muted h6 ">คำอธิบายเเบบฝึกหัด</small>
      </b-col>
    </b-row>
    <v-divider></v-divider>
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
      execName: { type: String },
      execDesc: { type: String },
    }
  },
  methods: {
    HideCheckModal(e) {
      this.$emit('HideCheckModal',false)}
  }
}
</script>
