<template>
  <div class="wrapper"><h2>บทเรียนล่าสุด</h2><br>
      <div class="row justify-content-md-center"><div class = "col-12"> </div> </div> 
      <div class="row justify-content-md-center"><div class = "col-12"> 
        <div class="card border-primary mb-3">
          <h5 class="card-header">
            <p size="sm"><b-button pill variant="primary" size="sm">Category</b-button> Card title</p>
            <p></p>
            <b-button size="sm" pill variant="primary" v-for="tag_item in tag_max" :key="tag_item">Tag</b-button>
            </h5>            
            <div class="card-body">
              <p class="cardtext" color: Black>This is a longer card It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.This is a longer card It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-3">
                  <p><i class="fa fa-eye fa-sm mt-1"></i> 300</p>                                  
                </div>                    
                <div class="col-3">
                  <p><i class="fa fa-check-circle-o fa-sm mt-1"></i> 300</p>                                    
                </div>
                <div class="col-6">
                  <p>by <i class="fa fa-user-circle fa-sm mt-1"></i> Inwza007</p>
                </div>                                  
              </div>
            </div>
          <b-button block variant="primary" size="sm">รายละเอียดเพิ่มเติม</b-button>
        </div>      
      </div></div>
      <div class="row justify-content-md-center"><div class = "col-10"> <b-button pill block variant="primary" size="lg">ดำเนินการต่อ ></b-button></div> </div>
      
  </div>  
</template>

<script>
  
  export default {
  name: 'Recentlesson',
  data: () => ({
    tag_max : 4
  }),
}
</script>
<style>
  .card-header {
    text-shadow: 0px 0px 10px black;
    color : rgb(255, 255, 255);
    background-color: rgb(160, 160, 160);
    background-blend-mode: darken;
    background-image : url("https://picsum.photos/600/300/?image=25");
  }
  .cardtext {
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 3; /* number of lines to show */
   -webkit-box-orient: vertical;
  }
</style>

