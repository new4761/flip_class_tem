<template>
  <b-card class="bg-transparent text-center border-0" no-body style="max-width: 1000px;">
    <b-row no-gutters>
      <b-col class="text-left mx-1 my-1">
        <v-card max-width="600" height="100%" class="centerBlock bg-myblue text-white">
          <v-list-item>
            <v-list-item-avatar class="my-2" size="70">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQiPBeloxh97nLE084M0KPmYpvh-IuH3uF8YhOKMmFnIvxjmUzV"
                alt="John"
              />
            </v-list-item-avatar>
            <v-list-item-content class="text-white">
              <v-card-title>สมชาย นามสกุลที่ยาวจนเหลือคณานับ</v-card-title>
              <v-card-subtitle class="mx-3 text-muted">std@42069</v-card-subtitle>
            </v-list-item-content>
          </v-list-item>
        </v-card>
      </b-col>

      <b-col
        sm="12"
        md="2"
        class="justify-content-center mx-1 my-1"
        v-for="index in 3"
        :key="index"
      >
        <v-card max-width="300" height="100%" class="centerBlock bg-myblue text-white">
          <v-card-text class="cardtext text-white">
            <i class="fa fa-book"></i>
            บทเรียน &nbsp;
            <v-progress-circular
              class="circle my-1"
              :rotate="-90"
              :size="70"
              :width="8"
              :value="20"
            >
              20/
              <small class="text-muted">30</small>
            </v-progress-circular>
          </v-card-text>
        </v-card>
      </b-col>
    </b-row>
  </b-card>
</template>


<style scoped>
/* .circle {
	cursor:pointer;
}

.circle:hover {
    transform: scale(1.25, 1.25);
    transition: all 0.5s linear;
  } */
.cardtext {
  font-size: 18px;
}

.centerBlock {
  margin: auto;
}
</style>