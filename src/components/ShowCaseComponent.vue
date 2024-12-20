<template>
  <div class="showcase-banner">
    <div class="showcase-content">
      <h1 class="showcase-title">
        Don’t miss amazing <br />
        grocery deals
      </h1>
      <p class="showcase-subtitle">Sign up for the daily newsletter</p>

      <div class="subscribe-form">
        <div class="email-input">
          <i class="icon-envelope"></i>
          <input type="email" placeholder="Your email address" />
        </div>
        <button class="subscribe-button">Subscribe</button>
      </div>
    </div>

    <div class="showcase-image">
      <img src="@/assets/images/banner1.png" alt="Grocery Bag" class="images" />
    </div>
  </div>
</template>

<script>
export default {
  name: "ShowCaseComponent",
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");

body {
  font-family: "Quicksand", sans-serif;
}
.showcase-banner {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 1584px;
  height: 538px;
  background: linear-gradient(to right, #f4f4f4, rgba(253, 192, 64, 0.2));
  border-radius: 10px;
  padding: 50px 0 0 80px;
  box-sizing: border-box;
  font-family: "Quicksand", sans-serif;
}
.images {
  width: 895px;
  height: 597px;
}

/* Left Section */
.showcase-content {
  max-width: 50%;
}

.showcase-title {
  font-size: 48px;
  color: #253d4e;
  line-height: 1.2;
  margin: 0 0 15px 0;
}

.showcase-subtitle {
  font-size: 18px;
  color: #7e7e7e;
  margin: 0 0 30px 0;
}

/* Form Styling */
.subscribe-form {
  display: flex;
  align-items: center;
}

.email-input {
  display: flex;
  align-items: center;
  background-color: #ffffff;
  border-radius: 30px;
  padding: 10px 20px;
  border: 1px solid #e0e0e0;
  width: 300px;
}

.email-input i {
  color: #7e7e7e;
  margin-right: 10px;
}

.email-input input {
  border: none;
  outline: none;
  font-size: 14px;
  color: #253d4e;
  width: 100%;
}

.subscribe-button {
  margin-left: 10px;
  padding: 12px 30px;
  background-color: #3bb77e;
  color: #ffffff;
  border: none;
  border-radius: 30px;
  font-size: 16px;
  cursor: pointer;
}

.subscribe-button:hover {
  background-color: #35a069;
}

/* Right Section */
.showcase-image img {
  max-width: 100%;
  height: auto;
  border-radius: 10px;
}
</style>
