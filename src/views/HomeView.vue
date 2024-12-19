<template>
  <div>
    <HeaderComponent />
    <div class="layout">
      <main>
        <router-view />
      </main>
    </div>
    <FooterComponent />
  </div>
</template>

<script>
import HeaderComponent from "@/components/headerComponent.vue";
import FooterComponent from "@/components/footerComponent.vue";

export default {
  components: {
    HeaderComponent,
    FooterComponent,
  },
};
</script>

<style>
.layout {
  display: flex;
  flex-grow: 1;
  height: 100%;
}
main {
  flex-grow: 1;
  padding: 20px;
}
</style>
