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


                  <div class="container-fluid pr-sm-0 pr-sm-1 pl-sm-4 pl-1 pb-4">

                  		<div class="col-sm-12 pt-2 pb-2 pl-3">
                                    <ul class="m-0 p-0 list-unstyled fontsize11px text-gray-500">
                                      <li class="d-inline-block font-gothambook"> <a href="{{url('/dashboard')}}" class="text-orange fontsize14px position-relative" style="top: 2px;"><i class="fas fa-arrow-circle-left"></i></a>  </li>
                                        <li class="d-inline-block font-gothambook pl-1"> Events Calendars  </li>
                                        <li class="d-inline-block pl-1">/ </li>
                                        <li class="d-inline-block font-gothambook"> Webinar  </li>
                                        <li class="d-inline-block pl-1">/ </li>
                                        <li class="text-orange d-inline-block pl-1 font-gothammedium"> COVID-19 Care Group </li>
                                    </ul>
                                </div>


                           <div class="col-sm-12 mt-2 pr-sm-4">
                           		<div class="w-100 bg-white border-radius10px d-flex flex-wrap pt-3 pl-2 pb-3" style="box-shadow: 4px 1px 10px #d5e0e4;">
                           				<div class="col-sm-7">
                           					<div class="w-100">
                           						<img src="{{ asset('images/Asset50.png') }}" class="img-fluid w-100 mb-3">
                           						<h6 class="font-gothammedium text-black fontsize16px pl-sm-2 mb-3">About the Webinar</h6>
                           						<p class="font-gothambook text-darkgray fontsize12px lineheight1-7px pl-sm-2 col-sm-11 col-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. </p>
                           						<p class="font-gothambook text-darkgray fontsize12px lineheight1-7px pl-sm-2 col-sm-11 col-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. </p>
                           						<p class="font-gothambook text-darkgray fontsize12px lineheight1-7px pl-sm-2 col-sm-11 col-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. </p>


                           						<h1> <span class="badge badge-secondary border-radius25px fontsize10px text-white text-uppercase font-gothambook pl-3 pr-3 pt-1 pb-1"> Your Host </span></h1>
                           						<div class="media">
													  <img src="{{ asset('images/userimg.png') }}" class="mr-2 rounded-circle" style="width:35px;">
													  <div class="media-body m-auto">
													    <h6 class="font-gothambook text-black fontsize12px fontsize11px mb-0"> Abc </h6>

													  </div>
													</div>

												<div class="w-100 mt-4"><a href="#" class="text-orange fontsize13px font-gothambook"><i class="fa fa-flag mr-1"></i> Report</a></div>
                           					</div>
                           				</div>
                           				<div class="col-sm-5 pt-3 pl-sm-3 pr-sm-3">
                           					<div class="w-100">
                           							<h4 class="font-gothammedium text-black"> COVID-19 Care Group </h4>
                           							<div class="media">
													  <img src="{{ asset('images/userimg.png') }}" class="mr-2 rounded-circle" style="width:35px;">
													  <div class="media-body m-auto">
													    <h6 class="font-gothambook text-darkgray fontsize11px mb-0">Mohamed El-Sharaby </h6>

													  </div>
													</div>
													<ul class="m-0 list-unstyled mt-3 d-flex font-gothambook fontsize11px text-black">
														<li><i class="fa fa-calendar-check text-gray mr-1"></i> Tue, June 01, 2021</li>
														<li class="pl-2"> Tue, June 01, 2021 | </li>
														<li class="pl-2"><i class="fa fa-clock text-gray mr-1"></i> 10:00 AM (GMT)</li>
													</ul>

													<div class="w-100 d-flex d-flex mt-5">
															<div class="col-sm-6 p-0">
							                                <form method="post" action="">
							                                  @csrf
																<button class="bg-orange btn border border-orange border-radius25px text-white text-uppercase fontsize16px w-100 font-gothambook">Join</button>
       															  </form>
															</div>
															<div class="col-sm-1">
                               								<button class="text-orange border border-orange rounded-circle p-2 d-block text-center fontsize16px hovericon bg-white" style="width: 38px; height: 38px;"><i class="fa fa-bookmark-o"></i></button>
                           						

															</div>
													</div>

													<div class="w-100 d-flex flex-wrap mt-4">
														<h1> <span class="badge badge-secondary border-radius25px fontsize10px text-white text-uppercase font-gothambook pl-3 pr-3 pt-1 pb-1"> Category & Tags </span></h1>
														<ul class="p-0 m-0 list-unstyled d-inline-block w-100">
															<li class="d-inline-block"><button class="border-0 text-blue font-gothambook fontsize11px pt-1 pb-1 pl-2 pr-2" style="background-color: #d9e6f1;">Clinical Case</button></li>
															<li class="d-inline-block ml-2"><button class="border-0 text-blue font-gothambook fontsize11px pt-1 pb-1 pl-2 pr-2" style="background-color: #d9e6f1;">Clnical Cases</button></li>
															<li class="d-inline-block ml-2"><button class="border-0 text-blue font-gothambook fontsize11px pt-1 pb-1 pl-2 pr-2" style="background-color: #d9e6f1;">Clnical Cases</button></li> 
														</ul>
													</div>
                           					</div>
                           				</div>

                           		</div>
                           </div>

                  </div>

              </div>
          </div>







@endsection