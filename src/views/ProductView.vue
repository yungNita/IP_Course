<template>
  <div class="product-detail-page">
    <!-- Promotion Title -->
    <h1 class="promotion-title">{{ promotionTitle }}</h1>

    <!-- Product Components -->
    <div class="product-container">
      <ProductImageComponent />
      <ProductDetailComponent />
    </div>
  </div>
</template>

<script>
import ProductImageComponent from "@/components/ProductImageComponent.vue";
import ProductDetailComponent from "@/components/ProductDetailComponent.vue";

export default {
  name: "ProductView",
  components: {
    ProductImageComponent,
    ProductDetailComponent,
  },
  props: ["title"],
  computed: {
    promotionTitle() {
      return this.title || "Product Details";
    },
  },
};
</script>

<style scoped>
.product-detail-page {
  padding: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 20px;
}

.promotion-title {
  font-size: 2rem;
  color: #3bb77e;
  text-align: center;
  margin-bottom: 20px;
}

.product-container {
  display: flex;
  gap: 20px;
  justify-content: center;
  align-items: flex-start;
  width: 100%;
}
</style>
