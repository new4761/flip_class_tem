<template>
  <b-card no-body class="cardradius">
    <b-img
      class="p-1 cardradius"
      src="https://picsum.photos/1024/400/?image=41"
      fluid
      alt="Responsive image"
    ></b-img>
    <b-card-text class="px-4 pt-2">
      <div>
        <h2 class="pt-1">ชื่อห้องเรียน</h2>
        <small class="text-muted">Created Date : 14/7/42</small>
      </div>This is a wider card with supporting text below as a natural lead-in to additional content.
      This card has even longer content than the first to show that equal height action.
    </b-card-text>
    <v-divider></v-divider>
    <b-row class="text-center" no-gutters>
      <b-col>
        <small>
          <v-icon>mdi-account-multiple</v-icon>
          <h6 class="text-muted pt-1">20</h6>
        </small>
      </b-col>
      <v-divider vertical></v-divider>
      <b-col>
        <small>
          <v-icon>mdi-library-books</v-icon>
          <h6 class="text-muted pt-1">20</h6>
        </small>
      </b-col>
      <v-divider vertical></v-divider>
      <b-col>
        <small>
          <v-icon>assignment</v-icon>
          <h6 class="text-muted pt-1">20</h6>
        </small>
      </b-col>
    </b-row>
  </b-card>
</template>