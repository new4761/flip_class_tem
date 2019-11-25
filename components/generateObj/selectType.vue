<template>
  <div>
    <b-row no-gutters>
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
    <linkbutton v-if="selectedType==='linkbutton'" @getchildValue="getchildValue" ref="child" />
  </div>
</template>
<script>
import linkbutton from "~/components/generateObj/selecTypeInput/linkbutton";
export default {
  components: {
    linkbutton
  },
  computed: {},
  data: () => ({
    selectedComponent: null,
    selectedComponentName: "",
    selectedType: null,
    //  need to be dynamic
    selectList: [{ text: "ปุ่มสำหรับใส่ Link", value: "linkbutton" }],

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

