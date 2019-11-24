<template>

<b-container fluid class="bg px-3 py-2">
  <div class="app bgtop">


        <b-navbar justified type="dark" variant="dark">
      <b-navbar-nav>
        <b-navbar-brand href="#"><h3> {{path}} </h3></b-navbar-brand>
      </b-navbar-nav>
    </b-navbar>

  
    <b-row no-gutters class="px-1" >
      <b-col v-for="item in lessonList" :key="item.cardId"  lg="3" xl="2" sm="6" class="p-2">
        <LessonCard :cardData="item" />
      </b-col>
    </b-row>

    </div>
</b-container>

  

</template>
<script>
import LessonCard from "~/components/studentComponent/LessonCard";
export default {

   components: {
    LessonCard

  },

   computed: {
     path() {
     var str = this.$route.path;
     str = str.replace(/\//g, "  ");
     return str;
     }

  },
 data:()=>({
   lessonList: [
      {
        cardId: "1",
        name: "ชื่อบทเรียน 1",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          article: 25,
          test: 10
        }
      },
      {
        cardId: "2",
        name: "ชื่อบทเรียน 2",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          article: 14,
          test: 15
        }
      },
      {
        cardId: "3",
        name: "ชื่อบทเรียน 3",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          article: 32,
          test: 9
        }
      },
            {
        cardId: "4",
        name: "ชื่อบทเรียน 4",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          article: 24,
          test: 12
        }
      },
            {
        cardId: "5",
        name: "ชื่อบทเรียน 5",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          article: 15,
          test: 30
        }
      },
            {
        cardId: "6",
        name: "ชื่อบทเรียน 6",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          article: 30,
          test: 5
        }
      },
            {
        cardId: "7",
        name: "ชื่อบทเรียน 7",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          article: 10,
          test: 0
        }
      },
      
    ]
 })
  
}
</script>

<style>
.bgtop{
  background: url(https://i.imgur.com/HJMyKem.png) no-repeat ;
  background-size: cover;}

.bg{
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