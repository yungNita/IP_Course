<template>
  <div class="product-detail-page">
    <h1 class="promotion-title">{{ promotionTitle }}</h1>

    <div class="product-container">
      <!-- Display the product image passed via route params -->
      <img :src="productImage" alt="Product Image" class="productImage" />
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
  computed: {
    // Access the productId and image from route params
    promotionTitle() {
      return this.$route.params.productId || "Product Details";
    },
    productImage() {
      return this.$route.params.productImage; // Get the image passed in the route
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

.productImage {
  width: 200px;
  height: 200px;
  object-fit: cover;
}
</style>
