<template>
<li class="px-3 item nos-list-item">
    <div class="product-img">
        <img :src="`/images/sliders/${image}`" class="img-size-50">
    </div>
    <div class="product-info">
        <p href="javascript:void(0)" class="product-title">{{heading}}
            <span class="float-right">{{short}}</span>
        </p>
        <span class="badge badge-secondary float-left">
            {{ category }}
        </span>
    </div>
</li>
</template>

<script>
export default {
    name:'SliderItem',
    props:{
        heading:{
            type:String,
        },
        short:{
            type:String
        },
        image:{
            type:String
        },
        category:{
            type:String
        }
    }

}
</script>

<style>

</style>
