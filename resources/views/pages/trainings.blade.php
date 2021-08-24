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
                            
                                 <div class="w-100 d-flex flex-wrap mt-4">
                                     <h6 class="mb-1 col-sm-6 font-gothambook text-darkgray ml-2"> Videos </h6>
                                 </div>
                                
                               
                                <div class="w-100 d-flex flex-wrap pl-2 pr-2">
        
                                  <div class="col-sm-3 pl-2 pr-2 mt-3">
                                                <div class="w-100 p-2 card border-0 border-radius10px">
                                                       <div class="w-100 h-img"> <img class="card-img-top w-100 mb-1 rounded" src="{{asset('images/Asset43.png')}}"></div>
                                                        <div class="card-body text-left pt-2 pb-0 pl-1 pr-1">
                                                            
                                                                <a href="#" target="_blank" class="bg-white col-auto border-0 float-right p-0 coloricon rounded-circle text-center mt-minus mr-2" style="width: 28px;height: 28px;line-height: 1.6;"><img src="{{ asset('images/Asset89.png') }}" class="iconsize m-auto"><a>


                                                      <ul class="list-unstyled d-inline-block p-0 d-flex flex-wrap w-100 mb-3 border-bottom border-gray">
                                                            <li class="col-sm-4 col-4 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-calendar-check fontsize12px mr-1"></i> Monday </li>
                                                             <li class="col-sm-5 col-5 p-0"><h6 class="text-darkgray fontsize9px font-gothambook lineheight1px"><i class="fa fa-calendar mr-1 fontsize12px float-left"></i> 
                                                            <span class="float-left text-left w-fix"> 23-10-2021 </span></h6></li>
                                                            <li class="col-sm-3 col-3 p-0 text-center"><h6 class="text-darkgray fontsize8px font-gothambook lineheight1px"><i class="fa fa-clock mr-1 fontsize12px float-left"></i> <span class="float-left text-left w-fix"> 09:22PM </span></h6></li>
                                                         </ul>

                                                          <h6 class="card-title text-black font-gothambook mt-1 mb-2 fontsize12px"> Title Goes here </h6>
                                                        </div>
                                                    </div>
                                            </div>

                              			 <div class="col-sm-3 pl-2 pr-2 mt-3">
                                                <div class="w-100 p-2 card border-0 border-radius10px">
                                                       <div class="w-100 h-img"> <img class="card-img-top w-100 mb-1 rounded" src="{{asset('images/Asset44.png')}}"></div>
                                                        <div class="card-body text-left pt-2 pb-0 pl-1 pr-1">
                                                            
                                                                <a href="#" target="_blank" class="bg-white col-auto border-0 float-right p-0 coloricon rounded-circle text-center mt-minus mr-2" style="width: 28px;height: 28px;line-height: 1.6;"><img src="{{ asset('images/Asset89.png') }}" class="iconsize m-auto"><a>


                                                      <ul class="list-unstyled d-inline-block p-0 d-flex flex-wrap w-100 mb-3 border-bottom border-gray">
                                                            <li class="col-sm-4 col-4 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-calendar-check fontsize12px mr-1"></i> Monday </li>
                                                             <li class="col-sm-5 col-5 p-0"><h6 class="text-darkgray fontsize9px font-gothambook lineheight1px"><i class="fa fa-calendar mr-1 fontsize12px float-left"></i> 
                                                            <span class="float-left text-left w-fix"> 12-10-2021 </span></h6></li>
                                                            <li class="col-sm-3 col-3 p-0 text-center"><h6 class="text-darkgray fontsize8px font-gothambook lineheight1px"><i class="fa fa-clock mr-1 fontsize12px float-left"></i> <span class="float-left text-left w-fix"> 12:22PM </span></h6></li>
                                                         </ul>

                                                          <h6 class="card-title text-black font-gothambook mt-1 mb-2 fontsize12px"> Title Goes here </h6>
                                                        </div>
                                                    </div>
                                            </div>
                                </div>
                                

                            <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

</div>




@endsection