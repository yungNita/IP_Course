<template>
  <div class="pages">
    <p>Welcome to Page {{ pageNumber }}</p>
    <MessageBox class="MB" :currentPage="pageNumber" />
    <router-view />
  </div>
</template>

<script>
import MessageBox from "@/components/MessageBox.vue";

export default {
  name: "PageView",
  components: {
    MessageBox,
  },
  computed: {
    pageNumber() {
      return this.$route.params.pageNumber; // Dynamically fetch pageNumber from route
    },
  },
};
</script>

<style scoped>
.pages {
  display: flex;
  flex-direction: column;
  width: 100%;
  align-items: center;
  height: 100%;
  position: relative;
}
.MB {
  margin-top: 20px;
}

p {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 22px;
  margin-top: 10px;
}
</style>
