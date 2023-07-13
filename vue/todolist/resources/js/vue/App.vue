<template>
    <div class="container">
        <Header/>
        <Content/>
    </div>
</template>
<script>
import Header from './Header.vue'
import Content from './Content.vue'
export default {
    name:'App',
    created(){
    this.$store.dispatch('getDataList');
  },
    components:{
        Header,Content
    }
}
</script>
<style>
    .container{
        max-width: 1200px;
        margin: 0 auto;
    }
</style>