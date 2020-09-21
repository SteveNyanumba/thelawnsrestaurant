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
                <MenuItem v-for="menu in menuList"
                    :key="menu.id" :image="menu.image" :description="menu.description" :title="menu.title"
                    :category="menu.category" :price="menu.price" >
                </MenuItem>
            </ul>
        </div>
              <!-- /.card-body -->
        <div class="card-footer text-center">
            <nav aria-label="Page navigation">
              <ul class="pagination pagination-lg">
                <li class="page-item" @click.prevent="navPrev">
                  <button class="page-link" href="#" aria-label="Previous" >
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </button>
                </li>
                <li class="page-item" @click.prevent="navNext">
                  <button class="page-link" href="#" aria-label="Next" >
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </button>
                </li>
              </ul>
            </nav>
        </div>
              <!-- /.card-footer -->
    </div>
</div>
</template>

<script>
export default {
    data(){
        return{
            link:'/api/menu',
            menuList:[],
            pagination:{}
        }
    },
    methods:{
        async loadMenu(){
            try {
                const res = await axios.get(this.link)
                this.menuList = res.data.data
                this.pagination = res.data
                console.log(res.data);

            } catch (err) {
                console.log(err)
            }
        },

        async navPrev(){
            this.link = this.pagination.prev_page_url
            Fire.$emit('navigated')
        },
        async navNext(){
            this.link = this.pagination.next_page_url
            Fire.$emit('navigated')
        }


    },
    created(){
        this.loadMenu()
        Fire.$on('navigated', ()=>{
            this.loadMenu()
        })
    }


}
</script>

<style>

</style>
