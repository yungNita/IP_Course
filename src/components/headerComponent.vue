<template>
  <div class="Header_wrap">
    <p>Header</p>
    <header class="H">
      <nav>
        <router-link
          class="Pages"
          v-for="page in pages"
          :key="page"
          :to="`/page/${page}`"
          :class="{ active: isActive(page) }">
          Page {{ page }}
        </router-link>
      </nav>
    </header>
  </div>
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
.Header_wrap {
  display: flex;
  justify-content: space-between;
  align-items: center;
  border: 1px solid black;
  padding: 10px 18px;
}
.active {
  color: red;
  font-weight: 600;
}
p {
  font-size: 20px;
  font-weight: bold;
  font-family: Arial, Helvetica, sans-serif;
}
.Pages {
  margin: 0 15px;
}

.H {
  display: flex;
  justify-content: flex-end;
  font-family: Arial, Helvetica, sans-serif;
}
</style>
