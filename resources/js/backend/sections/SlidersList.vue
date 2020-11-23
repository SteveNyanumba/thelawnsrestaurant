<template>

<div class="container">
    <div class="card nos-card">
        <div class="card-header">
            <h3 class="card-title">Recently Added Menu Items </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
              <!-- /.card-header -->
        <div class="card-body p-0">
            <ul class="products-list product-list-in-card pl-2 pr-2" >
                <slider-item v-for="slider in sliders" :key="slider.id"
                    :heading="slider.heading"
                    :short="slider.short"
                    :image="slider.image"
                    :category="slider.category" />
            </ul>
        </div>
        <div class="card-footer">
            <div class="row m-auto">
                <div class="col-md-6"><add-slider/></div>
                <div class="col-md-6"><add-slider-category/></div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data(){
        return {
            sliders:[]
        }
    },
    methods:{
        async getSliders(){
            const res = await axios.get('/api/slider')
            if (res.status === 200){
                this.sliders = res.data
            }

        }
    },
    mounted(){
        this.getSliders()
        Bus.$on('createdSlider',()=>{
            this.getSliders()
        })
    }
}
</script>

<style>

</style>
