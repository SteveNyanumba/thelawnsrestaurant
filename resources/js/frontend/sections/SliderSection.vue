<template>
  <section class="home-slider owl-carousel" v-if="sliders.length > 0">
    <div v-for="slider in sliders" :key="slider.id" class="slider-item" :style="{backgroundImage:`url(${slider.image}`}">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-8 col-sm-12 text-center nos-animate">
              <span class="subheading">Welcome</span>
            <h1 class="mb-4">{{slider.heading}}</h1>
            <p class="mb-4 mb-md-5">{{slider.short}}</p>
            <p>
                <router-link to="/menu" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</router-link>
                <router-link to="/menu" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</router-link>
            </p>
          </div>

        </div>
      </div>
    </div>
</section>
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
            try {
                const res = await axios.get('/api/slider')
                this.sliders = res.data
            } catch (err) {
                console.log(err)
            }
        }
    },
    mounted(){
        this.getSliders()
    }

}
</script>

<style>

</style>
