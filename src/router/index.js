import { createRouter, createWebHistory } from "vue-router";
import HomeView from "@/views/HomeView.vue";
import PageView from "@/views/PageView.vue";
import SectionView from "@/views/SectionView.vue";

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: "/",
      component: HomeView,
      redirect: "/page/1",
      children: [
        {
          path: "page/:pageNumber",
          component: PageView,
          name: "page",
          children: [
            {
              path: "section/:sectionNumber",
              component: SectionView,
              name: "section",
            }
          ]
        },
      ],
    },
  ],
});

export default router;
