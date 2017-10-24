<template>
    <div>
        <my-header></my-header>
        <router-view :pat={base_url} ></router-view>
    </div>
</template>
<script>
export default{
    data () {
        return {
            base_url: 'public/'
        }
    }
}
</script>