<template>
  <div class="section-wrap">
    <div class="dots">-----------------------------------------------</div>
    <div class="sectionLine">
      This is Section {{ sectionNumber }} of Page {{ pageNumber }}
    </div>

    <router-view />
  </div>
</template>

<script>
export default {
  name: "SectionView",

  computed: {
    sectionNumber() {
      return this.$route.params.sectionNumber;
    },
    pageNumber() {
      return this.$route.params.pageNumber;
    },
  },
};
</script>
<style scoped>
.section-wrap {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
  height: 100%;
}
.sectionLine {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}
.dots {
  font-weight: bold;
  font-size: 25px;
  margin-bottom: 20px;
}
</style>
