<template>
  <b-card class="text-center" no-body>
    <b-row no-gutters>

        <b-row  class="text-left">
        <b-col>
          <b-img
            class="mr-3 ml-3"
            left
            src="https://picsum.photos/125/125/?image=58"
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



           <b-row >
            <b-col>
              <p class="text-muted">บทเรียน</p>
              <v-progress-circular :rotate="-90" :size="70" :width="8" :value="20" color="primary">
                20/
                <small class="text-muted">30</small>
              </v-progress-circular>
            </b-col>
            <b-col>
              <p class="text-muted">เเบบฝึกหัด</p>
              <v-progress-circular :rotate="-90" :size="70" :width="8" :value="20" color="primary">
                20/
                <small class="text-muted">30</small>
              </v-progress-circular>
            </b-col>
            <b-col>
              <p class="text-muted">รายงาน</p>
              <v-progress-circular :rotate="-90" :size="70" :width="8" :value="20" color="primary">
                20/
                <small class="text-muted">30</small>
              </v-progress-circular>
            </b-col>
          </b-row>

          <b-row >
          </b-row>


    </b-row>
  </b-card>
</template>