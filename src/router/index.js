import { createRouter, createWebHistory } from "vue-router";
import HomeView from "@/views/HomeView.vue";
import Page1 from "@/views/Page1View.vue";
import Page2 from "@/views/Page2View.vue";
import Page3 from "@/views/Page3View.vue";

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: "/",
      component: HomeView,
      redirect: "/page/1",
      children: [
        {
          path: "page/1",
          component: Page1,
          name: "Page1",

        },
        {
          path: "page/2",
          component: Page2,
          name: "Page2",
          
        },
        {
          path: "page/3",
          component: Page3,
          name: "Page3",
          
        },
      ],
    },
  ],
});

export default router;
