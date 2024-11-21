<template>
  <div class="app">

    <div class="CategorySection">
      <Category_Component
        v-for="category in categories"
        :key="category.name + category.productCount"
        :name="category.name"
        :productCount="category.productCount"
        :image="category.image"
        :color="category.color"
      ></Category_Component>
    </div>

    <div class="PromotionSection">
      <div
        v-for="promotion in promotions"
        :key="promotion.title"
        class="promotion-wrapper"
      >
        <PromotionComponent
          :title="promotion.title"
          :color="promotion.color"
          :image="promotion.image"
        ></PromotionComponent>

        <ButtonComponent
          class="overlay-button"
          :buttonColor="promotion.buttonColor"
        ></ButtonComponent>
      </div>
    </div>
  </div>
</template>

<script>
import { mapState } from "pinia";
import { useProductStore } from "./store/productStore";
import Category_Component from "./components/Category_Component.vue";
import PromotionComponent from "./components/PromotionComponent.vue";
import ButtonComponent from "./components/ButtonComponent.vue";

export default {
  name: "App",
  components: {
    Category_Component,
    PromotionComponent,
    ButtonComponent,
  },
  computed: {
    // Map state directly from the Pinia store
    ...mapState(useProductStore, {
      categories: (store) => store.categories,
      promotions: (store) => store.promotions,
    }),
    filteredCategories() {
      const productStore = useProductStore();
      return productStore.getCategoriesByGroup(this.currentGroupName);
    },
    popularProducts() {
      const productStore = useProductStore();
      return productStore.getPopularProducts();
    },
  },
  mounted() {
    const productStore = useProductStore();
    productStore.fetchCategories();
    productStore.fetchPromotions();
    productStore.fetchProducts();
  },
  data() {
    return {
      currentGroupName: "Group A", // Example group name
    };
  },
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
