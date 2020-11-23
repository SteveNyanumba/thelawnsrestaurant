<template>
<div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#addSlider">
  <i class="fa fa-plus" aria-hidden="true"></i>
  Add new Slider
</button>

<!-- Modal -->
<div class="modal fade" id="addSlider" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-dark nos-modal">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <form id="SliderForm" @submit.prevent="createSlider">
            <div class="modal-body">
                <div class="container">
                        <div class="form-group">
                          <label for="heading">Heading</label>
                          <input v-model="slider.heading" type="text" class="form-control" name="heading" id="heading" aria-describedby="heading" placeholder="Enter your Heading Text">
                          <small id="heading" class="form-text text-muted">The heading text on the slider</small>
                        </div>
                        <div class="form-group">
                          <label for="short">Short</label>
                          <input v-model="slider.short" type="text" class="form-control" name="short" id="short" aria-describedby="short" placeholder="Enter Your Short Text">
                          <small id="short" class="form-text text-muted">The short text on the slider</small>
                        </div>
                        <div class="form-group">
                          <label for="category">Category</label>
                          <select v-model="slider.category" class="form-control" name="category" id="category">
                            <option selected disabled>Select your category</option>
                            <option v-for="category in categories" :key="category.id" :value="category.category">{{category.category}}</option>
                          </select>
                          <small id="category" class="form-text text-muted">Choose the context of which you want your slider to be under</small>
                        </div>
                        <div class="form-group">
                          <label for="image">Image</label>
                          <input @change="setFile" type="file"
                            class="form-control" name="image" id="image" aria-describedby="image" placeholder="choose your slider image">
                          <small id="image" class="form-text text-muted">Where you select the image to represent your slider</small>
                        </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>


</div>
</template>

<script>
export default {
    data(){
        return {
            categories:[],
            slider:{
                heading:'',
                short:'',
                image:'',
                category:''
            }
        }
    },
    methods:{
        setFile(e){
            this.slider.image = e.target.files[0]
        },
        async getCategories(){
            try {
                const res = await axios.get('/api/slidercategories')
                this.categories = res.data
            } catch (err) {
                console.log(err)
            }
        },
        async createSlider(){
            const sliderForm = new FormData()
            const config = {
                headers: {'content-type': 'multipart/form-data'}
            }
            sliderForm.append('heading',this.slider.heading)
            sliderForm.append('short',this.slider.short)
            sliderForm.append('image',this.slider.image)
            sliderForm.append('category',this.slider.category)

            try {
                const res = await axios.post('/api/slider', sliderForm, config)
                if (res.status ===201) {
                    Toast.fire({
                        icon:'success',
                        title: res.data
                    })
                    Bus.$emit('createdSlider')
                    $('#SliderForm').reset()
                    $('#addSlider').modal('hide')

                }else{
                    Toast.fire({
                        icon:'warning',
                        title:res.data
                    })
                }
            } catch (err) {
                console.log(err);
            }
        }
    },
    created(){
        this.getCategories()
        Bus.$on('createdSliderCategory', ()=>{
            this.getCategories()
        })
    }

}
</script>

<style>

</style>
