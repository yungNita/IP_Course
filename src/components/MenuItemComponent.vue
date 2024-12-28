<template>
  <div class="menu-container">
    <div class="firstRow">
      <div class="logo-section">
        <img src="@/assets/logo/storeLogo.png" alt="Melon Logo" class="logo" />
        <div class="logo-text">
          <p class="logo-title">Melon</p>
          <p class="logo-subtitle">MART & GROCERY</p>
        </div>
      </div>

      <div class="accountSection">
        <div class="account">
          <img src="@/assets/logo/user.png" class="imgLogo" />
          <p class="titleLogo">Account</p>
        </div>

        <div class="compare">
          <img src="@/assets/logo/compare.png" class="imgLogo" />
          <p class="titleLogo">Compare</p>
        </div>
        <div class="wishlist">
          <img src="@/assets/logo/wishlist.png" class="imgLogo" />
          <p class="titleLogo">Wishlist</p>
        </div>
        <div class="cart">
          <img src="@/assets/logo/cart.png" class="imgLogo" />
          <p class="titleLogo">Card</p>
        </div>
      </div>
    </div>

    <div class="secondRow">
      <div class="row2">
        <div class="browse-categories">
          <button class="browse-btn">
            <i class="icon-grid"></i>
            Browse All Categories
            <i class="icon-down"></i>
          </button>
        </div>

        <ul class="menu-items">
          <li v-for="(item, index) in menuItems" :key="index" class="menu-item">
            <span v-if="item.icon" class="menu-icon" v-html="item.icon"></span>
            {{ item.name }}
            <i v-if="item.hasDropdown" class="icon-down"></i>
          </li>
        </ul>
      </div>

      <div class="support-section">
        <img src="@/assets/logo/headphone.png" class="headphone" />
        <div>
          <p class="contact-number">099 777 888</p>
          <p class="support-text">24/7 Support Center</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "MenuItemComponent",
  data() {
    return {
      menuItems: [
        { name: "Hot Deals", icon: "🔥", hasDropdown: false },
        { name: "Home", hasDropdown: false },
        { name: "Food", hasDropdown: true },
        { name: "Vegetables", hasDropdown: true },
        { name: "Drink", hasDropdown: false },
        { name: "Cookies", hasDropdown: false },
        { name: "Meat & Seafood", hasDropdown: true },
        { name: "Bakery", hasDropdown: false },
      ],
    };
  },
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");

body {
  font-family: "Quicksand", sans-serif;
}
.menu-container {
  align-items: center;
  justify-content: space-between;
  padding: 10px 20px;
  font-family: "Quicksand", sans-serif;
  background-color: #ffffff;
  width: 1570px;
}

/* Logo Section */
.logo-section {
  display: flex;
  align-items: center;
}

.logo {
  width: 80px;
  height: 60px;
  margin-right: 10px;
}

.logo-title {
  font-size: 40px;
  font-weight: 700;
  font-weight: bold;
  color: #3bb77e;
  margin: 0;
}

.logo-subtitle {
  font-size: 11px;
  font-weight: 600;
  color: #253d4e;
  margin: 0;
}

/* Browse Categories Button */
.browse-categories {
  margin-right: 50px;
}

.browse-btn {
  display: flex;
  align-items: center;
  padding: 8px 15px;
  background-color: #3bb77e;
  color: #ffffff;
  border: none;
  border-radius: 5px;
  font-size: 14px;
  cursor: pointer;
}

.icon-grid {
  margin-right: 5px;
  font-size: 16px;
}

.icon-down {
  margin-left: 5px;
  border: solid #ffffff;
  border-width: 0 1px 1px 0;
  display: inline-block;
  padding: 3px;
  transform: rotate(45deg);
}

/* Menu Items */
.menu-items {
  display: flex;
  list-style: none;
  padding: 0;
  margin: 0;
}

.menu-item {
  margin-right: 20px;
  font-size: 14px;
  color: #253d4e;
  cursor: pointer;
  display: flex;
  align-items: center;
}

.menu-item:hover {
  color: #3bb77e;
}

.menu-icon {
  margin-right: 5px;
  font-size: 14px;
}

/* Support Section */
.support-section {
  text-align: right;
  display: flex;
  align-items: center;
}

.contact-number {
  font-size: 24px;
  color: #3bb77e;
  font-weight: bold;
  margin: 0;
}

.support-text {
  font-size: 12px;
  color: #7e7e7e;
  margin: 0;
}

.accountSection {
  display: flex;
}

.account,
.compare,
.wishlist,
.cart {
  display: flex;
  margin: 0 10px;

  align-items: center;
}
.imgLogo {
  width: 26px;
  height: 26px;
  margin-right: 5px;
}
.headphone {
  width: 36px;
  height: 36px;
  margin-right: 10px;
}
.titleLogo {
  font-size: 16px;
}
.firstRow {
  display: flex;
  justify-content: space-between;
}
.secondRow {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.row2 {
  display: flex;
}
</style>
