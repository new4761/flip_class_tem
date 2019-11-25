<template>
  <b-container fluid class="app bg-myblue">
    <div class="m-3">
      <b-row class="justify-content-center py-3">
        <b-col md="6" sm="12">

          <h1 class="text-white"><strong>Profile</strong></h1>


        <v-card class="bg-white">
        <b-row class="pt-3 justify-content-center">
          <b-img
            left
            :src="imgsrc"
            width="100"
            height="100"
            rounded="circle"
            alt="Circle image"
          ></b-img>
        </b-row>

        <b-row class="justify-content-center">
          <h3 class="mt-2">{{username}}</h3>
        </b-row>

        <b-row class="justify-content-center">
          <h6 class="text-muted md-3">{{stdid}}</h6>
        </b-row>

    <b-row class="justify-content-center">
        <v-col md="4" sm="12">
          <v-text-field
            :value="name"
            label="ชื่อ-สกุล"
            readonly
            :disabled="disable"
            class="text-center"
          ></v-text-field>
        </v-col>      
        
        </b-row>

      <b-row class="justify-content-center">
        <v-col md="4" sm="12">
          <v-text-field
            :value="mail"
            label="E-mail"
            :readonly="editable"
            :outlined="disable"
          ></v-text-field>
        </v-col>      
        
         <v-col md="4" sm="12">
          <v-text-field
            :value="tel"
            label="เบอร์โทรติดต่อ"
            :readonly="editable"
            :outlined="disable"
          ></v-text-field>
        </v-col>

        </b-row>

        <b-row class="justify-content-center">
        <v-col md="4" sm="12">
          <v-text-field
            :value="semester"
            label="ระดับการศึกษา"
            readonly
            :disabled="disable"
          ></v-text-field>
        </v-col>      
        
         <v-col md="4" sm="12">
          <v-text-field
            :value="year"
            label="ปีที่เข้าศึกษา"
            readonly
            :disabled="disable"
          ></v-text-field>
        </v-col>

        
        </b-row>

        <b-row class="justify-content-end">
          <v-btn  v-show="editable" v-on:click="editable = false; disable = true;" 
          fab class="mx-5 my-3 bg-yellow small text-white"> <v-icon dark>mdi-pencil</v-icon> 
          </v-btn>

          <v-btn  v-show="!editable" v-on:click="editable = true; disable = false;" 
          fab class="mx-5 my-3 bg-green small text-white"> <v-icon dark>mdi-content-save</v-icon> 
          </v-btn>
        </b-row>


        </v-card>

        </b-col>
      </b-row>

      <b-row class="justify-content-center">
        <b-col md="6" sm="12">
          <UserCard :UserCardData="UserCardData" />
        </b-col>
      </b-row>
    </div>
  </b-container>
</template>

<script>
import UserCard from "~/components/UserCardProfile";

export default {
  components: {
    UserCard
  },
  data: () => ({
    editable: true,
    disable: false,
    username: "สมจันทร์ หมายชาย",
    name:"นาย สมจันทร์ หมายชาย",
    stdid: "std@42069",
    mail: "GachiGASM@Gmail.men",
    tel: " +889874412",
    year: "2569",
    semester:"มัธยมศึกษา",
    imgsrc:
      "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQiPBeloxh97nLE084M0KPmYpvh-IuH3uF8YhOKMmFnIvxjmUzV",

    UserCardData: [
      {
        title: "บทเรียน",
        icon: "fa fa-book",
        value: "20",
        maxvalue: "30",
        link: "#"
      },
      {
        title: "แบบฝึกหัด",
        icon: "fa fa-certificate",
        value: "10",
        maxvalue: "60",
        link: "#"
      },
      {
        title: "งาน",
        icon: "fa fa-folder-open",
        value: "9",
        maxvalue: "20",
        link: "#"
      }
    ]
  })
};
</script>