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
    name: String,
    productCount: Number,
    image: String,
    color: String,
  },
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");

.CategoryCart {
  width: 136px;
  height: 183px;
  display: flex;
  flex-direction: column;
  align-items: center;
  border-radius: 10px;
  text-align: center;
  margin-bottom: 45px;
}
.CategoryCart:hover {
  cursor: pointer;
  box-shadow: 20px 20px 40px 0 rgba(24, 24, 24, 0.7);
}

.CategoryImage {
  width: 120px;
  height: 120px;
  object-fit: cover;
}

h3 {
  color: #253d4e;
  font-size: 16px;
  font-family: "Quicksand", sans-serif;
  margin-top: -7px;
}

p {
  color: #b6b6b6;
  font-size: 12px;
  font-family: "Quicksand", sans-serif;
}
</style>
