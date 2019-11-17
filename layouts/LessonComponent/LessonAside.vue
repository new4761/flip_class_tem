<template>
  <div style=" background-color:#E6FFF1; ">
    <v-expansion-panels accordion>
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
      
    </v-expansion-panels>
  </div>
</template>
<script>
//fa-pencil-square-o
export default {
  props: {
    expand: {
      type: Boolean
    }
  },
  data: () => ({})
};
</script>
