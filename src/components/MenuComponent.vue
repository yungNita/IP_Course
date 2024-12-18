<template>
  <div class="menuList">
    <h2>{{ menuTitle }}</h2>
    <div class="menuItem">
      <p class="text">All</p>
      <p class="text">Milks&Dairies</p>
      <p class="text">Coffes&Teas</p>
      <p class="text">PetFoods</p>
      <p class="text">Meats</p>
      <p class="text">Vegetables</p>
      <p class="text">Fruits</p>
    </div>
  </div>
</template>

<script>
export default {
  name: "MenuComponent",
  props: {
    menuTitle: String,
  },
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");

body {
  font-family: "Quicksand", sans-serif;
}

.menuList {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 40px 0;
}
.menuItem {
  display: flex;
  justify-content: space-between;
  margin-right: 15px;
}
h2,
p {
  font-family: "Quicksand", sans-serif;
  color: #253d4e;
  font-weight: bold;
}
.text {
  margin-left: 20px;
  cursor: pointer;
}
</style>
