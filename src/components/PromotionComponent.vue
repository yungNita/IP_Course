<template>
  <div class="Promotion" :style="{ background: color }">
      <h2>{{ title }}</h2>
      <img :src="image" alt="Promotion image" class="PromotionImage">
  </div>
</template>

<script>

export default {
  name: "PromotionComponent",
  props: {
      title: String,
      image: String,
      color: String,
      buttonColor: String,
      promotion: Object, 
  },
};
</script>


<style scoped>
    .Promotion {
    border-radius: 10px;
    padding-left: 40px;
    width: 512px;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;  
    margin-right: 20px;
    margin-left: none;
  }
  
  h2 {
    font-size: 24px;
    color: #253D4E;
    margin-bottom: 30px;
    line-height: 1.4;
  }
  
  .PromotionImage {
    width: 204px;
    height: 252px;
    object-fit: cover;
    border-radius: 10px;
  }
  
  .overlay_button {
    position: absolute;
    bottom: 48px;
    left: 38px;
  }
</style>