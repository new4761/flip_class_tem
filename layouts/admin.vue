<template>
  <v-app style="  font-family: 'Mitr', sans-serif !important; background-color:#d9d9d9;">
    <div @mouseover="drawer = true" @mouseleave="drawer = false">
      <v-navigation-drawer dark fixed expand-on-hover permanent style="background-color:#004485;">
        <v-list class="p-0">
          <div style="background-color:#0078e9; ">
            <myHead v-if="drawer" />
            <adminProfile :myDrawer="drawer" />
            <v-divider></v-divider>
          </div>
          <template v-for="item in items">
            <nuxt-link :to="item.link" :key="item.text">
              <v-list-item link>
                <v-list-item-action>
                  <v-icon>{{ item.icon }}</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                  <v-list-item-title>{{ item.text }}</v-list-item-title>
                </v-list-item-content>
              </v-list-item>
            </nuxt-link>
          </template>
          <v-divider></v-divider>
        </v-list>
      </v-navigation-drawer>
    </div>
    <v-content style="margin-left:80px; margin-top:20px; ">
      <b-container fluid class="cardradius">
        <b-card class="cardradius">
          <h2 class="text-myblue">{{$nuxt.$route.name}}</h2>
        </b-card>

        <b-breadcrumb :items="items" class="cardradius"></b-breadcrumb>
        <b-card class="cardradius overflow-auto" style="height:100vh; ">
          <nuxt />
        </b-card>
      </b-container>
    </v-content>
  </v-app>
</template>

<script>
import adminProfile from "./adminComponent/adminProfile";
import myHead from "./adminComponent/Header";
export default {
  props: {
    source: String
  },
  components: { myHead, adminProfile },
  data: () => ({
    drawer: false,
    items: [
      { icon: "class", text: "ห้องเรียน", link: "/realpage/admin" },
      {
        icon: "mdi-library-books",
        text: "บทเรียน",
        link: "/realpage/admin/lesson"
      },
      {
        icon: "assignment",
        text: "เเบบฝึกหัด",
        link: "/realpage/admin/exercise"
      },
      {
        icon: "mdi-newspaper-variant",
        text: "ประกาศขนาดใหญ่",
        link: "/realpage/admin/mainNews"
      },
      {
        icon: "mdi-format-list-bulleted",
        text: "ประกาศเเจ้งเตือน",
        link: "/realpage/admin/subNews"
      },
      {
        icon: "web",
        text: "จัดการหน้าเว็บไซต์",
        link: "/realpage/admin/editpage"
      }
    ]
  })
};
</script>