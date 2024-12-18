import HomeView from '@/views/HomeView.vue'
import { createRouter, createWebHistory } from 'vue-router'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "home",
      component: HomeView
    },
    {
      path: "/categories/:categoriesId",
      name: "category",
      component: () => import("../views/CategoriesView.vue")
    },
    {
      path: "/products/:productId",
      name: "product",
      component: () => import("../views/ProductView.vue")
    },

  ],
})

export default router
