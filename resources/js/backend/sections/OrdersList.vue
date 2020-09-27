<template>
<div>
    <div class="card nos-card">
        <div class="card-header">
        <h3 class="card-title">Recently Ordered</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="row">
                <div class="col-md-10 col-sm-12 m-auto">
                    <OrderItem />
                </div>
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer text-center">
        <a href="javascript:void(0)" class="uppercase">View All Products</a>
        </div>
        <!-- /.card-footer -->
</div>
</div>
</template>

<script>
export default {

}
</script>

<style>

</style>
