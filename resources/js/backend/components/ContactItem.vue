<template>
<div class="col-auto">
    <table class="table table-responsive ">
        <thead>
            <tr>
                <th>Contact ID</th>
                <th>Customer Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>Time Submitted</th>
                <th>Inquiry Nature</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="contact in contacts" :key="contact.id">
                <td scope="row">{{contact.id}} </td>
                <td>{{contact.full_name}} </td>
                <td></td>
                <td>{{contact.email}}</td>
                <td>{{contact.phone_number}}</td>
                <td>{{contact.created_at}}</td>
                <td>{{contact.inquiry}}</td>
            </tr>
        </tbody>
    </table>
</div>
</template>

<script>
export default {
    name:'MenuItem',
    props:{
        contacts:{
            type:Array
        }
    },


}
</script>

<style>

</style>
