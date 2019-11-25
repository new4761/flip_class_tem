<template>
  <div>
    <b-row no-gutters>
      <!-- <p v-for=" n in  this.$options.components" :key="n">{{n.name}}</p> -->
      <h5 class="pt-3">
        เลือกประเภท
        <small class="text-muted">(จำเป็น)</small>
      </h5>
      <b-form-select
        v-on:change="SelectType(selectedType)"
        v-model="selectedType"
        name="radio-inline"
        :options="selectList"
      ></b-form-select>
    </b-row>
    <!-- {{childValue}} -->
    <v-divider></v-divider>
    <h4>{{selectedComponentName}}</h4>
    <component :is="selectedType" @getchildValue="getchildValue" ref="child"></component>
  </div>
</template>
<script>

import linkbutton from "~/components/generateObj/selecTypeInput/linkbutton";
import textTitle from "~/components/generateObj/selecTypeInput/textTitle";
import textContent from "~/components/generateObj/selecTypeInput/textContent";
import downLoadFile from "~/components/generateObj/selecTypeInput/downLoadFile";
import upLoadFile from "~/components/generateObj/selecTypeInput/upLoadFile";
import iflameSlider from "~/components/generateObj/selecTypeInput/iflameSlider";
import textArea from "~/components/generateObj/selecTypeInput/textArea";
import youtube from "~/components/generateObj/selecTypeInput/youtube";
import textInput from "~/components/generateObj/selecTypeInput/textInput";
import radioInput from "~/components/generateObj/selecTypeInput/radioInput";
import selectionInput from "~/components/generateObj/selecTypeInput/selectionInput";
import bigImage from "~/components/generateObj/selecTypeInput/bigImage";
import smallImg from "~/components/generateObj/selecTypeInput/smallImg";
export default {
  components: {
    linkbutton,radioInput,smallImg,bigImage,
    textTitle,
    textContent,
    downLoadFile,upLoadFile,iflameSlider,textArea,youtube,textInput,selectionInput
  },
  computed: {},
  data: () => ({
    selectedComponent: null,
    selectedComponentName: "",
    selectedType: null,
    //  need to be dynamic
    selectList: [
      { text: "ข้อความขนาดใหญ่", value: "textTitle" },
      { value: "textContent", text: "ข้อความคำบรรยาย" },

      { text: "ปุ่มสำหรับใส่ Link", value: "linkbutton" },
      { value: "downLoadFile", text: "ปุ่ม Download File" },
      { value: "youtube", text: "วิดีโอ youtube" },
      {
        value: "iflameSlider",
        text: "Google slide"
      },

      {
        value: "textArea",
        text: "กล่องข้อความขนาดใหญ่"
      },
      {
        value: "textInput",
        text: "กล่องข้อความขนาดเล็ก"
      },
      {
        value: "radioInput",
        text: "ตัวเลือกเเบบ Radio"
      },
      {
        value: "selectionInput",
        text: "ตัวเลือกเเบบ Selection"
      },
      { value: "upLoadFile", text:"อัพโหลดไฟล์" },
      {
        value: "smallImg",
        text: "รูปภาพขนาดเล็ก"
      },
      {
        value: "bigImage",
        text: "รูปภาพขนาดใฆย่"
      }
    ],

    childValidate: false,
    childValue: null
  }),
  methods: {
    SelectType(input) {
      this.selectedComponent = this.selectList.find(data => {
        if (data.value === input) {
          return data;
        }
      });
      this.selectedComponentName = this.selectedComponent.text;
      this.selectedType = input;
    },
    getchildValue(validate, input) {
      //  console.log("from mom " + validate+" ||" +input)
      this.childValidate = validate;
      this.childValue = input;
    },
    passData() {
      this.$refs.child.getchildValue();
      // console.log("passData Call");
      if (this.childValidate) this.$emit("addTempdata", true, this.childValue);
      else console.log("Ch error");
    }
  }
};
</script>

