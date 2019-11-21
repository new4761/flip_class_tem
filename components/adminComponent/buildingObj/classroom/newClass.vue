<template>
  <div>
    <b-modal v-model="modalShow" no-stacking centered hide-footer header-bg-variant="blue" class="cardradius">
      <template v-slot:modal-header="{ close }" >
        <h2 class="text-white">
          <v-icon style="color:white" class="pr-2"> class</v-icon>สร้างห้องเรียนใหม่
        </h2>
      </template>
      <b-form @submit="onSubmit" @reset="onReset" ref="myform">
        <h5 class>
          กำหนดชื่อห้องเรียน
          <small class="text-muted">(จำเป็น)</small>
        </h5>
        <b-form-input v-model="form.className" type="text" required placeholder="ระบุชื่อห้องเรียน"></b-form-input>
        <h5 class="pt-3">กำหนดคำอธิบายห้องเรียน</h5>
        <b-form-input id="input-2" v-model="form.classDesc" placeholder="ระคำอธิบายห้องเรียน"></b-form-input>
        <h5 class="pt-3">อัพโหลดรูปภาพหน้าปก</h5>
        <b-form-file
          v-model="form.classWallpaper"
          placeholder="Choose a file or drop it here..."
          drop-placeholder="Drop file here..."
        ></b-form-file>
        <v-divider></v-divider>
        <div class="mt-2 text-right">
          <b-button type="submit" style="width:40%;" size="md" pill variant="blue">ดำเนินการต่อไป</b-button>
          <b-button type="reset" size="md" pill variant="danger">ละทิ้งข้อมูล</b-button>
        </div>
      </b-form>
    </b-modal>
    <checkDataModal @HideCheckModal="HideCheckModal" :showCheckModal="CheckModal" :sentform="form" />
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
        className: "",
        classDesc: "",
        classWallpaper: null
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
      this.$emit("HideModal", false);
      this.CheckModal = true;
    },
    onReset(evt) {
      evt.preventDefault();
      // Reset our form values
      this.form.className = "";
      this.form.classDesc = "";
      this.form.classWallpaper = null;
      this.$emit("HideModal", false);
      // Trick to reset/clear native browser form validation state
    }
  }
};
</script>
