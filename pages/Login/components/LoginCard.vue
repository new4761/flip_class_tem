<template>
  <div>

    <v-tabs hide-slider>
        <v-spacer></v-spacer>

      <v-tab class="tab">Student</v-tab>
      <v-tab class="tab">Teacher</v-tab>

      <v-tab-item>
        <b-card-body>
          <h1>Login</h1>
          <p class="text-muted">Sign In to your account</p>
          <b-input-group class="mb-3">
            <b-input-group-prepend>
              <b-input-group-text>
                <i class="fa fa-user"></i>
              </b-input-group-text>
            </b-input-group-prepend>
            <input type="text" class="form-control" placeholder="Student id" />
          </b-input-group>
          <b-input-group class="mb-4">
            <b-input-group-prepend>
              <b-input-group-text>
                <i class="fa fa-lock"></i>
              </b-input-group-text>
            </b-input-group-prepend>
            <input type="password" class="form-control" placeholder="Password" />
          </b-input-group>
        </b-card-body>
      </v-tab-item>

      <v-tab-item>
        <b-card-body>
          <h1>Teacher Login</h1>
          <p class="text-muted">For Teacher only</p>
          <b-input-group class="mb-3">
            <b-input-group-prepend>
              <b-input-group-text>
                <i class="fa fa-user"></i>
              </b-input-group-text>
            </b-input-group-prepend>
            <input type="text" class="form-control" placeholder="Teacher id" />
          </b-input-group>
          <b-input-group class="mb-4">
            <b-input-group-prepend>
              <b-input-group-text>
                <i class="fa fa-lock"></i>
              </b-input-group-text>
            </b-input-group-prepend>
            <input type="password" class="form-control" placeholder="Password" />
          </b-input-group>
        </b-card-body>
      </v-tab-item>

    </v-tabs>
  </div>
</template>
