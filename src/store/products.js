import { defineStore } from "pinia";
import axios from "axios";

export const useProductStore = defineStore("product", {
  state: () => ({
    groups: [],
    promotions: [],
    categories: [],
    products: [],
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
    async fetchGroups() {
      try {
        const response = await axios.get("http://localhost:3000/api/groups");
        this.groups = response.data;
        console.log("Hehehe", this.$dispose.categories);
      } catch (error) {
        console.error("Error fetching groups:", error);
      }
    },
    async fetchCategories() {
      try {
        const response = await axios.get("http://localhost:3000/api/categories");
        this.categories = response.data;
        console.log("HI", this.$dispose.categories);
      } catch (error) {
        console.error("Error fetching categories:", error);
      }
    },
    async fetchPromotions() {
      try {
        const response = await axios.get("http://localhost:3000/api/promotions");
        this.promotions = response.data;
        console.log("Helllo", this.$dispose.promotions);
      } catch (error) {
        console.error("Error fetching promotions:", error);
      }
    },
    async fetchProducts() {
      try {
        const response = await axios.get("http://localhost:3000/api/products");
        this.products = response.data;
        console.log("Yayyy", this.products);  
      } catch (error) {
        console.error("Error fetching products:", error);
      }
    }
    
  },
});
