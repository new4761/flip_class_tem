<template>
<b-container  fluid class="mx-3">
  <b-tabs pills align="center" justified>
    <b-tab active>
      <template v-slot:title>
        <!-- <b-spinner type="grow" small></b-spinner> I'm <i>custom</i> <strong>title</strong> -->
        LivePreview
      </template>
      <genPage :ComponentData="getTempData" />
    </b-tab>

    <b-tab>
      <template v-slot:title>
        <!-- <b-spinner type="border" small></b-spinner> Tab 2 -->
        EditPage
      </template>
      <b-container>
        <b-button pill @click="createDataModal=!createDataModal" block variant="success">
          <v-icon medium style="color:white;">mdi-plus-circle-outline</v-icon>
          <br />NEWOBJECT
        </b-button>
      </b-container>
      <b-modal v-model="createDataModal" header-bg-variant="info">
        <template v-slot:modal-header="{ close }">
          <h4 class="text-white">
            <v-icon style="color:white" class="pr-2">mdi-plus-circle-outline</v-icon>เพิ่มองค์ปประกอบหน้าเว็บใหม่
          </h4>
        </template>
        <b-row no-gutters>
          <h5 class>
            กำหนดชื่อองค์ประกอบใหม่
            <small class="text-muted">(จำเป็น)</small>
          </h5>
          <b-form-input v-model="Objname" type="text" required placeholder="กำหนดชื่อองค์ประกอบใหม่"></b-form-input>
        </b-row>
        <selectType ref="childData" @addTempdata="addTempdata" />

        <template v-slot:modal-footer="{ ok, cancel, hide }">
          <b-button
            type="submit"
            style="width:180%;"
            size="md"
            block
            @click.prevent="callClid()"
            pill
            variant="success"
          >ยืนยันข้อมูล</b-button>
          <br />
          <b-button type="reset" size="md" block pill variant="danger" @click="cancelModal()">ยกเลิก</b-button>
        </template>
      </b-modal>
    </b-tab>
    <b-tab>
      <template v-slot:title>RawJson</template>
      <p class="p-3">{{temPageDataList}}</p>
    </b-tab>
  </b-tabs>
  </b-container>
  <!-- <b-tabs align="center">

    <template v-slot:tabs-end>
      <b-nav-item href="#" @click="() => {}">LivePreview</b-nav-item>
      <b-nav-item href="#" @click="() => {}">EditPage</b-nav-item>
            <b-nav-item href="#" @click="() => {}">RawJson</b-nav-item>
    </template>
  </b-tabs>-->
</template>

<script>
import genPage from "~/components/generateObj/buildPage";
import selectType from "~/components/generateObj/selectType";
export default {
  components: { genPage, selectType },
  props: {
    curPageData: { type: Array }
  },
  data: () => ({
    updateSuccessModal: true,
    createDataModal: false,
Objname:null,
    temPageDataList:[]
  }),
   computed: {
    getTempData() {
      return this.temPageDataList;
    }
  },
  methods: {
    cancelModal() {
     this.createDataModal = false;
    },
    callClid() {
      //   console.log("callClid Call")
      this.$refs.childData.passData();
    },
    addTempdata(validate, input) {
      input.name = this.Objname;
      console.log("addTempdata",input);
      if (validate) {
        this.temPageDataList.push(input);
        this.createDataModal = false;
      this.toast(input.name);
        //console.log(this.temPageDataList);
      } else console.log("error");
    },
    toast(ObjName){
      this.$bvToast.toast('ทำการเพิ่ม '+ ObjName + "สำเร็จ", {
          title: "ทำการเพิ่มองค์ประกอบสำเร็จ",
          variant: "success",
          solid: true
    }
      ) 
  },
  }
};

</script>