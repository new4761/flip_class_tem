<template>
  <div>
    <b-modal v-model="modalShow" no-stacking centered hide-footer  header-bg-variant="warning">
       <template v-slot:modal-header="{ close }" >
      <h2 class="text-dark">
        <v-icon  class="pr-2">assignment</v-icon>ทำการสร้างเเบบฝึกหัดใหม่
      </h2>
       </template>
      <b-form @submit="onSubmit" @reset="onReset" ref="myform">
        <h5 class>
          กำหนดชื่อเเบบฝึกหัด
          <small class="text-muted">(จำเป็น)</small>
        </h5>
        <b-form-input v-model="form.execName" type="text" required placeholder="ระบุชื่อห้องเรียน"></b-form-input>
        <h5 class="pt-3">กำหนดคำอธิบายเเบบฝึกหัด</h5>
        <b-form-input id="input-2" v-model="form.execDesc" placeholder="ระคำอธิบายห้องเรียน"></b-form-input>
        <v-divider></v-divider>
        <div class="mt-2 text-right">
          <b-button type="submit" size="md" pill variant="blue">ดำเนินการต่อ</b-button>
          <b-button type="reset" size="md" pill variant="danger">ยกเลิก</b-button>
        </div>
      </b-form>
    </b-modal>
    <checkDataModal
      @HideCheckModal="HideCheckModal"
      :showCheckModal="CheckModal"
      :sentform="form"
    />
  </div>
</template>
<script>
import checkDataModal from "./checkDataModal";
export default {
  props: {
    modalShow: {
      type: Boolean
    }
  },
  components: { checkDataModal },
  data() {
    return {
      data: null,
      form: {
        execName: "",
        execDesc: "",

      },
      CheckModal: false
    };
  },
  methods: {
    HideCheckModal(e) {
      this.CheckModal = e;
    },
    onSubmit(evt) {
      evt.preventDefault();
      this.$emit("HideModal",false);
      this.CheckModal=true;
    },
    onReset(evt) {
      evt.preventDefault();
      // Reset our form values
      this.form.execName = "";
      this.form.execDesc = "";
      this.form.classWallpaper = null;
     this.$emit("HideModal",false);
      // Trick to reset/clear native browser form validation state
    }
  }
};
</script>
