<template>
  <b-modal v-model="modalShow" title="ทำการสร้างห้องเรียนใหม่" centered hide-footer hide-header>
    <h2>
      <v-icon>class</v-icon>ทำการสร้างห้องเรียนใหม่
    </h2>
    <v-divider></v-divider>
    <b-form @submit="onSubmit" @reset="onReset" ref="myform">
      <h5 class>
        กำหนดชื่อห้องเรียน
        <small class="text-muted">(จำเป็น)</small>
      </h5>
      <b-form-input
        v-model="form.className"
        type="text"
        required
        placeholder="ระบุชื่อห้องเรียน"
      ></b-form-input>
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
        <b-button type="submit" size="md" pill variant="success">ดำเนินการต่อ</b-button>
        <b-button type="reset" size="md" pill variant="danger">ยกเลิก</b-button>
      </div>
    </b-form>
  </b-modal>
</template>
<script>
export default {
  props: {
    modalShow: {
      type: Boolean
    }
  },
  data() {
    return {
      data: null,
      form: {
        className: "",
        classDesc: "",
        classWallpaper: null
      }
    };
  },
  methods: {
    onSubmit(evt) {
      evt.preventDefault();
      alert(JSON.stringify(this.form));
    },
    onReset(evt) {
      evt.preventDefault();
      // Reset our form values
      this.form.className = "";
      this.form.classDesc = "";
      this.form.classWallpaper = null;
      // Trick to reset/clear native browser form validation state

    }
  }
};
</script>
