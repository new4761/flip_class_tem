<template>
  <sui-segment color="blue">
    <sui-container fluid style="height:100%;">
      <sui-label ribbon="left" size="big" color="blue">
        <sui-icon name="clipboard" fitted />
        &nbsp; บทเรียนอัพเดทล่าสุด
      </sui-label>
      <!-- <a is="sui-label" color="red" ribbon>
        <h4>
          <i class="el-icon-s-order"></i> บทเรียนอัพเดทล่าสุด
        </h4>
      </a>-->
      <sui-list v-for="item in itemMax" :key="item">
       <sui-list-item>
      <sui-list-icon name="github" size="large" vertical-align="middle" />
      <sui-list-content>
        <a is="sui-list-header">Semantic-Org/Semantic-UI</a>
        <a is="sui-list-description">Updated 10 mins ago</a>
      </sui-list-content>
    </sui-list-item>
        <sui-divider v-if="item != itemMax" />
      </sui-list>
    </sui-container>
  </sui-segment>
</template>

<script>
export default {
  data: () => ({
    itemMax: 8
  })
};
</script>
