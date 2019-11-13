<template>
  <p v-b-modal.accountModal class="justify-content-start text-muted d-inline">
      by
    <v-avatar size="25">
    <img :src="CreaterData.src" :alt="CreaterData.name" />
    </v-avatar>
   {{ CreaterData.name }}
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