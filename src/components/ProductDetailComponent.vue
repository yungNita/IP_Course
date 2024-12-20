<template>
  <div class="product-detail-container">
    <span class="availability">{{ productAvailability }}</span>

    <h2 class="product-title">{{ productTitle }}</h2>

    <div class="rating">
      ⭐⭐⭐⭐⭐ <span>({{ productRating }})</span>
    </div>

    <div class="pricing">
      <span class="current-price">${{ currentPrice }}</span>
      <span class="old-price">${{ oldPrice }}</span>
    </div>

    <p class="description">{{ productDescription }}</p>

    <div class="cart-section">
      <input type="number" v-model="quantity" min="1" />
      <button class="add-to-cart">Add To Cart</button>
    </div>

    <div class="product-meta">
      <p>
        Vendor: <strong style="margin-left: 16px">{{ vendor }}</strong>
      </p>
      <p>
        SKU: <strong style="margin-left: 16px">{{ sku }}</strong>
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
        "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi? Officia doloremque facere quia. Voluptatum, accusantium!",
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
  font-family: "Quicksand", sans-serif;
}

.availability {
  color: #3bb77e;
  font-weight: bold;
  font-family: "Quicksand", sans-serif;
}

.product-title {
  font-size: 1.5rem;
  font-weight: bold;
  font-family: "Quicksand", sans-serif;
}

.rating {
  font-size: 1rem;
  color: #f2b01e;
}

.pricing {
  display: flex;
  gap: 10px;
  align-items: center;
  font-family: "Quicksand", sans-serif;
}

.current-price {
  color: #3bb77e;
  font-size: 72px;
  font-weight: bold;
  font-family: "Quicksand", sans-serif;
  margin: 20px 25px 20px 0;
}

.old-price {
  text-decoration: line-through;
  color: gray;
  font-size: 32px;
  font-family: "Quicksand", sans-serif;

  margin: 25px 0;
}

.description {
  color: #777;
  line-height: 1.5;
  font-family: "Quicksand", sans-serif;
  width: 650.23px;
  margin: 20px 0;
}

.cart-section {
  display: flex;
  gap: 10px;
  align-items: center;
  margin: 20px 0;
}

.cart-section input {
  width: 60px;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin: 20px 0;
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
