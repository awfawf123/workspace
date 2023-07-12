<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <h1>App.vue</h1>
  <p>{{ data2.name }}</p>
  <button @click="data2.name = '김김김'">김김김</button>

  <PostComponent :propsTest="1"/>
  <!-- <router-link to="/">홈으로</router-link><br>
  <router-link to="/post">Post</router-link>
  <router-view>
    
  </router-view> -->

</template>

<script>
import PostComponent from './components/PostComponent.vue';
import {ref,reactive} from 'vue';

export default {
  name: 'App',
  setup(){
    let data = ref({name:'홍길동', age:20});
    let test = 'bbb';

    let data2 = reactive({
      name:'철수',
      age:5
    })

    return {test,data,data2};
  },
  components:{
    PostComponent
  }
 
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
