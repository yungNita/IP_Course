<template>
  <div class="menu-wrap">
    <div class="menuTitle">Menu</div>
    <nav>
      <router-link
        class="section_wrap"
        v-for="section in sections"
        :key="section"
        :to="`/page/${currentPage}/section/${section}`"
        :class="{ uio: isActive(section) }"
        >Section {{ section }}</router-link
      >
    </nav>
  </div>
</template>

<script>
export default {
  data() {
    return {
      sections: [1, 2, 3, 4],
    };
  },
  computed: {
    currentPage() {
      return this.$route.params.pageNumber || 1; //Default to page1 if it not defined
    },
  },
  methods: {
    isActive(section) {
      return this.$route.path.includes(`/section/${section}`);
    },
  },
};
</script>

<style scoped>
.menu-wrap {
  border-right: 1px solid black;
}
.menuTitle,
.section_wrap {
  display: flex;
  border-bottom: 1px solid black;
  justify-content: center;
  width: 12vw;
  height: 8vh;
  align-items: center;
  font-size: 19px;
  text-decoration: none;
  color: black;
}

.uio {
  border-color: #4c97ff;
  border-width: 0 1px 1px 0;
  border-style: solid;
  background: #dae8fc;
  color: black;
  text-decoration: none;
}

.section_wrap:hover {
  text-decoration: none;
}
</style>
