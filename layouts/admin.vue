<template>
  <v-app style=" font-family: 'Mitr', sans-serif !important; background-color:#d9d9d9;">
    <div @mouseover="drawer = true" @mouseleave="drawer = false">
      <v-navigation-drawer dark fixed expand-on-hover permanent style="background-color:#004485;">
        <v-list>
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
          <div v-for="(item,index) in pathSp " :key="item.name" class="d-inline rmLink">
            <h5  class="d-inline px-2 text-muted" v-if="index!==0">/</h5>
            <nuxt-link :to="item.path" >
              <h3 v-if="index===0" class="d-inline ">{{item.name}}</h3>
              <h5 v-else class="d-inline ">{{item.name}}</h5>
            </nuxt-link>

          </div>
        </b-card>
        <b-card no-body class="cardradius overflow-auto p-1" style="height:100vh; ">
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
  computed: {
    pathSp() {
      let splitPathArray = this.$route.path.split("/");
      splitPathArray.shift();
      splitPathArray.shift();
      let routePath = "/admin";
      let pathArray = [];
      splitPathArray.forEach(element => {
        routePath = routePath + "/" + element;
        pathArray.push({ name: element, path: routePath });
      });
      return pathArray;
    }
  },
  data: () => ({
    pathList: [],
    drawer: false,
    items: [
      { icon: "class", text: "ห้องเรียน", link: "/admin/ClassRoom" },
      {
        icon: "mdi-library-books",
        text: "บทเรียน",
        link: "/admin/Lesson"
      },
      {
        icon: "assignment",
        text: "เเบบฝึกหัด",
        link: "/admin/Exercise"
      },
      {
        icon: "mdi-newspaper-variant",
        text: "ประกาศขนาดใหญ่",
        link: "/admin/MainNews"
      },
      {
        icon: "mdi-format-list-bulleted",
        text: "ประกาศเเจ้งเตือน",
        link: "/admin/SubNews"
      },
      {
        icon: "web",
        text: "จัดการหน้าเว็บไซต์",
        link: "/admin/EditPage"
      }
    ]
  })
};
</script>
