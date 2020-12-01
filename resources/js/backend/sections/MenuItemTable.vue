<template>
    <div class="m-3">
        <div class="card nos-card">
            <div class="card-header">
                <h3 class="card-title">Menu Items</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 col-sm-12 m-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price (KES)</th>
                                    <th>Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr  v-for="item in menuItems" :key="item.id" >
                                    <td>{{item.title}}</td>
                                    <td>{{ item.description }}</td>
                                    <td>{{ item.price }}</td>
                                    <td>{{ item.category }}</td>
                                    <td>
                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash-o" ></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <nav aria-label="Page navigation">
                  <ul class="pagination">
                    <li class="page-item" :class="this.pagination.prev_page_url?'':'disabled' ">
                      <button class="page-link btn" href="#" aria-label="Previous" @click.prevent="navPrev">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </button>
                    </li>
                    <li class="page-item" :class="this.pagination.next_page_url?'':'disabled' " >
                      <button class="page-link btn" href="#" aria-label="Next" @click.prevent="navNext">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                      </button>
                    </li>
                  </ul>
                </nav>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:'MenuItemTable',
    data(){
        return{
            menuLink:'/api/menu',
            categories:[],
            menuItems:[],
            pagination:{}
        }
    },
    methods:{
        async getCategories(){
            try {
                const res = await axios.get('/api/categories')
                this.categories = res.data

            } catch (err) {
                console.log(err)
            }
        },
        async getMenu(){
            try {
                const res = await axios.get(this.menuLink)
                this.menuItems = res.data.data
                console.log(res.data)
                this.pagination = res.data
            } catch (err) {
                console.log(err)
            }
        },
        navPrev(){
            this.menuLink = this.pagination.prev_page_url
            Fire.$emit('navigated')
        },
        navNext(){
            this.menuLink = this.pagination.next_page_url
            Fire.$emit('navigated')
        }
    },
    created(){
        this.getCategories()
        this.getMenu()
        Fire.$on('navigated', ()=>{
            this.getMenu()
        })
        Bus.$on('AfterCreated',()=>{
            this.getMenu()
        })
    }


}
</script>

<style>

</style>
