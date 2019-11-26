<template>

        <b-card-body>
          <h1 class="text-myblue">Login</h1>
          <p class="text-muted">Sign In to your account</p>
          <b-input-group class="mb-3">
            <b-input-group-prepend>
              <b-input-group-text>
                <i class="fa fa-user"></i>
              </b-input-group-text>
            </b-input-group-prepend>
            <input type="text" class="form-control" required  placeholder="Student id" />
          </b-input-group>
          <b-input-group class="mb-4">
            <b-input-group-prepend>
              <b-input-group-text>
                <i class="fa fa-lock"></i>
              </b-input-group-text>
            </b-input-group-prepend>
            <input type="password" class="form-control" required placeholder="Password" />
          </b-input-group>
        </b-card-body>
 
</template>
