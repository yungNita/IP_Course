<template>
  <div class="categories-view">
    <!-- Category Box -->
    <div
      v-if="selectedCategory"
      class="category-box"
      :style="{ backgroundColor: selectedCategory.color }">
      <h1 class="category-title">{{ selectedCategory.name }}</h1>
      <p class="breadcrumbs">Home > Categories > {{ selectedCategory.name }}</p>
    </div>

    <!-- Error Message -->
    <div v-else class="error-message">
      <h2>Category not found</h2>
      <p>
        Please check the URL or return to the
        <router-link to="/">home page</router-link>.
      </p>
    </div>
  </div>
</template>

<script>
import { useProductStore } from "@/store/products";

export default {
  name: "CategoriesView",
  data() {
    return {
      selectedCategory: null,
    };
  },
  created() {
    this.loadCategoryData();
  },
  watch: {
    $route: "loadCategoryData", // Watch for route changes
  },
  methods: {
    loadCategoryData() {
      const store = useProductStore();
      const categoryId = Number(this.$route.params.categoriesId); // Ensure `categoriesId` is treated as a number

      // Ensure categories are loaded before finding the category
      if (!store.categories || store.categories.length === 0) {
        // console.error("Categories data is not loaded yet.");
        return;
      }

      // Find the category by ID
      const category = store.categories.find((cat) => cat.id === categoryId);

      if (category) {
        this.selectedCategory = category;
      } else {
        this.selectedCategory = null;
        console.error("Category not found:", categoryId);
      }
    },
  },
};
</script>

<style scoped>
.categories-view {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  height: 100vh;
  background-color: #f9f9f9;
  padding: 20px;
}

.category-box {
  width: 80%;
  height: auto;
  border-radius: 12px;
  padding: 40px;
  color: #333;
  display: flex;
  flex-direction: column;
  justify-content: center;
  background-image: url("/path-to-background-image.jpg"); /* Optional */
  background-repeat: no-repeat;
  background-size: cover;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.category-title {
  font-size: 36px;
  font-weight: bold;
  color: #3c3c3c;
  margin-bottom: 10px;
}

.breadcrumbs {
  font-size: 18px;
  font-weight: 500;
  color: #555;
  opacity: 0.9;
}

.error-message {
  text-align: center;
  color: #ff0000;
}

.error-message h2 {
  font-size: 24px;
  margin-bottom: 10px;
}

.error-message p {
  font-size: 16px;
}
</style>
