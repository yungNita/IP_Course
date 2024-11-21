<template>
  <div class="CategoryCart" :style="{ background: color }">
    <img :src="image" alt="Category image" class="CategoryImage" />
    <div class="CategoryDetail">
      <h3>{{ name }}</h3>
      <p>{{ productCount }} Items</p>
    </div>
  </div>
</template>

<script>

export default {
  name: "Category_Component",
  props: {
    name: {
      type: String,
    },
    productCount: {
      type: Number,
    },
    image: {
      type: String,
    },
    color: {
      type: String,
    }
  },
};
</script>

<style scoped>
.CategoryCart {
  width: 136px;
  height: 183px;
  display: flex;
  flex-direction: column;
  align-items: center;
  border-radius: 10px;
  text-align: center;
}

.CategoryImage {
  width: 120px;
  height: 120px;
  object-fit: cover;
}

h3 {
  color: #253d4e;
  font-size: 16px;
}

p {
  color: #b6b6b6;
  font-size: 12px;
}
</style>
