<template>
  <div class="app">
    <SearchBoxComponent class="searchBox" />
    <MenuItemComponent />
    <ShowCaseComponent />
    <MenuComponent :menuTitle="'Featured Categories'" />

    <!-- Category Section -->
    <div class="CategorySection">
      <Category_Component
        v-for="category in categories"
        :key="category.name + category.productCount"
        :name="category.name"
        :productCount="category.productCount"
        :image="category.image"
        :color="category.color" />
    </div>

    <!-- Promotion Section -->
    <div class="PromotionSection">
      <div
        v-for="promotion in promotions"
        :key="promotion.title"
        class="promotion-wrapper">
        <PromotionComponent
          :title="promotion.title"
          :color="promotion.color"
          :image="promotion.image" />
        <ButtonComponent
          class="overlay-button"
          :buttonColor="promotion.buttonColor" />
      </div>
    </div>

    <!-- MenuComponent for Popular Products -->
    <MenuComponent :menuTitle="'Popular Products'" />

    <!-- Product Section -->
    <div class="productSection">
      <PopularProductComponent
        v-for="product in products"
        :key="product"
        :color="product.color"
        :promotionAsPercentage="product.ProductStatus"
        :image="product.image"
        :name="product.name"
        :rating="product.rating"
        :size="product.size"
        :price="product.price"
        :realPrice="product.realPrice" />
    </div>
  </div>
</template>

<script>
import { mapState } from "pinia";
import MenuComponent from "@/components/MenuComponent.vue";
import ButtonComponent from "@/components/ButtonComponent.vue";
import PopularProductComponent from "@/components/PopularProductComponent.vue";
import Category_Component from "@/components/Category_Component.vue";
import PromotionComponent from "@/components/PromotionComponent.vue";
import SearchBoxComponent from "@/components/SearchBoxComponent.vue";
import ShowCaseComponent from "@/components/ShowCaseComponent.vue";
import MenuItemComponent from "@/components/MenuItemComponent.vue";
import { useProductStore } from "@/store/products";

export default {
  name: "HomeView",
  components: {
    Category_Component,
    PromotionComponent,
    ButtonComponent,
    MenuComponent,
    PopularProductComponent,
    MenuItemComponent, // Register MenuItem
    SearchBoxComponent, // Register SearchBox
    ShowCaseComponent, // Register ShowCase
  },
  computed: {
    ...mapState(useProductStore, {
      categories: (store) => store.categories,
      promotions: (store) => store.promotions,
      products: (store) => store.products,
    }),
  },
  mounted() {
    const productStore = useProductStore();
    productStore.fetchCategories();
    productStore.fetchPromotions();
    productStore.fetchProducts();
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
  width: 100%;
}

.CategorySection {
  display: flex;
  gap: 15px;
  flex-wrap: wrap;
}

.PromotionSection {
  display: flex;
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

.productSection {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 15px;
}
.searchBox {
  position: absolute;
  top: 4.5%;
  left: 16%;
}
</style>
