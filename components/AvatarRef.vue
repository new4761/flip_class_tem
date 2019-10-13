<template>
  <p v-b-modal.accountModal class="justify-content-start text-muted d-inline">
      โดย
    <v-avatar size="25">
    <img :src="CreaterData.src" :alt="CreaterData.name" />
    </v-avatar>

    <strong class="text-dark"> {{ CreaterData.name }}</strong> 
  </p>
</template>
<script>
export default {
  props: {
    CreaterData: Object
  },
  data: () => ({})
};
</script>