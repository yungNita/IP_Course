<template>
    <button :style="{ background: buttonColor }" class="shopButton">Shop Now →</button>
</template>

<script>
export default {
    name: "Button_Component" ,
    props: {
        buttonColor: String,
    },
    // methods: {
    //     shopNow(){
    //         alert("Shop Now!!")
    //     },
    // },
    
};
</script>

<style scoped>
.shopButton {
    padding: 8px 16px;
    font-size: 12px;
    border-radius: 4px;
    cursor: pointer;
    border: none;
    margin-bottom: 10px;
    color: white;
}

.shopButton:hover{
    color: black;
}

.shopButton:active{
    color: rgb(225, 243, 62);
}
</style>