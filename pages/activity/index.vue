<template>

<b-container fluid fuild class="app bg-myblue">

    <b-row class="justify-content-center">
        <b-col md="10 p-5 m-5">


  <v-card>
    <v-card-title>
      <h3><strong>Activity</strong></h3>
      <v-spacer></v-spacer>

      <v-text-field
        v-model="search"
        append-icon="search"
        label="Search"
        single-line
        hide-details
      ></v-text-field>

    </v-card-title>
  <v-data-table
    :headers="headers"
    :items="activity"
    :search="search"
    :items-per-page="5"
    class="elevation-1">
  </v-data-table>
  </v-card>


        </b-col>

    </b-row>
          
          
</b-container>

    
</template>
<script>
export default {
    data () {
      return {
        search: '',
        headers: [
          {
            text: 'Activity',
            align: 'left',
            sortable: true,
            value: 'name',
          },

          { text: 'Classroom', value: 'classroom' },
          { text: 'Lesson', value: 'lesson' },
          { text: 'Date', value: 'date' },
          { text: 'Time', value: 'time' },
        ],
        activity: [
          {
            name: 'ทำแบบทดสอบ ',
            classroom: 'ห้องเรียนที่ 1',
            lesson: 'บทเรียนที่ 1',
            date: '13/11/19 ',
            time: '12:59',
          },


          {
            name: 'อัปโหลดไฟล์ ',
            classroom: 'ห้องเรียนที่ 2',
            lesson: 'บทเรียนที่ 1',
            date: '12/11/19 ',
            time: '10:59',
          },

          {
            name: 'เรียนจบบทเรียน',
            classroom: 'ห้องเรียนที่ 3',
            lesson: 'บทเรียนที่ 2',
            date: '12/11/19 ',
            time: '8:30',
          },

          {
            name: 'อัปโหลดไฟล์ ',
            classroom: 'ห้องเรียนที่ 1',
            lesson: 'บทเรียนที่ 5',
            date: '9/11/19 ',
            time: '9:10',
          },

          {
            name: 'อัปโหลดไฟล์ ',
            classroom: 'ห้องเรียนที่ 4',
            lesson: 'บทเรียนที่ 1',
            date: '1/11/19 ',
            time: '5:00',
          },

          {
            name: 'เรียนจบบทเรียน',
            classroom: 'ห้องเรียนที่ 1',
            lesson: 'บทเรียนที่ 8',
            date: '28/10/19 ',
            time: '8:30',
          },

          {
            name: 'เรียนจบบทเรียน',
            classroom: 'ห้องเรียนที่ 1',
            lesson: 'บทเรียนที่ 6',
            date: '16/10/19 ',
            time: '8:30',
          },
          
        ],
      }
    },
    
}
</script>

<style>




</style>