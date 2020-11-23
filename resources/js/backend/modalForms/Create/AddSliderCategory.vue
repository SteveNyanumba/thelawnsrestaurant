<template>
<div>
<!-- Button trigger modal -->
  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addSliderCategory">
      <i class="fa fa-plus" aria-hidden="true"></i>
    Add Slider Category
  </button>

  <!-- Modal -->
  <div class="modal fade" id="addSliderCategory" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content bg-dark nos-modal">
                  <div class="modal-header">
                          <h5 class="modal-title">Add Slider Category</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                      </div>
              <div class="modal-body">
                  <div class="container-fluid">
                      <form id="sliderCategoryForm" @submit.prevent="createSliderCategory">
                          <div class="form-group">
                            <label for="category">Category</label>
                            <input v-model="category" type="text" name="category" id="category" class="form-control" placeholder="category" aria-describedby="category">
                            <small id="category" class="text-muted">Add A Category For your Sliders</small>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>


</template>

<script>
export default {
    data(){
        return {
            category:''
        }
    },
    methods:{
        async createSliderCategory(){
            const form = new FormData()
            const config = {
                headers: {'content-type': 'multipart/form-data'}
            }
            try {
                form.append('category', this.category)
                const res = await axios.post('/api/slidercategories', form, config)
                if (res.status === 200) {
                    Toast.fire({
                        icon:'success',
                        title:res.data
                    })
                    $('#SliderCategoryForm').reset()
                    $('#addSliderCategory').modal('hide')

                    Bus.$emit('createdSliderCategory')
                }

            } catch (err) {
                Toast.fire({
                    icon:'error',
                    title:res.data
                })
            }
        }
    }

}
</script>

<style>

</style>
