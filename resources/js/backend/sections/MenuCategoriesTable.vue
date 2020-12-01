<template>
    <div class="m-2">
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
                                    <th>Number</th>
                                    <th>Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr  v-for="item in categories" :key="item.id" >
                                    <td>{{item.id}}</td>
                                    <td>{{ item.category }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:'MenuItemTable',
    data(){
        return{
            categories:[],
        }
    },
    methods:{
        async getCategories(){
            try {
                const res = await axios.get('/api/menu-categories')
                this.categories = res.data

            } catch (err) {
                console.log(err)
            }
        }
    },
    created(){
        this.getCategories()
        Bus.$on('createdMenuCategory',()=>{
            this.getCategories()
        })
    }


}
</script>

<style>

</style>
