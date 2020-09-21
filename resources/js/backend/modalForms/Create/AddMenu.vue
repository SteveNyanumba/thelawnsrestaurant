
<template>
  <div>
      <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addMenuitem">
    Add new item to Menu
  </button>

  <!-- Modal -->
  <div class="modal fade" id="addMenuitem" tabindex="-1" role="dialog" aria-labelledby="newMenuItem" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content nos-modal bg-dark">
                  <div class="modal-header">
                          <h5 class="modal-title">Add New Menu Item</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                      </div>
              <div class="modal-body">
                  <div class="container-fluid">
                      <form action="POST" @submit.prevent="AddMenu" id="form">
                          <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter your Food title" aria-describedby="title" v-model="title">
                            <small id="title" class="text-muted">This is the title of your food item</small>
                          </div>
                          <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" v-model="description"></textarea>
                            </div>
                          <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number"
                              class="form-control" name="price" id="price" aria-describedby="price" placeholder="Enter your Price" v-model="price">
                              <small id="price" class="form-text text-muted">Please enter the correct price according to the menu</small>
                          </div>
                          <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" name="category" id="category" v-model="category">
                                  <option :value="category.category" v-for="category in categories" :key="category.id" >{{ category.category }}</option>
                              </select>
                              </div>
                          <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" name="image" id="image" placeholder="Select your image" aria-describedby="image" @change="changeImage">
                            <small id="image" class="form-text text-muted">Must be .jpg or .jpeg file format</small>
                            </div>
                      </form>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" @click.prevent="newMenu">Add</button>
              </div>
          </div>
      </div>
  </div>
  </div>
</template>

<script>
export default {
    data(){
        return{
            categories:[],
            title:'',
            description:'',
            image:'',
            category:'',
            price:'',
        }
    },
    methods:{
        async loadCategories(){
            try {
                const loader = await axios.get('/api/categories')
                this.categories = loader.data
            } catch (error) {
                console.log(error)
            }
        },
        changeImage(e){
            this.image = e.target.files[0]
        },

        async newMenu(){

            try {
                let data = new FormData()
                const {title, description, category, price, image} = this._data

                data.append('title', title)
                data.append('description', description)
                data.append('image', image)
                data.append('category', category)
                data.append('price', price)

                // console.log(this._data)

                const res = await axios.post('/api/menu', data)
                $('#addMenuitem').modal('hide')
                $('#form')[0].reset()
                Toast.fire({
                    icon:'success',
                    title:res.data
                })
                Fire.$emit('AfterCreated')
            } catch (err) {
                console.log(err)
            }


        }

    },
    created(){
        this.loadCategories()
        // Fire.$on('AfterCreated', ()=>{
        //     this.$forceUpdate()
        // })

    },

}
</script>

<style>

</style>
