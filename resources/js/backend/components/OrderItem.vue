<template>
<div class="col-auto">
    <table class="table table-responsive ">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Ordered Items</th>
                <th>Total Price</th>
                <th>Delivery Address</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="order in Orders" :key="order.id">
                <td scope="row">{{order.id}} </td>
                <td>{{order.customer_name}} </td>
                <td></td>
                <td>{{order.price}}</td>
                <td>{{order.takeaway}}</td>
                <td>{{order.address}}</td>
                <td>{{order.status}}</td>
            </tr>
        </tbody>
    </table>
</div>
</template>

<script>
export default {
    name:'MenuItem',
    props:{
        Orders:{
            type:Array
        }
    }

}
</script>

<style>

</style>
