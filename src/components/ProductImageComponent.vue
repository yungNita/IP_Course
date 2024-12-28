<template>
  <div class="product-image-container">
    <div class="main-image">
      <img :src="mainImage" alt="Product Image" />
    </div>

    <div class="thumbnails">
      <button @click="prevImage" class="nav-button">&lt;</button>
      <div
        v-for="(image, index) in images"
        :key="index"
        @click="setMainImage(image)"
        class="thumbnail-wrapper"
        :class="{ active: image === mainImage }">
        <img :src="image" alt="Thumbnail" />
      </div>
      <button @click="nextImage" class="nav-button">&gt;</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "ProductImageComponent",
  data() {
    return {
      images: [
        "/src/assets/images/mango.jpg",
        "/src/assets/images/corn.png",
        "/src/assets/images/passion.png",
        "/src/assets/images/chili.png",
        "/src/assets/images/almond.png",
        "/src/assets/images/ham.png",
        "/src/assets/images/fish.png",
      ],
      mainImage: "/src/assets/images/mango.jpg",
      currentIndex: 0,
    };
  },
  methods: {
    setMainImage(image) {
      this.mainImage = image;
      this.currentIndex = this.images.indexOf(image);
    },
    prevImage() {
      this.currentIndex =
        this.currentIndex === 0
          ? this.images.length - 1
          : this.currentIndex - 1;
      this.mainImage = this.images[this.currentIndex];
    },
    nextImage() {
      this.currentIndex = (this.currentIndex + 1) % this.images.length;
      this.mainImage = this.images[this.currentIndex];
    },
  },
};
</script>

<style scoped>
.product-image-container {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.main-image img {
  width: 866px;
  height: 696px;
  border-radius: 10px;
}

.thumbnails {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-top: 15px;
}

.thumbnail-wrapper img {
  width: 117px;
  height: 117px;
  object-fit: cover;
  border-radius: 5px;
  cursor: pointer;
}

.nav-button {
  background-color: #3bb77e;
  color: white;
  border: none;
  padding: 5px 20px;
  cursor: pointer;
  border-radius: 5px;
  width: 54px;
  height: 40px;
}
</style>
