<template>
  <div class="app">

    <div class="CategorySection">
      <Category_Component
        v-for="Category_Component in Category_Components"
        :key="Category_Component.title + Category_Component.itemCount"
        :title="Category_Component.title"
        :itemCount="Category_Component.itemCount"
        :image="Category_Component.image"
        :background="Category_Component.background"
      ></Category_Component>
    </div>

    <div class="Promotion1Section">
      <div
        v-for="Promotion1_Component in Promotion1_Components"
        :key="Promotion1_Component.title"
        class="promotion-wrapper"
      >
        
        <Promotion1_Component
          :title="Promotion1_Component.title"
          :background="Promotion1_Component.background"
          :image="Promotion1_Component.image"
        ></Promotion1_Component>

        
        <Button_Component
          class="overlay-button"
          :buttonColor="Promotion1_Component.buttonColor"
        ></Button_Component>
      </div>
    </div>
  </div>
</template>


<script>
import Category_Component from "./components/Category_Component.vue";
import Promotion1_Component from "./components/Promotion1_Component.vue";
import Button_Component from "./components/Button_Component.vue";

import axios from "axios";

export default {
  name: "App",
  components: {
    Category_Component,
    Promotion1_Component,
    Button_Component,
  },

  data() {
    return {
      Category_Components: [],
      Promotion1_Components: [],
    };
  },

  mounted() {
    this.fetchCategories(),
    this.fetchPromotions()
  },

  methods: {
    fetchCategories(){
      axios.get("http://localhost:3000/api/categories").then((result)=>{
        this.Category_Components = result.data;
      });
    },

    fetchPromotions(){
      axios.get("http://localhost:3000/api/promotions").then((result)=>{
        this.Promotion1_Components = result.data;
      });
    }
  }
};
</script>

<style scoped>
.app {
  padding: 20px;
}

.CategorySection {
  display: flex;
  gap: 15px;
  flex-wrap: wrap;
  justify-content: center;
  margin-bottom: 40px;
}

.Promotion1Section {
  display: flex;
  gap: 20px;
  justify-content: center;
}
.promotion-wrapper {
  position: relative;
  display: inline-block; 
}

.overlay-button {
  position: absolute;
  bottom: 48px; 
  left: 38px;
}
</style>
