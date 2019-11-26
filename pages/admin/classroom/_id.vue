<template>
  <b-container fluid>



 <b-modal v-model="addStudent" header-bg-variant="info">
        <template v-slot:modal-header="{ close }">
          <h4 class="text-white">
            <v-icon style="color:white" class="pr-2">mdi-plus-circle-outline</v-icon>เพิ่มสมาชิก
          </h4>
        </template>

        <b-row no-gutters>
          <h5 class>
            เพิ่มนักเรียน </h5>
          <b-form-input type="text" required placeholder="รหัสนักเรียน"></b-form-input>
        </b-row>

        <b-row class="mt-2" no-gutters>

      <b-form-file
      placeholder="CSV file..."
      drop-placeholder="Drop file here..."
    ></b-form-file>
        </b-row>





        <template v-slot:modal-footer="{ ok, cancel, hide }">
          <b-button
            type="submit"
            style="width:180%;"
            size="md"
            block
            pill
            variant="success"
          >ยืนยันข้อมูล</b-button>
          <br />
          <b-button type="reset" size="md" block pill variant="danger" @click="cancelModal()">ยกเลิก</b-button>
        </template>
      </b-modal>




    <v-parallax dark :src="getClassData.imgsrc" style="height:300px; opacity:0.8; text-shadow: 3px 2px 6px #000000;">
      <v-row align="center" justify="center">
        <v-col class="text-center" cols="12">
          <h1
            style="font-family: 'Mitr', sans-serif !important; font-size:3rem"
          >{{getClassData.name}}</h1>
        </v-col>
      </v-row>
    </v-parallax>
    <b-row>
      <b-col md="10" sm="12" order-md="1" order-sm="2">
        <lessonListDashboard :lessonList="this.lessonList" />
        <exerciseListDashboard :exerciseList="this.exerciseList" />
      </b-col>
      <b-col md="2" sm="12" order-md="2" order-sm="1">
        <b-row no-gutters>
          <b-col md="12" sm="4">
            <b-card no-body class="pt-4">
            <h6 class="text-center">จำนวนนักเรียนปัจจุบัน</h6>
              <v-icon style="font-size:3rem;">mdi-account-multiple</v-icon>
              <h3 class="text-center text-muted">{{getClassData.countList.student}}</h3>
              <b-button @click="addStudent=!addStudent" block>เพิ่มนักเรียน</b-button>
            </b-card>
          </b-col>
          <b-col md="12" sm="4" >
            <b-card no-body class="pt-4">
                        <h6 class="text-center">จำนวนบทเรียน</h6>
              <v-icon style="font-size:3rem;">mdi-library-books</v-icon>
              <h3 class="text-center text-muted">{{getClassData.countList.lesson}}</h3>
              <b-button block>เพิ่มบทเรียน</b-button>
            </b-card>
          </b-col>
          <b-col md="12" sm="4" >
            <b-card no-body class="pt-4">
                   <h6 class="text-center">จำนวนเเบบฝึกหัด</h6>
              <v-icon style="font-size:3rem;">assignment</v-icon>
              <h3 class="text-center text-muted">{{getClassData.countList.exercise}}</h3>
              <b-button block>เพิ่มบทเเบบฝึกหัด</b-button>
            </b-card>
          </b-col>
        </b-row>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
//Dash board
import exerciseListDashboard from "~/components/adminComponent/Dashboard/exerciseList";
import lessonListDashboard from "~/components/adminComponent/Dashboard/lessonList";
export default {
  layout: "admin",
  components: { exerciseListDashboard, lessonListDashboard },
  computed: {
    getClassData() {
      const data = this.classRoomList.find(data => {
        //console.log(data.cardId === this.$route.params.id);
        if (data.cardId === this.$route.params.id) return data;
      });
      return data;
    }
  },
  // mounted() {
  //   this.cardData = this.getClassData();
  // },
  data: () => ({
    cardData: {},
    addStudent: false,
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
        name: "ชื่อห้องเรียนasdasdasdasdas",
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
        name: "ชื่อห้องเรียนasdasdasdas",
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
        name: "ชื่อห้องเรียนeqweqweqwe",
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
        name: "ชื่อห้องเรียนasdasdqwe",
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
        name: "ชื่อห้องเรียนzsdadq",
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
    ],
    lessonList: [
      {
        cardId: "1",
        name: "ทดสอบชื่อบทเรียน",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          article: 30,
          test: 60
        }
      },
      {
        cardId: "2",
        name: "ทดสอบชื่อบทเรียนขนาฟหใญ่",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          article: 30,
          test: 60
        }
      },
      {
        cardId: "3",
        name: "ทดสอบชื่อบทเรียนขนาฟหใญ่มากๆๆๆๆ",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          article: 30,
          test: 60
        }
      }
    ],
    exerciseList: [
      {
        cardId: "1",
        name: "ทดสอบชื่อเเบบฝึกหัด",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          choice: 30,
          upload: 60,
          text: 80
        }
      },
      {
        cardId: "2",
        name: "ทดสอบชื่อบทเรียนขนาฟหใญ่asdasdasdasdqweqweqew",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          choice: 30,
          upload: 60,
          text: 80
        }
      },
      {
        cardId: "3",
        name: "ทดสอบชื่อบทเรียนขนาฟหใญ่มากๆๆๆๆ",
        createDate: "14/8/2561",
        desc:
          "Usually though, you’ll want every prop to be a specific type of value. In these cases, you can list props as an object, where the properties’ names and values contain the prop names and types, respectively:",
        countList: {
          choice: 30,
          upload: 60,
          text: 80
        }
      }
    ]
  }),
  methods:{
    cancelModal() {

     this.addStudent = false;

    },

  }
};
</script>