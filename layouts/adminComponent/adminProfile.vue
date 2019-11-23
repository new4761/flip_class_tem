<template>
  <div class="p-2">
    <v-list-item two-line>
      <v-list-item-avatar>
        <img src="https://randomuser.me/api/portraits/women/81.jpg" />
      </v-list-item-avatar>

      <v-list-item-content>
        <v-list-item-title>Jane Smith</v-list-item-title>
        <v-list-item-subtitle>tech@14742</v-list-item-subtitle>
      </v-list-item-content>
    </v-list-item>
   <b-button pill  block variant="primary" v-if="myDrawer">
          <i class="fa fa-user-circle"></i> ข้อมูลส่วนตัว
        </b-button>
  </div>
</template>
<script>
export default {
   props: {
    myDrawer:Boolean
  },
}
</script>