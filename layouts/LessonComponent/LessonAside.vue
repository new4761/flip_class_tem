<template>
  <div @mouseover="expand = true" @mouseleave="expand = false">
    <template>
      <v-card class="overflow-auto" style="height:110vh; width:100%;">
        <v-navigation-drawer expand-on-hover permanent>
          <div v-if="expand">
            <h4 class="text-center p-md-4">ข้อมูลบทเรียน</h4>
            <v-divider></v-divider>
          </div>
          <v-expansion-panels accordion>
            <v-expansion-panel v-for="(item,i) in 30" :key="i">
              <v-expansion-panel-header expand-icon="none" class="text-sm-center ">
                <b-row >
                  <b-col cols="3"  class="text-nowrap">
                  <h6>{{ i + 1 }}</h6>
                  </b-col>
                  <b-col cols="9">
                    <b-row no-gutters>
                      <b-col cols="2">
                        <i v-if="dataType==='Chapter'" class="fa fa-graduation-cap fa-lg"></i>
                        <i v-if-else="dataType==='Exercise'" class="fa fa-wpforms fa-lg"></i>
                      </b-col>
                      <b-col cols="10">
                        <p
                          style=" word-wrap:break-word;"
                          class="text-left pl-3"
                          v-if="expand"
                          :class="{ 'text-black': expand }"
                        >{{ChapterName}}</p>
                      </b-col>
                    </b-row>
                  </b-col>
                </b-row>
              </v-expansion-panel-header>
              <v-expansion-panel-content
                v-if="expand"
                style="background-color:#f2f5f3" 
              >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</v-expansion-panel-content>
            </v-expansion-panel>
          </v-expansion-panels>
        </v-navigation-drawer>
      </v-card>
    </template>
  </div>
</template>

    <!-- <v-expansion-panels accordion>
      <v-expansion-panel v-for="(item,i) in 2" :key="i" style=" background-color:#F2F9FF; ">
        <v-expansion-panel-header expand-icon="none">
          <b-row no-gutters>
            <b-col cols="1" class>
              <i class="fa fa-book fa-lg"></i>
            </b-col>
            <b-col cols="6" class>
              <p
                style="  word-wrap: break-word;"
                class="text-left pl-1"
                v-if="expand"
                :class="{ 'text-black': expand }"
              >asdadsaaasdasdasdasdasjkasdasd</p>
            </b-col>
          </b-row>
        </v-expansion-panel-header>
        <v-expansion-panel-content
          class="overflow-auto p-2"
          style="max-height:200px; background-color:#E6EDF2 ;"
          v-if="expand"
        >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</v-expansion-panel-content>
      </v-expansion-panel>
    </v-expansion-panels> -->

<script>
//fa-pencil-square-o
export default {
  props: {
    dataType: {
      type: String
    },
    ChapterName: {
      type: String
    }
  },
  data: () => ({
    expand: null
  })
};
</script>
