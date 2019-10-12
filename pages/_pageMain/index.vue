<template>
<b-container class ="p-5">


    <div>
        <h5><strong> ประกาศแจ้งเตือน</strong></h5>
    </div>

    <b-row class = "justify-content-center pt-4">
        <p><strong>toggle1  </strong> </p>
        <p><strong>toggle1  </strong> </p>
        <p><strong>toggle1  </strong> </p>
    </b-row>

    <b-row class = "pt-4">
        <b-col>
            sort
        </b-col>
        <b-col>
             <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
            </div>
        </b-col>
    </b-row>

    <Noticard/>

           

  
</b-container>


</template>

<script>
import Noticard from "./component/Noticard.vue";

export default {
    components: {
        Noticard
  }
  
}
</script>


<style >
html, body {
    height:100%;
}


</style>