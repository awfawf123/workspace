<template>
    <div class="header">
        <h1>To Do List</h1>
        <div class="text-area">
            <input type="text" placeholder="할일을 적어주세요." name="content" id="content" v-model="content">
            <button @click="$store.dispatch('writeContent')">등록</button>
        </div>
    </div>
</template>
<script>
export default {
    name:'Header',
    data(){
        return{
            content:''
        }
    }
}
</script>
<style>
    .header{
        text-align: center;
        background-color: beige;
    }
    .text-area{
        width: 400px;
        height: 5vh;
        margin: 0 auto;
    }
</style>