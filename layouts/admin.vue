<template>
  <v-app style="  font-family: 'Mitr', sans-serif !important;">
      <div       @mouseover="drawer = true"
      @mouseleave="drawer = false">
    <v-navigation-drawer
      dark
      fixed
      expand-on-hover

      permanent
      style="background-color:#004485;"
    >
      <v-list class="p-0">
        <div style="background-color:#0078e9; ">
          <myHead v-if="drawer" />
          <adminProfile :myDrawer="drawer" />
          <v-divider></v-divider>
        </div>

        <template v-for="item in items">
          <v-row v-if="item.heading" :key="item.heading" align="center">
            <v-col cols="6">
              <v-subheader v-if="item.heading">{{ item.heading }}</v-subheader>
            </v-col>
            <v-col cols="6" class="text-center">
              <a href="#!" class="body-2 black--text">EDIT</a>
            </v-col>
          </v-row>

          <v-list-group
            v-else-if="item.children"
            :key="item.text"
            v-model="item.model"
            :prepend-icon="item.model ? item.icon : item['icon-alt']"
            append-icon
          >
            <template v-slot:activator>
              <v-list-item>
                <v-list-item-content>
                  <v-list-item-title>{{ item.text }}</v-list-item-title>
                </v-list-item-content>
              </v-list-item>
            </template>
            <v-list-item v-for="(child, i) in item.children" :key="i" link>
              <v-list-item-action v-if="child.icon">
                <v-icon>{{ child.icon }}</v-icon>
              </v-list-item-action>
              <v-list-item-content>
                <v-list-item-title>{{ child.text }}</v-list-item-title>
              </v-list-item-content>
            </v-list-item>
          </v-list-group>

          <v-list-item v-else :key="item.text" link>
            <v-list-item-action>
              <v-icon>{{ item.icon }}</v-icon>
            </v-list-item-action>
            <v-list-item-content>
              <v-list-item-title>{{ item.text }}</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </template>
        <v-divider></v-divider>
      </v-list>
    </v-navigation-drawer>
      </div>
    <v-content>
      <v-container class="fill-height" fluid>
        <nuxt />
      </v-container>
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
      { icon: "class", text: "ห้องเรียน" },
      { icon: "mdi-library-books", text: "บทเรียน" },
      { icon: "assignment", text: "เเบบฝึกหัด" },
      { icon: "mdi-newspaper-variant", text: "ประกาศขนาดใหญ่" },
      { icon: "mdi-format-list-bulleted", text: "ประกาศเเจ้งเตือน" },
      { icon: "web", text: "จัดการหน้าเว็บไซต์" }
    ]
  })
};
</script>