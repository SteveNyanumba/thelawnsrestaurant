<template>
<li class="px-3 item nos-list-item">
    <div class="product-img">
        <img :src="image" class="img-size-50">
    </div>
    <div class="product-info">
        <p href="javascript:void(0)" class="product-title">{{title}}
            <span class="badge badge-warning float-right">KES {{price}}</span>
        </p>
        <span class="product-description">
            {{description}}
        </span>
        <span class="badge badge-secondary float-left">
            {{ category }}
        </span>
    </div>
</li>
</template>

<script>
export default {
    name:'MenuItem',
    props:{
        title:{
            type:String,
        },
        price:{
            title:Number
        },
        image:{
            type:String
        },
        category:{
            type:String
        },
        description:{
            type:String
        }
    }

}
</script>

<style>

</style>
