<template>

<b-container fluid class="app bg-myblue">

    <div class="m-3">
        <b-row class="justify-content-center">
        <b-col md="10" sm="12">  
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
}
</script>