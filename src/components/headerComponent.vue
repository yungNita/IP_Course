<template>
  <header>
    <nav>
      <router-link
        v-for="page in pages"
        :key="page"
        :to="`/page/${page}`"
        :class="{ active: isActive(page) }">
        Page {{ page }}
      </router-link>
    </nav>
  </header>
</template>

<script>
export default {
  data() {
    return {
      pages: [1, 2, 3],
    };
  },
  methods: {
    isActive(page) {
      return this.$route.path.includes(`/page/${page}`);
    },
  },
};
</script>

<style>
.active {
  color: red;
  font-weight: bold;
}
</style>
