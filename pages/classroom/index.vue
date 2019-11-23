<template>

  <b-container fluid class="bg px-5 py-5">

        <b-navbar justified type="dark" variant="dark">
      <b-navbar-nav>
        <b-navbar-brand href="#"><h3> {{path}} </h3></b-navbar-brand>
      </b-navbar-nav>
    </b-navbar>



    <div class="app bg-white cardradius px-5 py-5">
      <b-row no-gutters>
        <b-col v-for="data in classRoomList" :key="data.cardId" md="4" sm="6" class="p-1">
          <RoomCard :cardData="data" />
        </b-col>
      </b-row>
    </div>
  </b-container>
</template>

<script>
import RoomCard from "./components/RoomCard";

export default {
  components: {
    RoomCard
  },

   computed: {
     path() {
     var str = this.$route.path;
     str = str.replace(/\//g, "");
     return str;
     }

  },


  data: () => ({

    classRoomList: [
      {
        cardId: "1",
        imgsrc: "https://i.imgur.com/67EjwuD.jpg",
        name: "ชื่อห้องเรียน",
        createDate: "14/8/2561",
        desc: "ห้องเรียนที่ 1",
        countList: {
          student: 30,
          lesson: 60,
          exercise: 10
        }
      },
      {
        cardId: "2",
        imgsrc: "https://i.imgur.com/vOrD96J.png",
        name: "ชื่อห้องเรียน",
        createDate: "14/8/2561",
        desc: "ห้องเรียนที่ 2",
        countList: {
          student: 10,
          lesson: 50,
          exercise: 20
        }
      },
      {
        cardId: "3",
        imgsrc: "https://i.imgur.com/fOWDtYW.jpg",
        name: "ชื่อห้องเรียน",
        createDate: "14/8/2561",
        desc: "ห้องเรียนที่ 3",
        countList: {
          student: 20,
          lesson: 10,
          exercise: 5
        }
      },
      {
        cardId: "4",
        imgsrc: "https://i.imgur.com/DknzhSW.jpg",
        name: "ชื่อห้องเรียน",
        createDate: "14/8/2561",
        desc: "ห้องเรียนที่ 4",
        countList: {
          student: 7,
          lesson: 25,
          exercise: 14
        }
      },
      {
        cardId: "5",
        imgsrc: "https://i.imgur.com/H30Q7ME.png",
        name: "ชื่อห้องเรียน",
        createDate: "14/8/2561",
        desc: "ห้องเรียนที่ 5",
        countList: {
          student: 5,
          lesson: 30,
          exercise: 9
        }
      },
      {
        cardId: "6",
        imgsrc: "https://i.imgur.com/6orB6Yb.jpg",
        name: "ชื่อห้องเรียน",
        createDate: "14/8/2561",
        desc: "ห้องเรียนที่ 6",
        countList: {
          student: 30,
          lesson: 60,
          exercise: 10
        }
      },
      {
        cardId: "7",
        imgsrc: "https://i.imgur.com/uoOziI4.jpg",
        name: "ชื่อห้องเรียน",
        createDate: "14/8/2561",
        desc: "ห้องเรียนที่ 7",
        countList: {
          student: 30,
          lesson: 60,
          exercise: 10
        }
      }
    ]
  })
};
</script>

<style scoped>
.bg {
  background: rgb(0, 120, 233);
  background: linear-gradient(
    180deg,
    rgba(0, 120, 233, 1) 0%,
    rgba(0, 142, 244, 1) 52%,
    rgba(0, 212, 255, 1) 100%
  );
  /* background: url(https://i.imgur.com/mXmiwDV.png) no-repeat ;
    background-size: cover; */
}
</style>