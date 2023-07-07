<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <Navi :product1="product1" :navList="navList"/>
  <!-- <nav class="nav">
    <ul>
      <li><a href="#">홈</a></li>
      <li><a href="#">상품</a></li>
      <li><a href="#">기타</a></li>
    </ul>
  </nav> -->
  <ProductList 
  @openModal="modalFlg = true; productNum=i"
  :product="product" v-for="(product,i) in products" :key="i"
  />

  <Modal 
  @closeModal="modalFlg = false"
  @plus="products[productNum].count++; sum = products[productNum].price * products[productNum].count"
  @minus="products[productNum].count--; sum = products[productNum].price * products[productNum].count"
  :sum="sum"
  :products="products" 
  :modalFlg="modalFlg" 
  :productNum="productNum"
  />
  <!-- 모달 -->
    <!-- <div class="bg_black" v-if="modalFlg">
      <div class="bg_white">
        <img :src="products[productNum].img" alt="">
        <h4>상품명</h4>
        <p>설명</p>
        <p>{{sum}}</p>
        <button @click="plus(productNum)">+</button>
        <button @click="minus(productNum)">-</button>
        <span>{{products[productNum].count}}</span>
        <button @click="close()">닫기</button>
    </div>
  </div> -->

  <!-- <div @click="flg(i)" v-for="(item,i) in products" :key="i">
    <img :src="item.img" alt="">
    <h4>{{ item["name"] }}</h4>
    <p>{{ item["price"] }}</p>
    <p>{{ item.count }}</p>
  </div> -->
</template>

<script>
import data from './assets/js/data.js';

import Navi from './components/Navi.vue';

import ProductList from './components/ProductList.vue';

import Modal from './components/Modal.vue';

export default {
  name: 'App',
  data(){
    return{
      navList:['홈','상품','기타'],
      count:0,
      productNum:0,
      sum:0,
      products: data,
      modalFlg:false,
      product1:'양말',
      price1:'3800',
      product2:'바지',
      price2:'5500',
      styleR:'color:red',
    }
  },
  methods: { // 함수 설정 영역
    plus(i){
      this.products[i].count++;
      this.sum +=  this.products[i].price * this.productNum; 
    },
    minus(i){
      this.products[i].count--;
      this.sum -=  this.products[i].price * this.productNum; 
    },
    flg(i){
      this.modalFlg = true;
      this.productNum = i;
    },
    close(){
      this.modalFlg = false;
      
    },
  },
  components:{
      Navi,ProductList,Modal
    }
}
</script>

<style>
@import url('./assets/css/app.css');
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

</style>
