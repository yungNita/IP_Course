<template>
  <div>
    <HeaderComponent />
    <div class="layout">
      <MenuComponent />

      <router-view class="page_wrap" />
    </div>
    <FooterComponent />
  </div>
</template>

<script>
import HeaderComponent from "@/components/headerComponent.vue";
import FooterComponent from "@/components/footerComponent.vue";
import MenuComponent from "@/components/MenuComponent.vue";
export default {
  components: {
    HeaderComponent,
    FooterComponent,
    MenuComponent,
  },
};
</script>

<style scoped>
.layout {
  display: flex;
  height: 60vh;
  border-width: 0 1px 0 1px;
  border-color: black;
  border-style: solid;
}
.page_wrap {
  display: flex;
  flex-direction: column;
  margin-top: 3.7rem;
}
</style>
