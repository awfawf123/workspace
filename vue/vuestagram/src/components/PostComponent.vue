<template lang="">
    <form>
    <div class="post" v-for="(item, i) in $store.state.boardData" :key="i">
        <div class="post-img" :class="item.filter">
            <img :src="item.img" alt="">
        </div>
        <div class="post-content">
            <p>{{item.likes}}</p>
            <p><strong>{{item.name}}</strong><br>{{item.content}}</p>
            <p>{{item.created_at}}</p>
        </div>
    </div>
</form>
</template>
<script>
export default {
    name:'PostComponent',
}
</script>
<style>
    .post-img{
        text-align: left;
    }
    .post-img img{
        width: 50%;
    }
</style>