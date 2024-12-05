<template>
    <div class="app">
  
      <MenuComponent :menuTitle="'Featured Categories'"></MenuComponent>
  
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
  
      <MenuComponent :menuTitle="'Popular Products'"></MenuComponent>
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
        :realPrice="product.realPrice"
        ></PopularProductComponent>
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
  import { useProductStore } from "@/store/products";
  
  export default {
    name: "App",
    components: {
      Category_Component,
      PromotionComponent,
      ButtonComponent,
      MenuComponent,
      PopularProductComponent,
    },
    computed: {
      
      ...mapState(useProductStore, {
        categories: (store) => store.categories,
        promotions: (store) => store.promotions,
        products: (store) => store.products,
      }),
      filteredCategories() {
        const productStore = useProductStore();
        return productStore.getCategoriesByGroup(this.currentGroupName);
      },
      Products() {
        const productStore = useProductStore();
        return productStore.getProducts();
      },
    },
    
    mounted() {
      const productStore = useProductStore();
      console.log('Calling fetch actions');
      productStore.fetchCategories();
      productStore.fetchPromotions();
      productStore.fetchProducts();
      productStore.fetchGroups();
    },
  
    data() {
      return {
        currentGroupName: "Group A"
      };
    },
  };
  </script>
  
  <style scoped>
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
  
  .productSection{
    display: flex;
    gap: 15px;
    display: grid;
    grid-template-columns: repeat(5,1fr);
    flex-wrap: wrap;
  }
  </style>
  