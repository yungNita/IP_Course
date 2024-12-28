<template>
  <div class="app">
    <SearchBoxComponent class="searchBox" />
    <MenuItemComponent />
    <!-- <ShowCaseComponent /> -->
    <router-view></router-view>
  </div>
</template>

<script>
import SearchBoxComponent from "@/components/SearchBoxComponent.vue";
import MenuItemComponent from "@/components/MenuItemComponent.vue";
export default {
  name: "App",
  components: {
    SearchBoxComponent,
    MenuItemComponent,
  },
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");
body {
  font-family: "Quicksand", sans-serif;
}

.app {
  background-color: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  min-height: 100vh;
  width: 1620px;
}

.searchBox {
  position: absolute;
  top: 4.5%;
  left: 16%;
}
</style>
