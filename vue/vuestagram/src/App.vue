<template>
  <!-- header -->
<div class="header">
  <ul>
    <li v-if="$store.state.tabFlg != 0" class="header-button header-button-left" @click="$store.commit('changeTabFlg', 0); $store.commit('clearState')">취소</li>
    <li>
      <img class="logo" alt="Vue logo" src="./assets/logo.png">
    </li>
    <li v-if="$store.state.tabFlg == 1" class="header-button header-button-right" @click="$store.commit('changeTabFlg', 2)">다음</li>
    <li v-if="$store.state.tabFlg == 2" class="header-button header-button-right" @click="$store.dispatch('writeContent')">작성</li>
  </ul>
</div>

<ContainerComponent/>
  <button v-if="$store.state.flg != 1 && $store.state.tabFlg == 0" @click="$store.dispatch('getMoreList')">더보기</button>

<!-- footer -->
<div class="footer">
  <div class="footer-button-store">
    <label for="file" class="label-store">+</label>
    <input @change="updateImg" accept="image/*" type="file" id="file" class="input-file">
  </div>
</div>
</template>

<script>
import ContainerComponent from './components/ContainerComponent.vue';

export default {
  name: 'App',
  created(){
    this.$store.dispatch('getMainList');
  },
  methods:{
    updateImg(e){
      let file = e.target.files;
      console.log(file);
      let imgUrl = URL.createObjectURL(file[0]);
      console.log(imgUrl);
      this.$store.commit('changeImgUrl',imgUrl);
      this.$store.commit('changeTabFlg',1);
      this.$store.commit('changePostImg',file[0]);
      console.log(file[0]);
      e.target.value = '';
    }
  },
  components: {
    ContainerComponent
  }
}
</script>

<style>
@import url(./assets/css/common.css);
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
