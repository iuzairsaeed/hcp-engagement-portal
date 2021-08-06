@extends('layouts.app')

@section('content')

    

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">


            <div class="container-fluid pr-sm-0 pr-sm-4 pl-sm-4 pl-1 pb-2">

                <!-- Recent Activities -->
                <div class="w-100 pt-3 d-flex flex-wrap">
                 

                        <div class="w-100 d-flex flex-wrap">
                            <h6 class="font-gothambook text-darkgray mb-1 p-1 col-sm-12">My Recent Activities </h6>
                        </div>
                

                    <div class="carousel-wrap pl-sm-0 col-sm-11">
                        <div class="owl-carousel activity-carousel">
                                    <div class="item">
                                        <div class="media p-1 bg-white"
                                             style="border-radius: 7px 7px;box-shadow: -1px 1px 10px -2px #9fa5a7;">
                                            <img
                                                src="{{asset('images/Asset39.png') }}"
                                                class="mr-3 rounded" style="width:105px;">
                                            <div class="media-body m-auto">
                                                <h6 class="text-black font-gothambook fontsize13px"
                                                    style="line-height: 1.3">Lorem Ipsum Text Post</h6>
                                                <p
                                                   class="fontsize13px text-orange mb-0 font-gothamlight"> Leave a
                                                    Comment </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="media p-1 bg-white"
                                             style="border-radius: 7px 7px;box-shadow: -1px 1px 10px -2px #9fa5a7;">
                                            <img
                                                src="{{asset('images/Asset40.png') }}"
                                                class="mr-3 rounded" style="width:105px;">
                                            <div class="media-body m-auto">
                                                <h6 class="text-black font-gothambook fontsize13px"
                                                    style="line-height: 1.3">Lorem Ipsum Text Post</h6>
                                                <p
                                                   class="fontsize13px text-orange mb-0 font-gothamlight"> Leave a
                                                    Comment </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="media p-1 bg-white"
                                             style="border-radius: 7px 7px;box-shadow: -1px 1px 10px -2px #9fa5a7;">
                                            <img
                                                src="{{asset('images/Asset39.png') }}"
                                                class="mr-3 rounded" style="width:105px;">
                                            <div class="media-body m-auto">
                                                <h6 class="text-black font-gothambook fontsize13px"
                                                    style="line-height: 1.3">Lorem Ipsum Text Post</h6>
                                                <p
                                                   class="fontsize13px text-orange mb-0 font-gothamlight"> Leave a
                                                    Comment </p>
                                            </div>
                                        </div>
                                    </div>

                        </div>
                    </div>
                
                        <div class="col-sm-1 p-0 m-auto">
                            <a href="{{url('/recentactivity') }}"
                               class="text-uppercase bg-orange btn border-radius25px text-white border border-orange font-gothammedium fontsize10px">View
                                All</a>
                        </div>
            
                <!-- Recent Activities -->


                    <!-- Upcoming Events -->
                    <div class="w-100 mt-4 d-flex flex-wrap">
                        <h6 class="mb-1 p-1 font-gothambook text-darkgray col-sm-12">Upcoming Events </h6>
                        <div class="carousel-wrap col-sm-11 pl-sm-1">
                            <div class="owl-carousel upcoming-carousel">
                              
                                 
                               <div class="item">
                                      <div class="bg-white border-radius15px p-2">
                                         <div class="w-100 h-img"><img src="{{asset('images/Asset47.png') }}"
                                                        class="img-fluid"></div>
                                                <div class="card-body text-left pt-2 pb-0 pl-1 pr-1">
                                                    <ul class="list-unstyled d-inline-block p-0 d-flex flex-wrap w-100 mb-3 border-bottom border-gray">
                                                        <li class="col-sm-4 col-4 p-0"><h6
                                                                class="text-darkgray fontsize9px font-gothambook"><i
                                                                    class="fa fa-calendar-check fontsize11px mr-1 float-left"></i>
                                                                Monday</li>
                                                        <li class="col-sm-5 col-5 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i
                                                                    class="fa fa-calendar mr-1 fontsize11px float-left"></i>
                                                                <span class="float-left text-left w-fix"> 12-02-2021 </span>
                                                            </h6></li>
                                                        <li class="col-sm-3 col-3 p-0 text-center"><h6
                                                                class="text-darkgray fontsize9px font-gothambook"><i
                                                                    class="fa fa-clock mr-1 fontsize12px float-left"></i>
                                                                <span class="float-left text-left w-fix"> 12:00 PM </span>
                                                            </h6></li>
                                                    </ul>

                                                    <h6 class="text-black font-gothambook mt-1 mb-2 fontsize12px"> Title goes here  </h6>

                                                </div>
                                            </div>
                                        </div>

                            </div>
                        </div>


                        <div class="col-sm-1 p-0 m-auto">
                            <a href="#"
                               class="text-uppercase bg-orange btn border-radius25px text-white border border-orange font-gothammedium fontsize10px">View
                                All</a>
                        </div>
                        <!-- Upcoming Events -->

                        <!-- Content Row -->
                        <div class="w-100 mt-4 d-flex flex-wrap">
                            <h6 class="mb-1 p-1 font-gothambook text-darkgray col-sm-12"> Recent Posts</h6>
                            <div class="carousel-wrap col-sm-11 pl-sm-1">
                                <div class="owl-carousel recent-carousel">
                           
                                            <div class="item">
                                                <div class="bg-white border-radius15px p-2">
                                                    <div class="w-100 h-img"><img src="{{asset('images/Asset46.png') }}" class="mb-2 rounded w-100"></div>
                                                    <p class="text-black font-gothambook fontsize12px mb-2 pl-2 pr-2">
                                                    Title goes here </p>
                                                    <p
                                                        class="text-orange font-gothambook fontsize12px pl-2 pr-2 mb-2 d-block">View
                                                        Comment</p></div>
                                            </div>
                        
                                </div>
                            </div>


                            <div class="col-sm-1 p-0 m-auto">
                                <a href="{{url('/recentpost') }}" class="text-uppercase bg-orange btn border-radius25px text-white border border-orange font-gothammedium fontsize10px">View
                                    All</a>
                            </div>

                            <!-- Content Row -->


                        </div>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

  
@stop

@section('scripts')

@stop

