@extends('layouts.app')

@section('content')



 <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">



                  <div class="container-fluid pr-sm-0 pr-sm-1 pl-sm-1 pl-1 pb-4">
                    <div class="row pl-4 pr-4 pt-4">

                        <div class="w-100 d-flex flex-wrap pl-sm-2">
                                <ul class="nav nav-tabs custom-navtabs border-0 col-sm-8 col-12">
                                  <li><a data-toggle="tab" href="#webinar" class="active font-gothambook"> Webinar </a></li>
                                  <li><a class="font-gothambook" data-toggle="tab" href="#virtual"> Virtual Events </a></li>
                                  <li><a class="font-gothambook" data-toggle="tab" href="#trainings"> Trainings </a></li>
                                </ul>
                        </div>
                            <!-- Webinar Activities -->
                            <div class="tab-content w-100">
                                <div class="tab-pane fade in active show" id="webinar">


                                         <div class="w-100 pt-3 d-flex flex-wrap">
                                    
                                            <div class="col-sm-3 pl-2 pr-2 mt-3">
                                                <div class="w-100 p-2 card border-0 border-radius10px">
                                                       <div class="w-100 h-img"> <img class="card-img-top w-100 mb-1 rounded" src="{{asset('images/Asset46.png') }}"></div>
                                                        <div class="card-body text-left pt-2 pb-0 pl-1 pr-1">
                                                              <p  class="bg-white col-auto border-0 float-right p-0 rounded-circle text-center mt-minus mr-2 text-orange" style="width: 28px;height: 28px;"><i class="fa fa-heart align-middle"></i></p>

                                                            <ul class="list-unstyled d-inline-block p-0 d-flex flex-wrap w-100 mb-3 border-bottom border-gray">
                                                            <li class="col-sm-4 col-4 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-calendar-check fontsize12px mr-1"></i> Monday </li>
                                                             <li class="col-sm-5 col-5 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-calendar mr-1 fontsize12px float-left"></i>
                                                             <span class="float-left text-left w-fix"> 24 June, 2021 </span></h6></li>
                                                            <li class="col-sm-3 col-3 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-clock mr-1 fontsize12px float-left"></i><span class="float-left text-left w-fix"> 12:30PM </span> </h6></li>
                                                         </ul>

                                                          <h6 class="card-title text-black font-gothambook mt-1 mb-2 fontsize12px"> Title goes Here </h6>

                                                        </div>
                                                    </div>
                                                
                                            </div>
                                        
                                          
                                  </div>
                              </div>
                                  <!-- first tab -->


                          <!-- second tab -->
                          <div class="tab-pane fade" id="virtual">

                                 <div class="w-100 pt-3 d-flex flex-wrap">
                             
                                            <div class="col-sm-3 pl-2 pr-2 mt-3">
                                               
                                                <div class="w-100 p-2 card border-0 border-radius10px">
                                                      <div class="w-100 h-img">  <img class="card-img-top w-100 mb-1 rounded" src="{{asset('images/Asset44.png') }}"></div>
                                                        <div class="card-body text-left pt-2 pb-0 pl-1 pr-1">
                                                              <p  class="bg-white col-auto border-0 float-right p-0 rounded-circle text-center mt-minus mr-2 text-orange" style="width: 28px;height: 28px;"><i class="fa fa-heart-o align-middle"></i></p>

                                                            <ul class="list-unstyled d-inline-block p-0 d-flex flex-wrap w-100 mb-3 border-bottom border-gray">
                                                            <li class="col-sm-4 col-4 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-calendar-check fontsize12px mr-1"></i> Monday </li>
                                                             <li class="col-sm-5 col-5 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-calendar mr-1 fontsize12px float-left"></i>
                                                             <span class="float-left text-left w-fix"> 24 June, 2021 </span></h6></li>
                                                            <li class="col-sm-3 col-3 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-clock mr-1 fontsize12px float-left"></i><span class="float-left text-left w-fix"> 12:30PM </span> </h6></li>
                                                         </ul>

                                                          <h6 class="card-title text-black font-gothambook mt-1 mb-2 fontsize12px"> Title goes here </h6>

                                                        </div>
                                                    </div>
                                              
                                            </div>
                                 
                          </div>
                      </div>
                          <!-- second tab -->



                           <!-- Third tab -->
                          <div class="tab-pane fade" id="trainings">

                                 <div class="w-100 pt-3 d-flex flex-wrap">
                                   
                                            <div class="col-sm-3 pl-2 pr-2 mt-3">
                                               
                                                <div class="w-100 p-2 card border-0 border-radius10px">
                                                        <div class="w-100 h-img"><img class="card-img-top w-100 mb-1 rounded" src="{{asset('images/Asset43.png') }}"></div>
                                                        <div class="card-body text-left pt-2 pb-0 pl-1 pr-1">
                                                              <p  class="bg-white col-auto border-0 float-right p-0 rounded-circle text-center mt-minus mr-2 text-orange" style="width: 28px;height: 28px;"><i class="fa fa-heart-o align-middle"></i></p>
                                                              
                                                            <ul class="list-unstyled d-inline-block p-0 d-flex flex-wrap w-100 mb-3 border-bottom border-gray">
                                                            <li class="col-sm-4 col-4 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-calendar-check fontsize12px mr-1"></i> Monday </li>
                                                             <li class="col-sm-5 col-5 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-calendar mr-1 fontsize12px float-left"></i>
                                                             <span class="float-left text-left w-fix"> 24 June, 2021 </span></h6></li>
                                                            <li class="col-sm-3 col-3 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-clock mr-1 fontsize12px float-left"></i><span class="float-left text-left w-fix"> 12:30PM </span> </h6></li>
                                                         </ul>

                                                          <h6 class="card-title text-black font-gothambook mt-1 mb-2 fontsize12px"> Title Goes here </h6>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                       
                          </div>
                      </div>
                          <!-- third tab -->
                        <!-- Webinar Activities -->


                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



        </div>
    </div>





@endsection