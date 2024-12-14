<template>
    <div class="searchBox">
        <div class="firstItem">
            <p class="text1">All Categories</p>
            <p></p>
            <p>|</p>
            <p class="text4">Search for items</p>
        </div>
        <div class="lastItem">{{ u }}</div>
    </div>
</template>

<script>

export default {
    name: "SearchBoxComponent",
    props: {

    }
}
</script>

<style scoped>
.searchBox{
    display: flex;
    justify-content: space-between;
    border: 2px solid #BCE3C9;
    border-radius: 5px;
    width: 700px;
    height: 50px;
}

.firstItem{
    display: flex;
}

.text1{
    color: #253D4E;
    font-size: 12px;
    line-height: 20px;
    font-family: Arial, Helvetica, sans-serif;
}

i{
    width: 11px;
    height: 6px;
    color: #7E7E7E;
}

.text4{
    line-height: 18px;
    font-size: 12px;
    font-weight: 400px;
    
}
</style>
