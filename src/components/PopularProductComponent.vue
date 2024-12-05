<template>
    <div class="productList">
        <div class="header">
            <div class="ProductStatus" :style="{background : color}">{{ promotionAsPercentage }}</div>
            <img :src="image" alt="product Image" class="productImage" />
        </div>
        <div class="content">
            <div class="type">Hodo Foods</div>
            <div class="productTitle">{{ name }}</div>
            
            <div class="Rate">
                <span class="star-icon">★★★★<spen style="color:gray">★</spen></span>
                <div class="rating">({{ rating }}.0)</div>
            </div>
            
            <div class="size">{{ size }}</div>
        </div>
        <div class="footer">
            <div class="prices">
                <div class="price">$2.51</div>
                <div class="realPrice">${{ price }}.00</div>
            </div>
            
            <button class="addButton" @click="addToCart">Add +</button>
            
        </div>
    </div>
</template>

<script>
export default {
    name: "PopularProductComponent",
    props: {
        color: String,
        promotionAsPercentage: Number,
        image: String,
        name: String,
        rating: String,
        size: String,
        price: String,
        instock: Number,
    },
    methods: {
        addToCart() {
            console.log(`${this.name} added to the cart.`);
           
        }
    }
};
</script>

<style scoped>
.productList{
    width: 298px;
    height: 402px;
    border: solid 1px #BCE3C9;
    border-radius: 10px;
    background: white;
    /* box-shadow: 20px 20px 40px 0 rgba(24, 24, 24, 0.7); */
}
.ProductStatus{
    width: 52px;
    height: 32px;
    border-radius: 30px 30px 0 0;
    padding: 10px 15px;
    gap: 10px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 400;
    font-size: 12px;
    line-height: 12px;
    color: white;
}

.productImage{
    width: 210px;
    height: 168px;  
    position: relative;
    left: 15%;
    margin-bottom: 10px;
}
.type{
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 400;
    font-size: 12px;
    color: #7E7E7E;
    margin-top: 20px;
    margin-left: 20px;
}
.size{
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 400;
    font-size: 12px;
    color: #7E7E7E;
    margin-left: 20px;
}
.Rate{
    display: flex;
}
.rating{
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 400;
    font-size: 12px;
    color: #7E7E7E;
    margin-left: 59px;
    margin-top: 2px;
}
.star-icon {
  color: #FDC040; 
  font-size: 12px; 
  display: inline-block;
  width: 12px;
  height: 12px;
  text-align: center;
  margin-left: 20px;
}
.productTitle{
    font-family:Arial, Helvetica, sans-serif;
    font-weight: 700;
    font-size: 14px;
    color: #7E7E7E;
    width: 261px;
    height: 49px;
    margin-left: 20px;
}
.footer{
    padding-left: 20px;
    margin-top: 8px;
    display: flex;
    justify-content: space-between;
}
.prices{
    display: flex;
    align-items: center;
}
.price{
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 400;
    font-size: 20px;
    line-height: 32px;
    color: #3BB77E;
    margin-right: 10px;
}
.realPrice{
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 700;
    font-size: 12px;
    line-height: 20px;
    color: #7E7E7E;
    text-decoration: line-through;

}
.addButton{
    width: 67px;
    height: 29px;
    border: 1px solid #3BB77E;
    border-radius: 4px;
    padding: 12px;
    color: #3BB77E;
    display: flex;
    align-items: center ;
    margin-right: 20px;
    background: #DEF9EC;
    cursor: pointer;
}
</style>
