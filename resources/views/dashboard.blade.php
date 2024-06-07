@include('header')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <section class="content">
                    <div class="row">
                        <div class="col-12">
                            <div class="box bg-gradient-primary overflow-hidden pull-up">
                                <div class="box-body pr-0 pl-lg-50 pl-10 py-0" style="padding-right:0px !important">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-8">
                                            <h1 class="font-size-40 text-white"> Post Admin!</h1>
                                        </div>
                                        <div class="col-12 col-lg-4"><img src="{{asset('Content/images/custom-15.svg')}}" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxxl-3 col-lg-3 col-12">
                            <div class="box  pull-up">
                                <div class="box-body">
                                    <div class="d-flex align-items-start">
                                        <div class="pl-5">
                                            <img src="{{asset('Content/images/icons8-student-256.png')}}" class="w-80 mr-40" alt="" />
                                        </div>

                                        
                                        <div style="padding-left: 15px !important">
                                            <h2 class="my-0 font-weight-700"></h2>
                                            <p class="text-fade mb-0">Total Student</p>
                                            <p class="font-size-12 mb-0 text-success">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxxl-3 col-lg-3 col-12">
                            <div class="box  pull-up">
                                <div class="box-body">
                                    <div class="d-flex align-items-start">
                                        <div>
                                            <img src="{{asset('Content/images/icons8-businessman-256.png')}}" class="w-80 mr-40" alt="" />
                                        </div>
                                       
                                        <div style="padding-left: 15px !important">
                                            <h2 class="my-0 font-weight-700"></h2>
                                            <p class="text-fade mb-0">Total Trainer</p>
                                            <p class="font-size-12 mb-0 text-success"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxxl-3 col-lg-3 col-12">
                            <div class="box  pull-up">
                                <div class="box-body">
                                    <div class="d-flex align-items-start">
                                        <div>
                                            <img src="{{asset('Content/images/icons8-certificate-256.png')}}" class="w-80 mr-40" alt="" />
                                        </div>
                                        
                                        <div style="padding-left: 15px !important">
                                            <h2 class="my-0 font-weight-700"></h2>
                                            <p class="text-fade mb-0">Total Courses</p>
                                            <p class="font-size-10 mb-0 text-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxxl-3 col-lg-3 col-12">
                            <div class="box  pull-up">
                                <div class="box-body">
                                    <div class="d-flex align-items-start">
                                        <div>
                                            <img src="{{asset('Content/images/icons8-money-256.png')}}" class="w-80 mr-40" alt="" />
                                        </div>
                                        <div style="padding-left:15px !important">
                                           
                                            <h2 class="my-0 font-weight-700"> (SAR)</h2>
                                            <p class="text-fade mb-0"></p>
                                            <p class="font-size-12 mb-0 text-primary">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- /.content-wrapper -->

@include('footer')
