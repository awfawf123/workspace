<template lang="">
    <div>
        <nav class="nav">
            <ul>
                <li v-for="(item,i) in navList" :key="i"><a href="#">{{navList[i]}}</a></li>
            </ul>
        </nav>
    </div>
</template>
<script>
export default {
    name:'Navi',
    props:{
        product1: String,
        navList: Array
    }
}
</script>
<style lang="">
    
</style>