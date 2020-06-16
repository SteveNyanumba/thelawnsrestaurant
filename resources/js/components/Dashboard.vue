<template>
    <div class="container">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-white">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">The Lawns Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card nos-card">
                    <div class="card-header text-center"><h3>Current Images</h3></div>

                    <div class="card-body">
                        <div class="row justify-content-center">
                            <!-- For the Logo -->
                            <div class="col-md-4 col-6">
                                <h5 class="text-white">Logo</h5>
                            </div>
                            <div class="col-md-4 col-6">
                                <img src="/images/logo.png" alt="logo" class="img-size-50 img-circle mr-3">
                            </div>
                            <div class="col-md-4 col-12  ">
                                <button class="btn btn-warning btn-md" data-toggle="modal" data-target="#logoChange">Change</button>
                            </div>
                            <!-- *End Logo -->

                            <div class="col-12 pt-3"></div>


                            <!-- For the Website Background Images #1 -->
                            <div class="col-md-4 col-6">
                                <h5 class="text-white">Background One</h5>
                            </div>
                            <div class="col-md-4 col-6">
                                <img src="/images/bg_1.jpg" alt="BG1" class="img-size-50 img-circle mr-3">
                            </div>
                            <div class="col-md-4 col-12  ">
                                <button class="btn btn-warning btn-md" data-toggle="modal" data-target="#logoChange">Change</button>
                            </div>
                            <!-- *End -->

                            <div class="col-12 pt-3"></div>


                            <!-- For the Website Background Images #2-->
                            <div class="col-md-4 col-6">
                                <h5 class="text-white">Background Two</h5>
                            </div>
                            <div class="col-md-4 col-6">
                                <img src="/images/bg_2.jpg" alt="BG2" class="img-size-50 img-circle mr-3">
                            </div>
                            <div class="col-md-4 col-12  ">
                                <button class="btn btn-warning btn-md" data-toggle="modal" data-target="#logoChange">Change</button>
                            </div>
                            <!-- *End -->

                            <div class="col-12 pt-3"></div>


                            <!-- For the Website Background Images #3-->
                            <div class="col-md-4 col-6">
                                <h5 class="text-white">Background Three</h5>
                            </div>
                            <div class="col-md-4 col-6">
                                <img src="/images/bg_3.jpg" alt="BG3" class="img-size-50 img-circle mr-3">
                            </div>
                            <div class="col-md-4 col-12  ">
                                <button class="btn btn-warning btn-md" data-toggle="modal" data-target="#logoChange">Change</button>
                            </div>
                            <!-- *End -->

                            <div class="col-12 pt-3"></div>

                            <!-- For the Website Background Images #4-->
                            <div class="col-md-4 col-6">
                                <h5 class="text-white">Background Four</h5>
                            </div>
                            <div class="col-md-4 col-6">
                                <img src="/images/bg_4.jpg" alt="BG4" class="img-size-50 img-circle mr-3">
                            </div>
                            <div class="col-md-4 col-12  ">
                                <button class="btn btn-warning btn-md" data-toggle="modal" data-target="#logoChange">Change</button>
                            </div>
                            <!-- *End -->

                            <div class="col-12 pt-3"></div>

                            <!-- For the Website Testimonial Image-->
                            <div class="col-md-4 col-6">
                                <h5 class="text-white">Testimonial</h5>
                            </div>
                            <div class="col-md-4 col-6">
                                <img src="/images/testimonial.jpg" alt="testimonial" class="img-size-50 img-circle mr-3">
                            </div>
                            <div class="col-md-4 col-12  ">
                                <button class="btn btn-warning btn-md" data-toggle="modal" data-target="#logoChange">Change</button>
                            </div>
                            <!-- *End -->

                            <div class="col-12 pt-3"></div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Forms -->

<!-- logo -->
            <div class="modal fade" id="logoChange" tabindex="-1" role="dialog" aria-labelledby="logoChange" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="POST" enctype="multipart/form-data" @submit="formSubmitLogo">
                        <div class="modal-content bg-dark nos-modal">
                            <div class="modal-header">
                                <h5 class="modal-title text-center" id="exampleModalLongTitle">Change Your Logo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" v-on:change="onImageChangeLogo" placeholder="Choose an Image">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit"  class="btn btn-warning"  >Save changes</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('You are Now In the Dashboard')
        },
        data(){
            return {
                logo:'',
                bg_1:'',
                bg_2:'',
                bg_3:'',
                bg_4:'',
                testimonial:'',
                success:''
            };
        },
        methods:{
            //For the Logo Upload
            onImageChangeLogo(e){
                console.log(e.target.files[0])
                this.logo = e.target.files[0]
            },
            formSubmitLogo(e){
                e.preventDefault()

                const config = {
                    headers: {'content-type': 'multipart/form-data'}
                }
                let formData = new FormData()
                formData.append('logo', this.logo)

                axios.post('/api/logo',formData, config)
                .then(function(res){
                    this.success = res.data.success
                })
                .catch(function(e){
                    console.log(e)
                })
            }

        }
    }
</script>
