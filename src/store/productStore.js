import { defineStore } from "pinia";
import axios from "axios";

export const useProductStore = defineStore("product", {
  state: () => ({
    groups: [],
    promotions: [],
    categories: [],
    products: []
  }),
  getters: {
    getCategoriesByGroup: (state) => {
      return (groupName) => 
        state.categories.filter((category) => category.group === groupName);
    },
    getProductsByGroup: (state) => {
      return (groupName) => 
        state.products.filter((product) => product.group === groupName);
    },
    getProductsByCategory: (state) => {
      return (categoryId) => 
        state.products.filter((product) => product.categoryId === categoryId);
    },
    getPopularProducts: (state) => {
      return () => state.products.filter((product) => product.countSold > 10);
    }
  },
  actions: {
    async fetchCategories() {
      const { data } = await axios.get("http://localhost:3000/api/categories");
      this.categories = data;
    },
    async fetchPromotions() {
      const { data } = await axios.get("http://localhost:3000/api/promotions");
      this.promotions = data;
    },
    async fetchProducts() {
      const { data } = await axios.get("http://localhost:3000/api/products");
      this.products = data;
    }
  }
});
