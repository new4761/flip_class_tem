<template>
<div></div>
</template>
<script>
export default {
  props: {
    cardData: {
      imgsrc:{type:String},
      cardId: { type: String },
      name: { type: String },
      createDate: { type: String },
      desc: { type: String },
      countList: { type: Array }
    }
  },
  data: () => ({
    hover: false
  })
};
</script>