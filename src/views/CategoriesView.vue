<template>
  <div class="categories-view">
    <div
      class="category-box"
      :style="{ backgroundColor: selectedCategory.color }"
      v-if="selectedCategory">
      <div class="category-title">
        {{ selectedCategory.name }}
      </div>

      <div class="breadcrumbs">
        Home > Categories > {{ selectedCategory.name }}
      </div>
    </div>
  </div>
</template>

<script>
import { mapState } from "pinia";
import { useProductStore } from "@/store/products";

export default {
  name: "CategoriesView",
  data() {
    return {
      selectedCategory: null, // Holds the clicked category details
    };
  },
  computed: {
    ...mapState(useProductStore, ["categories"]),
  },
  created() {
    this.loadCategoryData();
  },
  methods: {
    loadCategoryData() {
      // Fetch the category name from the route params
      const categoryName = this.$route.params.categoryName;

      // Find the category with the matching name
      const category = this.categories.find(
        (cat) => cat.name.toLowerCase() === categoryName.toLowerCase()
      );

      // Set the selected category
      if (category) {
        this.selectedCategory = category;
      } else {
        console.error("Category not found");
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
  height: 100vh;
  background-color: #f9f9f9;
}

.category-box {
  width: 1584px;
  height: 235px;
  border-radius: 12px;
  padding: 20px;
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: center;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.category-title {
  font-size: 28px;
  font-weight: bold;
  margin-bottom: 10px;
}

.breadcrumbs {
  font-size: 18px;
  opacity: 0.9;
}
</style>
