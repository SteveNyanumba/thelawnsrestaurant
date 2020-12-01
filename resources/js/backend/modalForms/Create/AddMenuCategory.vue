<template>
<div>
<!-- Button trigger modal -->
  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addMenuCategory">
      <i class="fa fa-plus" aria-hidden="true"></i>
    Add Menu Category
  </button>

  <!-- Modal -->
  <div class="modal fade" id="addMenuCategory" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content bg-dark nos-modal">
                  <div class="modal-header">
                          <h5 class="modal-title">Add Menu Category</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                      </div>
              <div class="modal-body">
                  <div class="container-fluid">
                      <form id="MenuCategoryForm" @submit.prevent="createMenuCategory">
                          <div class="form-group">
                            <label for="category">Category</label>
                            <input v-model="category" type="text" name="category" id="category" class="form-control" placeholder="category" aria-describedby="category">
                            <small id="category" class="text-muted">Add A Category For your Menus</small>
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
        async createMenuCategory(){
            const form = new FormData()
            const config = {
                headers: {'content-type': 'multipart/form-data'}
            }
            try {
                form.append('category', this.category)
                const res = await axios.post('/api/menu-categories', form, config)
                if (res.status === 201) {
                    Toast.fire({
                        icon:'success',
                        title:res.data
                    })
                    $('#MenuCategoryForm').trigger('reset')
                    $('#addMenuCategory').modal('hide')

                    Bus.$emit('createdMenuCategory')
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
