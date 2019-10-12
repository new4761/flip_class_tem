<template>
<b-container class ="p-5">

    <div>
        <h1><strong>ประกาศแจ้งเตือน</strong></h1>
    </div>

    <b-row class = "justify-content-center pt-4"> 
        <Notitag/>
    </b-row>

    <b-row class = "pt-4"> 

        <Sortdropdown/> 

        <b-col>
             <div class="input-group ml-auto">
                <input type="text" class="form-control" placeholder="ค้นหา..." aria-label="ค้นหา...">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">
                            <i class="icon-magnifier"></i>
                        </button>
                    </span>
            </div>
        </b-col>
    </b-row>

    <Noticard v-for="index in 10" :key="index"/> <!-- fot testing -->
    <pagebar/>


           
</b-container>


</template>

<script>
import Noticard from "./component/Noticard.vue";
import Notitag from "./component/Notitag.vue";
import Pagebar from "./component/Pagebar.vue";
import Sortdropdown from "./component/Sortdropdown.vue";

export default {
    components: {
        Noticard,
        Notitag,
        Pagebar,
        Sortdropdown
  }
  
}
</script>


<style >


</style>