<template>
  <b-container fluid class="px-5 pt-5">
    <b-navbar type="dark" variant="dark" class="radiusObj">
      <b-navbar-brand>
        <h2 class="d-inline pl-2">{{this.$route.params.id}}</h2>
      </b-navbar-brand>
      <p class="text-white text-muted  pt-5 d-inline">
          LiveVersion
          <small class="h6">{{version}}</small>
        </p>
      <b-navbar-nav class="ml-auto">

        <b-button
          v-if="!editData"
          class="text-grey"
          @click="editData=true"
          pill
          variant="warning"
        >เเก้ไขเเบบฝึกหัด</b-button>

        <b-button
          v-if="editData"
          class="text-grey mx-1"
          style="width:150px"
          @click="submitTempData"
          pill
          variant="success"
        >บันทึกข้อมูล</b-button>

        <b-button
          v-if="editData"
          class="text-grey mx-1"
          @click="cancelEdit"
          pill
          variant="danger"
        >ยกเลิกการเเก้ไข</b-button>
        
      </b-navbar-nav>
    </b-navbar>
    <br class="pt-2" />
    <v-divider class="pt-2"></v-divider>
    <b-container fluid>
      <!-- {{editData}} -->
      <h1
        v-if="curPageData===null&&editData===false"
        class="text-center"
        style="font-size:2em; padding-top:300px;"
      >"กรุณาดำเนินการสร้างเเบบฝึกหัด"</h1>
      <designExc   v-else></designExc>
    </b-container>
  </b-container>
</template>
<script>
import designExc from "~/components/adminComponent/buildingExc";
export default {
  components: { designExc },
  layout: "admin",
  data: () => ({
    editData: true,
    version: 2.511,
    curPageData: null,
    temPageDataList: []
  }),

  methods: {
      submitTempData() {
      editData: false;
      temPageDataList = [];
    },
    cancelEdit() {
      editData: false;
      temPageDataList = [];
    },

  }
};
</script>