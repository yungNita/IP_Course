<template>
  <div class="product-detail-container">
    <!-- Product Availability -->
    <span class="availability">{{ productAvailability }}</span>

    <!-- Product Title -->
    <h2 class="product-title">{{ productTitle }}</h2>

    <!-- Ratings -->
    <div class="rating">
      ⭐⭐⭐⭐⭐ <span>({{ productRating }})</span>
    </div>

    <!-- Pricing -->
    <div class="pricing">
      <span class="current-price">${{ currentPrice }}</span>
      <span class="old-price">${{ oldPrice }}</span>
    </div>

    <!-- Product Description -->
    <p class="description">{{ productDescription }}</p>

    <!-- Add to Cart -->
    <div class="cart-section">
      <input type="number" v-model="quantity" min="1" />
      <button class="add-to-cart">Add To Cart</button>
    </div>

    <!-- Vendor and SKU -->
    <div class="product-meta">
      <p>
        Vendor: <strong>{{ vendor }}</strong>
      </p>
      <p>
        SKU: <strong>{{ sku }}</strong>
      </p>
    </div>
  </div>
</template>

<script>
export default {
  name: "ProductDetailComponent",
  data() {
    return {
      productTitle: "Seeds of Change Organic Quinoa, Brown",
      productAvailability: "In Stock",
      productRating: 64,
      currentPrice: 38,
      oldPrice: 42,
      productDescription:
        "Lorem ipsum dolor sit amet consectetur adipiscing elit. Aliquam rem officia.",
      vendor: "NestMart",
      sku: "FWM15VKT",
      quantity: 1,
    };
  },
};
</script>

<style scoped>
.product-detail-container {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.availability {
  color: #3bb77e;
  font-weight: bold;
}

.product-title {
  font-size: 1.5rem;
  font-weight: bold;
}

.rating {
  font-size: 1rem;
  color: #f2b01e;
}

.pricing {
  display: flex;
  gap: 10px;
  align-items: center;
}

.current-price {
  color: #3bb77e;
  font-size: 1.5rem;
  font-weight: bold;
}

.old-price {
  text-decoration: line-through;
  color: gray;
}

.description {
  color: #777;
  line-height: 1.5;
}

.cart-section {
  display: flex;
  gap: 10px;
  align-items: center;
}

.cart-section input {
  width: 60px;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.add-to-cart {
  background-color: #3bb77e;
  color: white;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 5px;
  font-weight: bold;
}

.product-meta p {
  margin: 0;
  color: #555;
}
</style>
