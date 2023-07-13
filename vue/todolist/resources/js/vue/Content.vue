<template>
    <div class="content">
            <div class="cont-inner" v-for="(item,i) in $store.state.dataList" :key="i">
                <input type="checkbox">
                <input type="hidden" id="getId" :value="i" >
                <p>{{ item.content }}</p>
                <button @click="$store.dispatch('deleteContent')">삭제</button>
            </div>
    </div>
</template>
<script>

export default {
    name:'Content',

}
</script>
<style>
    .content{

    }
    .cont-inner{
        background-color: beige;
        margin: 15px 0;
        display: flex;
        justify-content:space-between;
    }
    .cont-inner p{
        width: 90%;
    }
    
</style>