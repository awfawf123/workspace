<template>
    <div @click="$emit('openModal')">
        <img :src="product.img" alt="">
        <h4>{{product.name}}</h4>
        <p>{{product.price}}</p>
        <p>{{product.count}}</p>
    </div>
</template>
<script>
export default {
    name:'ProductList',
    props:{
        product: Object,
    }
    
}
</script>
<style lang="">
    
</style>