@extends('layouts.app')

@section('content')



                  @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>
                  @endif



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                  <div class="container-fluid pr-sm-0 pr-sm-4 pl-sm-4 pl-1 pb-2">
                        <div class="row">


                            <div class="w-100 d-flex flex-wrap pl-sm-3 mt-4 ml-1">
                                <ul class="nav nav-tabs custom-navtabs border-0 col-sm-8 col-12">
                                  <li><a data-toggle="tab" href="#gami" class="active font-gothambook">Gamification</a></li>
                                  <li><a data-toggle="tab" class="font-gothambook" href="#clinical">Clinical Cases</a></li>
                                </ul>
                              </div>


                                  <div class="tab-content w-100 pl-2 pr-2">
                                  <!-- Gamification tab -->
                                <div class="tab-pane fade in active show" id="gami">

                                         <div class="w-100 pt-3 d-flex flex-wrap">
               
                                             <div class="col-sm-3 pl-2 pr-2 mt-3">
                                              
                                                 <div class="w-100 p-2 card border-0 border-radius10px">
                                                        <div class="w-100 h-img"><img class="card-img-top w-100 mb-1 rounded" src="{{asset('images/Asset44.png')}}"></div>
                                                        <div class="card-body text-left pt-2 pb-0 pl-1 pr-1">

                                                                <p  class="bg-white col-auto border-0 float-right p-0 coloricon rounded-circle text-center mt-minus mr-2" style="width: 28px;height: 28px;"><img src="{{ asset('images/Asset90.png') }}" class="iconsize m-auto"></p>
                                                             

                                                           <ul class="list-unstyled d-inline-block p-0 d-flex flex-wrap w-100 mb-3 border-bottom border-gray">
                                                            <li class="col-sm-4 col-4 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-calendar-check fontsize11px mr-1"></i> Tuesday </li>
                                                             <li class="col-sm-5 col-5 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-calendar mr-1 fontsize11px float-left"></i>
                                                             <span class="float-left text-left w-fix"> 23-03-2020 </span></h6></li>
                                                            <li class="col-sm-3 col-3 p-0 text-center"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-clock mr-1 fontsize12px float-left"></i><span class="float-left text-left w-fix"> 24:00 PM </span></h6></li>
                                                         </ul>

                                                          <h6 class="card-title text-black font-gothambook mt-1 mb-2 fontsize12px"> Title goes here </h6>

                                                        </div>
                                                    </div>
                                              
                                            </div>
                                            
                                  </div>

                                </div>
                                 <!-- Gamification tab -->




                                  <!-- second tab -->
                          <div class="tab-pane fade" id="clinical">

                                 <div class="w-100 pt-3 d-flex flex-wrap">
                     
                                    <div class="col-sm-3 pl-2 pr-2 mt-3">
                                     
                                        <div class="w-100 p-2 card border-0 border-radius10px">
                                                <div class="w-100 h-img"><img class="card-img-top w-100 mb-1 rounded" src="{{ asset('images/Asset43.png')}}"></div>
                                                <div class="card-body text-left pt-2 pb-0 pl-1 pr-1">

                                                        <p  class="bg-white col-auto border-0 float-right p-0 coloricon rounded-circle text-center mt-minus mr-2" style="width: 28px;height: 28px;"><img src="{{ asset('images/Asset91.png') }}" class="m-auto" width="16"></p>

                                                   <ul class="list-unstyled d-inline-block p-0 d-flex flex-wrap w-100 mb-3 border-bottom border-gray">
                                                            <li class="col-sm-4 col-4 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-calendar-check fontsize11px mr-1"></i> Wednesday </li>
                                                             <li class="col-sm-5 col-5 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-calendar mr-1 fontsize11px float-left"></i>
                                                             <span class="float-left text-left w-fix"> 10-20-201 </span></h6></li>
                                                            <li class="col-sm-3 col-3 p-0 text-center"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-clock mr-1 fontsize11px float-left"></i><span class="float-left text-left w-fix">10:00AM</span></h6></li>
                                                         </ul>

                                                  <h6 class="card-title text-black font-gothambook mt-1 mb-2 fontsize12px"> Title Goes here </h6>

                                                </div>
                                            </div>                                    

                                 </div>
                                 
                          </div>
                      </div>
                          <!-- second tab -->


                              </div>

                          
                            <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

</div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

@endsection

