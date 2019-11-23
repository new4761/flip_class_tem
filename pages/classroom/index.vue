<template>
<b-container fluid>
{{ip}}
        {{this.$route.path}}
        <nuxt-link :to="{ name: 'classroom-classroomID', params:{classroomID:classRoomList[0].cardId}}">
        <v-btn>
            1
        </v-btn>
        </nuxt-link>
</b-container>
</template>

<script>


export default {
      components: {
  }
  
  ,async asyncData({ $axios }) {
  const ip = await $axios.$get('http://icanhazip.com')
  return { ip }

},

    data:()=>({

    classRoomList: [
      {
        cardId: "1",
        imgsrc: "https://picsum.photos/1024/400/?image=41",
        name: "ทดสอบชื่อห้องเรียน",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          student: 30,
          lesson: 60,
          exercise: 10
        }
      },
      
        ]

    }),

}
</script>