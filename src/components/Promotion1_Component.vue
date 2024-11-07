<template>
    <div class="Promotion1" :style="{ background: background }">
        <div>
            <h2>{{ title }}</h2>
            <button @click="shopNow(Promotion)">Shop Now →</button>
        </div>
        <img :src="image" alt="Promotion1 image" class="Promotion1Image" />
    </div>
</template>

<script>
export default {
    name: "Promotion1_Component",
    props: {
        title: String,
        image: String,
        background: String,
    },
    methods: {
        shopNow(Promotion){
            alert("Shop Now!!" +Promotion.title);
        },
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
</style>
