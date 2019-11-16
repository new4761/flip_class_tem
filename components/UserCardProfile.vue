<template>
  <b-card class="text-center border-0 " no-body>
    <b-row no-gutters>

        <b-row  class="text-left">
        <b-col>
          <b-img
            class="mr-3 ml-3"
            left
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQiPBeloxh97nLE084M0KPmYpvh-IuH3uF8YhOKMmFnIvxjmUzV"
            width="80"
            height="80"
            rounded="circle"
            alt="Circle image"
          ></b-img>
          <h4 class="mt-1 ml-1">Godinwzza dasdqwe</h4>
          <h6 class="text-muted ml-1">std@19692</h6>
          <br>

        </b-col>
      </b-row>
      




            <b-col>
              <p class="text-muted">บทเรียน</p>
              <v-progress-circular class="circle" :rotate="-90" :size="70" :width="8" :value="20" color="primary">
                20/
                <small class="text-muted">30</small>
              </v-progress-circular>
            </b-col>
            <b-col>
              <p class="text-muted">เเบบฝึกหัด</p>
              <v-progress-circular class="circle" :rotate="-90" :size="70" :width="8" :value="20" color="primary">
                20/
                <small class="text-muted">30</small>
              </v-progress-circular>
            </b-col>
            <b-col>
              <p class="text-muted">รายงาน</p>
              <v-progress-circular class="circle" :rotate="-90" :size="70" :width="8" :value="20" color="primary">
                20/
                <small class="text-muted">30</small>
              </v-progress-circular>
            </b-col>



    </b-row>
  </b-card>
</template>


<style scoped>

.circle {
	cursor:pointer;
}

.circle:hover {
    transform: scale(1.25, 1.25);
    transition: all 0.5s linear;
  }




</style>