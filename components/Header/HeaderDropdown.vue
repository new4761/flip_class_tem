<template>
      <b-nav-item-dropdown right no-caret>
        <template slot="button-content">
          <img src="~static/img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
        </template>
        <b-dropdown-header tag="div" class="text-center"><strong>Study</strong></b-dropdown-header>
        <b-dropdown-item><i class="fa fa-certificate"></i> Exercise<b-badge variant="danger">{{itemsCount}}</b-badge></b-dropdown-item>
        <b-dropdown-item><i class="fa fa-book"></i> Lesson<b-badge variant="danger">{{itemsCount}}</b-badge></b-dropdown-item>
       
        
        <b-dropdown-header tag="div" class="text-center"><strong>Account</strong></b-dropdown-header>
        <b-dropdown-item><i class="fa fa-user"></i> Profile</b-dropdown-item>
        <b-dropdown-item><i class="fa fa-history"></i> Activity</b-dropdown-item>
       
        <b-dropdown-divider></b-dropdown-divider>
        <b-dropdown-item @click="logout"><i class="fa fa-sign-out"></i> Logout</b-dropdown-item>
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

