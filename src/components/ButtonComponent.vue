<template>
  <button
    :style="{ background: buttonColor }"
    class="shopButton"
    @click="shopnow()">
    Shop Now →
  </button>
</template>

<script>
export default {
  name: "ButtonComponent",
  props: {
    buttonColor: String,
    promotion: Object,
    shopnow: Function,
  },

  methods: {
    // eslint-disable-next-line vue/no-dupe-keys
    shopnow() {
      alert("Let's shoping!!");
    },
  },
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");
body {
  font-family: "Quicksand", sans-serif;
}
.shopButton {
  padding: 8px 16px;
  font-size: 12px;
  border-radius: 4px;
  cursor: pointer;
  border: none;
  margin-bottom: 10px;
  color: white;
}

.shopButton:hover {
  color: black;
}

.shopButton:active {
  color: rgb(243, 178, 38);
}
</style>
