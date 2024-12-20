<template>
  <div class="app">
    <SearchBoxComponent class="searchBox" />
    <MenuItemComponent />
    <ShowCaseComponent />
    <MenuComponent :menuTitle="'Featured Categories'" />

    <!-- Categories Section -->
    <div class="CategorySection">
      <router-link
        v-for="category in categories"
        :key="category.id"
        :to="`/categories/${category.id}`"
        class="category-link">
        <Category_Component
          :name="category.name"
          :productCount="category.productCount"
          :image="category.image"
          :color="category.color" />
      </router-link>
    </div>

    <!-- Promotion Section -->
    <div class="PromotionSection">
      <div
        v-for="promotion in promotions"
        :key="promotion.id"
        class="promotion-wrapper">
        <router-link :to="`/products/${promotion.id}`" class="promotion-link">
          <PromotionComponent
            :title="promotion.title"
            :color="promotion.color"
            :image="promotion.image" />
        </router-link>
        <ButtonComponent
          class="overlay-button"
          :buttonColor="promotion.buttonColor" />
      </div>
    </div>

    <MenuComponent :menuTitle="'Popular Products'" />

    <!-- Products Section -->
    <div class="productSection">
      <PopularProductComponent
        v-for="product in products"
        :key="product.id"
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
    MenuItemComponent,
    SearchBoxComponent,
    ShowCaseComponent,
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
  width: 1620px;
}

.CategorySection {
  display: flex;
  gap: 20px;
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
  display: flex;
  gap: 15px;
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  flex-wrap: wrap;
}

.promotion-link,
.category-link {
  text-decoration: none;
  color: inherit;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 20px;
}

.searchBox {
  position: absolute;
  top: 4.5%;
  left: 16%;
}
</style>
