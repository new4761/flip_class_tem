<template>

      <b-nav-item-dropdown right no-caret>
        <template slot="button-content">
            <v-btn class="DHbutton">
            <i class="icon-user"></i>&nbsp; ชื่อผู้ใช้
            </v-btn>
        </template>

        <b-dropdown-header tag="div" class="text-center"><strong>เรียน</strong></b-dropdown-header>
        <b-dropdown-item>
          <n-link to="#">
            <i class="fa fa-certificate"></i> 
            แบบฝึกหัด<b-badge variant="danger">{{itemsCount}}</b-badge>
            </n-link>
            </b-dropdown-item>

        <b-dropdown-item>
           <n-link to="#">
             <i class="fa fa-book">
              </i> บทเรียน<b-badge variant="danger">{{itemsCount}}</b-badge>
           </n-link>
        </b-dropdown-item>
       
        
        <b-dropdown-header tag="div" class="text-center"><strong>บัญชีผู้ใช้</strong></b-dropdown-header>
        <b-dropdown-item><n-link to="#"><i class="fa fa-user"></i> ข้อมูลส่วนตัว</n-link></b-dropdown-item>
        <b-dropdown-item><n-link to="#"><i class="fa fa-history"></i> กิจกรรม</n-link></b-dropdown-item>
       
        <b-dropdown-divider></b-dropdown-divider>
        <b-dropdown-item @click="logout"><i class="fa fa-sign-out"></i> ออกจากระบบ</b-dropdown-item>
      </b-nav-item-dropdown>
</template>

<script>
  export default {
    name: 'header-dropdown',
    data: () => {
      return { itemsCount: 42 }
    },
    methods: {
      async logout() {
        try {
          this.$store.dispatch('logout').then(() => {
            this.$router.push('/login')
          })
        } catch (e) {
          this.formError = e.message
        }
      }
    }
  }
</script>

<style>
@import './css/HeaderStyle.css';
</style>

