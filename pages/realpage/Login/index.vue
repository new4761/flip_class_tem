<template>


<div class="app bg justify-content-center align-items-center">

    <div class="container">
      <b-row class="justify-content-center">
        <b-col md="8">
          <b-card-group class = "shadow-lg">

            <b-card no-body class="border-0 text-white cardbg py-5 d-md-down-none" style="width:44%">
              <b-card-body class="text-center">
                <div>
                  <h2>Flip Classroom</h2>
                  <p>ทำงู้น ทำงี้ ทำงั้น อะไรอย่างงี้ + ภาพพื้นหลังเท่ๆ</p>
                </div>
              </b-card-body>
            </b-card>

             <b-card no-body class="border-0 px-4">
              <b-card-body>
                <h1>Login</h1>
                <p class="text-muted">Sign In to your account</p>
                <b-input-group class="mb-3">
                  <b-input-group-prepend><b-input-group-text><i class="fa fa-user"></i></b-input-group-text></b-input-group-prepend>
                  <input type="text" class="form-control" placeholder="Student id">
                </b-input-group>
                <b-input-group class="mb-4">
                  <b-input-group-prepend><b-input-group-text><i class="fa fa-lock"></i></b-input-group-text></b-input-group-prepend>
                  <input type="password" class="form-control" placeholder="Password">
                </b-input-group>
                <b-row>
                  <b-col cols="6">
                    <v-btn depressed class="px-4 bg-blue text-white">Login</v-btn>
                  </b-col>
                  <b-col cols="6" class="text-right">
                    <b-button variant="link" class="px-0">Forgot password?</b-button>
                  </b-col>
                </b-row>

                <b-row>
                  <b-col cols="6">
                    <v-btn depressed small class="bg-myblue text-white" >Teacher Login</v-btn>
                  </b-col>
                </b-row>
              </b-card-body>
            </b-card>

          </b-card-group>
        </b-col>
      </b-row>
    </div>


</div>


    
</template>


<script>
export default {
    layout: "clean"
}
</script>
<style>
@import "./css/Loginstyle.css";
</style>