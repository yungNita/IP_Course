<template>
  <div class="Promotion" :style="{ background: color }">
    <h2>{{ title }}</h2>
    <img :src="image" alt="Promotion image" class="PromotionImage" />
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
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");

.Promotion {
  border-radius: 10px;
  padding-left: 40px;
  width: 512px;
  height: 300px;
  display: flex;
  align-items: center;
  margin-right: 20px;
}

h2 {
  font-size: 24px;
  color: #253d4e;
  margin-bottom: 30px;
  line-height: 1.4;
  font-family: "Quicksand", sans-serif;
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
