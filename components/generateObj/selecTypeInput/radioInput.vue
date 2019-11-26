<template>
  <b-row no-gutters>
    <h5 class="py-1">
      ระบุคำถาม
      <small class="text-muted">(จำเป็น)</small>
    </h5>
    <b-form-input v-model="data.title" type="text" required placeholder="กำหนดคำถาม"></b-form-input>
    <h5 class="py-1">ระบุคำอธิบาย</h5>

    <b-form-input v-model="data.desc" type="text" placeholder="กำหนดคำอธิบาย"></b-form-input>
    <v-divider></v-divider>
    <b-row no-gutters class="mt-3 justify-content-end">
      <b-col cols="12">
        <b-list-group>
          <b-list-group-item
            v-for="(data,index) in data.testdata"
            :key="index"
            class="d-flex justify-content-between align-items-center"
          >
            {{data.text}}
            <b-form-radio v-model="data.ans" name="some-radios" :value="index+1">กำหนดเป็นคำตอบ</b-form-radio>
          </b-list-group-item>
        </b-list-group>
        <v-divider></v-divider>
        <h5>เพิ่มตัวเลือก</h5>
      </b-col>
      <b-col cols="9" class="d-flex flex-fill">
        <b-form-input v-model="data.text" size="md" placeholder="ระบุบคำตอบ " class="ml-2"></b-form-input>
      </b-col>
      <b-col class="d-flex">
        <b-button @click="addListData(data.text)" variant="warning" class="mx-auto" pill>
          <v-icon medium style="color:white;">mdi-plus</v-icon>
        </b-button>
      </b-col>
    </b-row>
  </b-row>
</template>
<script>
export default {
  name: "radioInput",
  data: () => ({
    data: {
      type: "radioInput",
      title: null,
      desc: null,
      ans: null,
      testdata: []
    }
  }),
  methods: {
    addListData() {
      const data = {};
      data.text = this.data.text;
      this.data.text = "";
      this.data.testdata.push(data);
    },
    getchildValue() {
      //console.log("getchildValue");
      //console.log(this.data);
      // console.log("from in" + input)
      if (this.data.title != null && this.data.title != "") {
        this.$emit("getchildValue", true, this.data);
      }
    }
  }
};
</script>