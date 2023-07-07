<template>
    <div class="bg_black" v-if="modalFlg">
      <div class="bg_white">
        <img :src="products[productNum].img" alt="">
        <h4>{{products[productNum].name}}</h4>
        <p>{{products[productNum].content}}</p>
        <p>{{sum}}</p>
        <button @click="$emit('plus')">+</button>
        <button @click="$emit('minus')">-</button>
        <span>{{products[productNum].count}}</span>
        <button @click="$emit('closeModal')">닫기</button>
    </div>
  </div>
</template>
<script>
export default {
    name:'Modal',
    props:{
        modalFlg:Boolean,
        products:Object,
        productNum:Number,
        sum:Number
    }
}
</script>
<style lang="">
    
</style>