<template>
    <div class="Promotion1" :style="{ background: background }">
      <div>
        <h2>{{ title }}</h2>
      </div>
      <img :src="image" alt="Promotion1 image" class="Promotion1Image" />
      <Button_Component class="overlay-button" :buttonColor="buttonColor" />
    </div>
  </template>
  
  <script>
  import Button_Component from './Button_Component.vue'; 
 
  
  export default {
    name: "Promotion1_Component",
    
    props: {
      title: {
        type: String,
      },
      image: {
        type: String,
      },
      background: {
        type: String,
      },
      buttonColor: {
        type: String,
      }
    },
  
    components: {
      Button_Component  
    },

  };
  </script>
  
  <style scoped>
  .Promotion1 {
    border-radius: 10px;
    padding-left: 40px;
    width: 512px;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;  
  }
  
  h2 {
    font-size: 24px;
    color: #253D4E;
    margin-bottom: 30px;
    line-height: 1.4;
  }
  
  .Promotion1Image {
    width: 204px;
    height: 252px;
    object-fit: cover;
    border-radius: 10px;
  }
  
  .overlay-button {
    position: absolute;
    bottom: 48px;
    left: 38px;
  }
  </style>
  