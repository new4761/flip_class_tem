<template>
  <v-card class="text-center" no-body>
    <b-row class="justify-content-center">
      <b-col md="5">
        <b-row class="pt-3 justify-content-center">
          <b-img
            left
            :src="imgsrc"
            width="120"
            height="120"
            rounded="circle"
            alt="Circle image"
          ></b-img>
        </b-row>

        <b-row class="justify-content-center">
          <h4 class="mt-3 ml-1">{{username}}</h4>
        </b-row>

        <b-row class="justify-content-center">
          <h6 class="text-muted ml-1">{{stdid}}</h6>
        </b-row>

        
        <b-row class="justify-content-center">
          <b-col md="7" sm="12" class="text-center">
          <a>E-mail:</a> <a class="text-muted">{{mail}}</a>
          </b-col>
          <b-col md="4" sm="12" class="text-center">
          <a>Tel: </a> <a class="text-muted">{{tel}}</a>
          </b-col>
        </b-row>



      </b-col>
    </b-row>

    <h4 class="text-center mt-3">การดำเนินการของคุณ</h4>
    <b-row class="justify-content-center">
      <b-col md="5">
        <b-row class="justify-content-center">

          <b-col v-for="(data,idx) in UserCardData" :key="idx">
            <p class="text-muted">{{data.title}}</p>
            <v-progress-circular
              :rotate="-90"
              :size="70"
              :width="8"
              :value="(data.value/data.maxvalue)*100"
              color="primary"
            >
              {{data.value}}/
              <small class="text-muted">30</small>
            </v-progress-circular>
          </b-col>
        </b-row>
      </b-col>
    </b-row>

  </v-card>
</template>

<script>

export default {
    props:['UserCardData'],
    data:()=>({
      username:"สมจันทร์ หมายชาย",
      stdid:"std@42069",
      mail:"GachiGASM@Gmail.men",
      tel:" +889874412",
      imgsrc:"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQiPBeloxh97nLE084M0KPmYpvh-IuH3uF8YhOKMmFnIvxjmUzV"
    })
}

</script>