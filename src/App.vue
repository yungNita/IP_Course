<template>
  <div class="app">

    <div class="CategorySection">
      <Category_Component
        v-for="Category_Component in Category_Components"
        :key="Category_Component.name + Category_Component.productCount"
        :name="Category_Component.name"
        :productCount="Category_Component.productCount"
        :image="Category_Component.image"
        :color="Category_Component.color"
      ></Category_Component>
    </div>

    <div class="PromotionSection">
      <div
        v-for="PromotionComponent in PromotionComponents"
        :key="PromotionComponent.title"
        class="promotion-wrapper"
      >
        
        <PromotionComponent
          :title="PromotionComponent.title"
          :color="PromotionComponent.color"
          :image="PromotionComponent.image"
        ></PromotionComponent>
       
        <ButtonComponent
          class="overlay-button"
          :buttonColor="PromotionComponent.buttonColor"
        ></ButtonComponent>
      </div>
    </div>
  </div>
</template>


<script>
import Category_Component from "./components/Category_Component.vue";
import PromotionComponent from "./components/PromotionComponent.vue";
import ButtonComponent from "./components/ButtonComponent.vue";

import axios from "axios";
export default {
  name: "App",
  components: {
    Category_Component,
    PromotionComponent,
    ButtonComponent,
  },

  data() {
    return {
      Category_Components: [],
      PromotionComponents: [],
    }
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
        this.PromotionComponents = result.data;
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

.PromotionSection {
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
