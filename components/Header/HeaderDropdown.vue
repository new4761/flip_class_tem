<template>
  <b-nav-item-dropdown right class="text-myblue">
    <template slot="button-content">
       
        <v-avatar class="mx-auto" size="36">
          <img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQiPBeloxh97nLE084M0KPmYpvh-IuH3uF8YhOKMmFnIvxjmUzV"
            alt="John"
          />
        </v-avatar>

        <a class="DHbutton d-sm-down-none text-white" >สมจันทร์ หมายชาย</a>

    </template>

    <b-dropdown-header tag="div" class="text-center">
      <strong>เรียน</strong>
    </b-dropdown-header>

      <b-dropdown-item>
      <n-link to="/classroom">
        <i class="fa fa-book"></i>
        ห้องเรียน
        <b-badge variant="danger">{{itemsCount}}</b-badge>
      </n-link>
    </b-dropdown-item>

    <b-dropdown-item>
      <n-link to="/classroom/1">
        <i class="fa fa-certificate"></i>
        บทเรียน
        <b-badge variant="danger">{{itemsCount}}</b-badge>
      </n-link>
    </b-dropdown-item>



    <b-dropdown-header tag="div" class="text-center">
      <strong>บัญชีผู้ใช้</strong>
    </b-dropdown-header>
    <b-dropdown-item>
      <n-link to="/userprofile">
        <i class="fa fa-user"></i> ข้อมูลส่วนตัว
      </n-link>
    </b-dropdown-item>
    <b-dropdown-item>
      <n-link to="/activity">
        <i class="fa fa-history"></i> กิจกรรม
      </n-link>
    </b-dropdown-item>

    <b-dropdown-divider></b-dropdown-divider>
    <b-dropdown-item >
      <n-link to= "/login">
      <i class="fa fa-sign-out"></i> ออกจากระบบ
      </n-link>
    </b-dropdown-item>
  </b-nav-item-dropdown>
</template>

<script>
export default {
  name: "header-dropdown",
  data: () => {
    return { itemsCount: 42 };
  },
  methods: {
    async logout() {
      try {
        this.$store.dispatch("logout").then(() => {
          this.$router.push("/login");
        });
      } catch (e) {
        this.formError = e.message;
      }
    }
  }
};
</script>

<style>
@import "./css/HeaderStyle.css";
</style>
