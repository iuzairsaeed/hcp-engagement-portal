@extends('layouts.app')

@section('content')



  @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>
                  @endif




        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                  <div class="container-fluid pr-sm-0 pr-sm-4 pl-sm-4 pl-1 pb-2">
                        <div class="row">
                            
                                  <div class="col-sm-12 pt-2 pb-2 pl-3">
                                    <ul class="m-0 p-0 list-unstyled fontsize11px text-gray-500">
                                    	 <li class="d-inline-block font-gothambook"> <a href="{{url('/userdashboard')}}" class="text-orange fontsize14px position-relative" style="top: 2px;"><i class="fas fa-arrow-circle-left"></i></a>  </li>
                                        <li class="d-inline-block font-gothambook ml-1"> Dashboard </li>
                                        <li class="d-inline-block pl-1">/ </li>
                                        <li class="text-orange d-inline-block pl-1 font-gothammedium"> My Recent Activities </li>
                                    </ul>
                                </div>
                                
                                <div class="w-100 d-flex flex-wrap overflow-y pl-sm-2 pr-sm-2" style="height: 593px;">
                                  
                                  <!-- second card -->
                      		   <div class="w-100 col-sm-3 p-2">
                                  <div class="card p-2 border-0 border-radius10px" style="box-shadow: 1px 1px 13px #b2cfda;">
                                      <img class="card-img-top w-100 mb-2" src="{{ asset('images/Asset44.png') }}">
                                      <div class="card-body pt-1 pb-0 pl-1 pr-1">
                                        <p class="card-text text-black fontsize12px mb-2 font-gothambook">Covid-19: A world without WHO is a world in danger, experts warn</p>
                                          
                                          <div class="text-left"><a href="#" class="text-orange font-gothamlight fontsize12px hoverlink"> Leave a Comment </a>
                                          </div>
                                      </div>
                                    </div>
                              </div>
                            <!-- second card -->


                            <!-- third card -->
                            <div class="w-100 p-2 col-sm-3">
                            <div class="card p-2 border-0 border-radius10px" style="box-shadow: 1px 1px 13px #b2cfda;">
                                  <img class="card-img-top w-100 mb-2" src="{{ asset('images/Asset44.png') }}">
                                  <div class="card-body pt-1 pb-0 pl-1 pr-1">
                                    <p class="card-text text-black font-gothambook fontsize12px mb-2">Covid-19: A world without WHO is a world in danger, experts warn</p>
                                      
                                      <div class="text-left"><a href="#" class="text-orange font-gothamlight fontsize12px hoverlink"> Leave a Comment </a>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            <!-- third card -->


                             <!-- four card -->
                             <div class="w-100 p-2 col-sm-3">
                            <div class="card p-2 border-0 border-radius10px" style="box-shadow: 1px 1px 13px #b2cfda;">
                                  <img class="card-img-top w-100 mb-2" src="{{ asset('images/Asset44.png') }}">
                                  <div class="card-body pt-1 pb-0 pl-1 pr-1">
                                    <p class="card-text text-black font-gothambook fontsize12px mb-2">Covid-19: A world without WHO is a world in danger, experts warn</p>
                                      
                                      <div class="text-left"><a href="#" class="text-orange font-gothamlight fontsize12px hoverlink"> Leave a Comment </a>
                                      </div>
                                  </div>
                                </div>
                          </div>
                            <!-- four card -->



                              <!-- five card -->
                             <div class="w-100 p-2 col-sm-3">
                            <div class="card p-2 border-0 border-radius10px" style="box-shadow: 1px 1px 13px #b2cfda;">
                                  <img class="card-img-top w-100 mb-2" src="{{ asset('images/Asset44.png') }}">
                                  <div class="card-body pt-1 pb-0 pl-1 pr-1">
                                    <p class="card-text text-black font-gothambook fontsize12px mb-2">Covid-19: A world without WHO is a world in danger, experts warn</p>
                                      
                                      <div class="text-left"><a href="#" class="text-orange font-gothamlight fontsize12px hoverlink"> Leave a Comment </a>
                                      </div>
                                  </div>
                                </div>
                          </div>
                            <!-- five card -->



                              <!-- Six card -->
                             <div class="w-100 p-2 col-sm-3">
                            <div class="card p-2 border-0 border-radius10px" style="box-shadow: 1px 1px 13px #b2cfda;">
                                  <img class="card-img-top w-100 mb-2" src="{{ asset('images/Asset44.png') }}">
                                  <div class="card-body pt-1 pb-0 pl-1 pr-1">
                                    <p class="card-text text-black font-gothambook fontsize12px mb-2">Covid-19: A world without WHO is a world in danger, experts warn</p>
                                      
                                      <div class="text-left"><a href="#" class="text-orange font-gothamlight fontsize12px hoverlink"> Leave a Comment </a>
                                      </div>
                                  </div>
                                </div>
                          </div>
                            <!-- Six card -->



                              <!-- Seven card -->
                             <div class="w-100 p-2 col-sm-3">
                            <div class="card p-2 border-0 border-radius10px" style="box-shadow: 1px 1px 13px #b2cfda;">
                                  <img class="card-img-top w-100 mb-2" src="{{ asset('images/Asset44.png') }}">
                                  <div class="card-body pt-1 pb-0 pl-1 pr-1">
                                    <p class="card-text text-black font-gothambook fontsize12px mb-2">Covid-19: A world without WHO is a world in danger, experts warn</p>
                                      
                                      <div class="text-left"><a href="#" class="text-orange font-gothamlight fontsize12px hoverlink"> Leave a Comment </a>
                                      </div>
                                  </div>
                                </div>
                          </div>
                            <!-- Seven card -->




                              <!-- Eight card -->
                             <div class="w-100 p-2 col-sm-3">
                            <div class="card p-2 border-0 border-radius10px" style="box-shadow: 1px 1px 13px #b2cfda;">
                                  <img class="card-img-top w-100 mb-2" src="{{ asset('images/Asset44.png') }}">
                                  <div class="card-body pt-1 pb-0 pl-1 pr-1">
                                    <p class="card-text text-black font-gothambook fontsize12px mb-2">Covid-19: A world without WHO is a world in danger, experts warn</p>
                                      
                                      <div class="text-left"><a href="#" class="text-orange font-gothambook fontsize12px hoverlink"> Leave a Comment </a>
                                      </div>
                                  </div>
                                </div>
                          </div>
                            <!-- Eight card -->



                              <!-- Ten card -->
                             <div class="w-100 p-2 col-sm-3">
                            <div class="card p-2 border-0 border-radius10px" style="box-shadow: 1px 1px 13px #b2cfda;">
                                  <img class="card-img-top w-100 mb-2" src="{{ asset('images/Asset44.png') }}">
                                  <div class="card-body pt-1 pb-0 pl-1 pr-1">
                                    <p class="card-text text-black font-gothambook fontsize12px mb-2">Covid-19: A world without WHO is a world in danger, experts warn</p>
                                      
                                      <div class="text-left"><a href="#" class="text-orange font-gothambook fontsize12px hoverlink"> Leave a Comment </a>
                                      </div>
                                  </div>
                                </div>
                          </div>
                            <!-- Ten card -->




                              <!-- Eleven card -->
                             <div class="w-100 p-2 col-sm-3">
                            <div class="card p-2 border-0 border-radius10px" style="box-shadow: 1px 1px 13px #b2cfda;">
                                  <img class="card-img-top w-100 mb-2" src="{{ asset('images/Asset44.png') }}">
                                  <div class="card-body pt-1 pb-0 pl-1 pr-1">
                                    <p class="card-text font-gothambook text-black fontsize12px mb-2">Covid-19: A world without WHO is a world in danger, experts warn</p>
                                      
                                      <div class="text-left"><a href="#" class="text-orange font-gothamlight fontsize12px hoverlink"> Leave a Comment </a>
                                      </div>
                                  </div>
                                </div>
                          </div>
                            <!-- Eleven card -->



                              <!-- Twelve card -->
                             <div class="w-100 p-2 col-sm-3">
                            <div class="card p-2 border-0 border-radius10px" style="box-shadow: 1px 1px 13px #b2cfda;">
                                  <img class="card-img-top w-100 mb-2" src="{{ asset('images/Asset44.png') }}">
                                  <div class="card-body pt-1 pb-0 pl-1 pr-1">
                                    <p class="card-text font-gothambook text-black fontsize12px mb-2">Covid-19: A world without WHO is a world in danger, experts warn</p>
                                      
                                      <div class="text-left"><a href="#" class="text-orange font-gothamlight fontsize12px hoverlink"> Leave a Comment </a>
                                      </div>
                                  </div>
                                </div>
                          </div>
                            <!-- Twelve card -->



                              <!-- Third card -->
                             <div class="w-100 p-2 col-sm-3">
                            <div class="card p-2 border-0 border-radius10px" style="box-shadow: 1px 1px 13px #b2cfda;">
                                  <img class="card-img-top w-100 mb-2" src="{{ asset('images/Asset44.png') }}">
                                  <div class="card-body pt-1 pb-0 pl-1 pr-1">
                                    <p class="card-text text-black font-gothambook fontsize12px mb-2">Covid-19: A world without WHO is a world in danger, experts warn</p>
                                      
                                      <div class="text-left"><a href="#" class="text-orange font-gothambook fontsize12px hoverlink"> Leave a Comment </a>
                                      </div>
                                  </div>
                                </div>
                          </div>
                            <!-- Third card -->



                              <!-- Fourth card -->
                             <div class="w-100 p-2 col-sm-3">
                            <div class="card p-2 border-0 border-radius10px" style="box-shadow: 1px 1px 13px #b2cfda;">
                                  <img class="card-img-top w-100 mb-2" src="{{ asset('images/Asset44.png') }}">
                                  <div class="card-body pt-1 pb-0 pl-1 pr-1">
                                    <p class="card-text text-black font-gothambook fontsize12px mb-2">Covid-19: A world without WHO is a world in danger, experts warn</p>
                                      
                                      <div class="text-left"><a href="#" class="text-orange font-gothamlight fontsize12px hoverlink"> Leave a Comment </a>
                                      </div>
                                  </div>
                                </div>
                          </div>
                            <!-- fourth card -->

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