<template>
  <div class="searchBox">
    <!-- Left Section: All Categories with dropdown -->
    <div class="categories">
      <p class="categories-text">All Categories</p>
      <i class="arrow-down"></i>
    </div>

    <!-- Divider Line -->
    <div class="divider"></div>

    <!-- Input Field -->
    <input type="text" class="search-input" placeholder="Search for items" />

    <!-- Search Icon -->
    <div class="search-icon">
      <img
        src="@/assets/logo/search.png"
        alt="Melon Logo"
        class="search-icon" />
    </div>
  </div>
</template>

<script>
export default {
  name: "SearchBoxComponent",
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");

body {
  font-family: "Quicksand", sans-serif;
}
.searchBox {
  display: flex;
  align-items: center;
  border: 2px solid #bce3c9;
  border-radius: 5px;
  width: 700px;
  height: 50px;
  padding: 0 20px;
  background-color: white;
}

/* All Categories Section */
.categories {
  display: flex;
  align-items: center;
  color: #253d4e;
  font-size: 12px;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 600;
  cursor: pointer;
}

.arrow-down {
  margin-left: 5px;
  border: solid #7e7e7e;
  border-width: 0 1px 1px 0;
  display: inline-block;
  padding: 3px;
  transform: rotate(45deg);
}

/* Divider Line */
.divider {
  height: 20px;
  width: 1px;
  background-color: #ccc;
  margin: 0 10px;
}

/* Input Field */
.search-input {
  flex-grow: 1;
  border: none;
  outline: none;
  font-size: 12px;
  color: #7e7e7e;
  font-family: Arial, Helvetica, sans-serif;
}

/* Search Icon Section */
.search-icon {
  color: #7e7e7e;
  width: 20px;
  height: 20px;
  cursor: pointer;
}

.magnifier {
  font-style: normal; /* for icon-like style */
}
</style>
