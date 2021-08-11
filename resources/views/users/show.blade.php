@extends('layouts.app')

@section('content')



 	
     <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
         <!-- Main Content -->
         <div id="content" class="w-100">
            <div class="container-fluid pr-sm-0 pr-sm-4 pl-sm-4 pl-1 pb-2">
               <div class="row">

                  @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>
                  @endif

                   <div class="col-sm-12 mt-4">
                                    <div class="w-100 pt-3 pb-3 pl-4 pr-4 border-radius10px bg-white position-relative" style="box-shadow: 1px 1px 10px #a1c0cc;">
                                            <div class="media">

                                                  <img src="{{asset($user->avatar) }}" class="mr-3 mt-3 rounded-circle" style="width:160px;height: 160px;">
                                                  <div class="media-body mt-5">
                                                    <p class="w-100 font-gothamlight text-darkgray fontsize11px mb-2">General Information</p>
                                                    <h5 class="mb-0 w-100"><input type="text" name="name" value="{{ $user->name }}" disabled class="bg-transparent border-0 outline-none font-gothambook text-dark"> </h5>
                                                    <p class="mb-0 w-100"><input type="text" name="advice" value="{{ $user->speciality }}" disabled class="bg-transparent border-0 outline-none font-gothamlight fontsize14px"> </p>
                                                    <ul class="list-unstyled d-inline-block p-0 d-flex flex-wrap w-100 mb-4">
                                                        <li class="col-sm-2 p-0"><i class="fa fa-map-marker text-blue" style="font-size: 13px;"></i> <input type="text" name="advice" value="{{ $user->location }}" class="bg-transparent border-0 text-gray fontsize13px" disabled style="width: 90%"></li>
                                                        <li class="col-sm-3 p-0 ml-2"><i class="fa fa-envelope text-blue" style="font-size: 13px;"></i> <input type="text" name="advice" value="{{ $user->email }}" class="bg-transparent border-0 text-gray fontsize13px" disabled style="width: 91%;"></li>
                                                        <li class="col-sm-3 ml-2 p-0"><i class="fa fa-phone text-blue" style="font-size: 13px;"></i> <input type="text" name="advice" value="{{ $user->phone }}" class="bg-transparent border-0 text-gray fontsize13px" disabled style="width: 90%;"></li>
                                                    </ul>


                                                        <div class="w-100 d-flex flex-wrap mt-3">
                                                                <h6 class="w-100 font-gothamlight text-dark fontsize12px mb-2">Education Information</h6>
                                                                <div class="col-sm-4 pl-0">
                                                                    <div class="w-100 border-right-before position-relative">
                                                                        <h3 class="text-dark font-gothambook fontweight500 fontsize24px mb-1"> Dow University of Health Sciences </h3>
                                                                        <h5 class="font-gothamlight fontsize17px"> MBA </h5>
                                                                       <p class="fontsize13px font-gothambook"><i class="fa fa-calendar text-blue mr-1" style="font-size: 10px;"></i> 2005 - 2006 </p>
                                                                     </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <h3 class="text-darkgray font-gothambook fontsize24px mb-1"> Dow University of Health Sciences </h3>
                                                                    <h5 class="font-gothamlight fontsize17px"> MBBS </h5>
                                                                    <p class="fontsize13px font-gothambook"><i class="fa fa-calendar text-blue mr-1" style="font-size: 10px;"></i>2005 - 2006 </p>
                                                                </div>
                                                        </div>

                                                         <div class="w-100 d-flex flex-wrap mt-3">
                                                                <h6 class="w-100 font-montserrat fontsize12px mb-2">Experience Information</h6>
                                                                <div class="col-sm-4 pl-0">
                                                                    <div class="w-100 border-right-before position-relative">
                                                                        <h3 class="text-darkgray font-gothambook fontsize24px mb-1"> Dow Hospital </h3>
                                                                        <h5 class="font-gothamlight fontsize17px"> Orthopedics </h5>
                                                                       <p class="fontsize13px mb-0 font-gothambook"><i class="fa fa-calendar text-blue mr-1" style="font-size: 10px;"></i> 2011 - 2016</p>
                                                                        <p class="fontsize13px font-gothamlight"><i class="fa fa-map-marker text-blue mr-1" style="font-size: 10px;"></i> Karachi, Pakistan </p>
                                                                     </div>
                                                                </div>
                                                                <div class="col-sm-5 pr-0">
                                                                    <h3 class="text-darkgray font-gothambook fontsize24px mb-1"> Dow Hospital </h3>
                                                                    <h5 class="font-gothamlight fontsize17px"> Head of department orthopaedics </h5>
                                                                    <p class="fontsize13px mb-0 font-gothambook"><i class="fa fa-calendar text-blue mr-1" style="font-size: 12px;"></i> 2016 - Present </p>
                                                                    <p class="fontsize13px font-gothamlight"><i class="fa fa-map-marker text-blue mr-1" style="font-size: 12px;"></i> Karachi/Pakistan </p>
                                                                </div>
                                                        </div>
                                                  </div>
                                                </div>
                                            <a href="{{ route('profile.form')}}" class="text-orange border rounded-circle border-orange position-absolute text-center fontsize14px" style="right: 6px;top: 6px;width: 23px;height: 23px;"><i class="fa fa-pencil"></i></a>
                                    </div>
                               </div>


                               </div>
                              </div>
                           </div>
                         </div>





    @endsection