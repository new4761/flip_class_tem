<template>
            <b-card-body class="p-4">
              <h1 class="pt-4">Forget Password</h1>
              <p class="text-muted">Insert your e-mail</p>


              <b-input-group class="mb-3">
                <b-input-group-prepend>
                  <b-input-group-text>@</b-input-group-text>
                </b-input-group-prepend>
                <input type="text" class="form-control" placeholder="Email">
              </b-input-group>

              <v-btn block depressed class="bg-green text-white"> sent</v-btn>

            </b-card-body>
</template>