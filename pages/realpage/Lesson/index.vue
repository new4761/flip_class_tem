<template>
<div>
<b-button v-b-toggle.collapse-1 variant="primary">Toggle Collapse</b-button>
 
</div>
</template>
<script>
export default {
   layout: 'Lesson',
  data() {
    return {
      items: [
        {
          text: "Admin",
          href: "#"
        },
        {
          text: "Manage",
          href: "#"
        },
        {
          text: "Library",
          active: true
        }
      ],
      e1: 0
    };
  }
};
</script>