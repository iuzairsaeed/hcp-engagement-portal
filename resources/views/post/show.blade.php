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
                            
                                 <div class="col-sm-12 pt-2 pb-2">
                                    <ul class="m-0 p-0 list-unstyled fontsize11px text-gray-500 font-gothambook">
                                      <li class="d-inline-block font-gothambook"> <a href="{{url('/userdashboard')}}" class="text-orange fontsize14px position-relative" style="top: 2px;"><i class="fas fa-arrow-circle-left"></i></a>  </li>
                                        <li class="d-inline-block pl-1"> Dashboard </li>
                                        <li class="d-inline-block pl-1">/ </li>
                                        <li class="text-orange d-inline-block pl-1 font-gothambook"> View Comments</li>
                                    </ul>
                                </div>
                              
                             </div>



                             <div class="w-100 mt-2">
                                    <div class="w-100 d-flex flex-wrap bg-white border-radius10px pb-3" style="box-shadow: 1px 1px 17px 2px #e6e6e6;">
                                            <div class="col-sm-5 pt-4 pb-4 pl-3 pr-4">
                                                <div class="col-sm-12 pl-2 pr-2">
                                                        <img src="{{ asset ('images/Asset39.png') }}" class="img-fluid mb-3 w-100">
                                                        <h6 class="text-black font-gothammedium fontsize15px"> Hamdy El Gallad </h6>
                                                        <p class="font-gothamlight fontsize11px text-gray mt-3"> Lorem Ipsum Text Goes Here </p>
                                                </div> 
                                                <div class="col-sm-12 pl-2 pr-2">
                                                    <form class="w-100" action="" method="post">
                                                      @csrf
                                                    <label class="font-gothamlight fontsize11px text-darkgray"> Add Comment</label>
                                                    <textarea placeholder="Your comment"  name="comment" id="comment" class="font-gothambook text-darkgray w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; resize: none; height: 80px;"></textarea>
                                                    <button class="bg-orange w-100 border-radius25px text-uppercase border border-orange text-white font-gothamlight p-2 mt-3"  type="submit"> Leave a Comment </button>
                                                </div>
                                            </div>


                                            <!-- right side -->
                                            <div class="col-sm-7 border-left border-gray pl-0 pr-4 pt-3">
                                                <div class="w-100 pl-4 pr-4 pt-2 pb-3 border-bottom border-gray">
                                                    <h5 class="text-dark font-gothammedium">Recent Comments</h5>
                                                </div>
                                                    <!-- comments -->
                                                  <div class="col-sm-12 pl-sm-0 pr-sm-5 overflow-y" style="height: 500px; overflow-x: hidden;">
                                                    <div class="w-100 border-bottom p-4 border-gray">
                                             
                                                        <div class="media">
                                                          <img src="{{ asset('images/Asset38.png') }}" class="mr-2 rounded-circle" style="width:35px;height: 35px;">
                                                          <div class="media-body mt-2">
                                                            <h6 class="text-blue font-gothambook fontsize13px mb-0"> John Bush Carry </h6>
                                                            <span class="font-gothamlight text-gray fontsize9px d-block mb-1"> 10:00 PM | 17 May, 2021 </span>
                                                            <p class="font-gothambook text-dark fontsize11px mb-1"> Lorem ipsum dolor sit amet mollis consequat ut quis adipiscing rhoncus libero venenatis ipsum. Rhoncus tincidunt elementum sit vidi metus aenean viverra nullam fringilla et. </p>
                                                             <a href="#" class="text-gray-500 font-montserrat fontsize10px"> Reply</a>
                                                          </div>
                                                        </div>
                                              

                                                    </div>


                                                    <div class="w-100 border-bottom p-4 border-gray">
                                             
                                                        <div class="media">
                                                          <img src="{{ asset('images/Asset38.png') }}" class="mr-2 rounded-circle" style="width:35px;height: 35px;">
                                                          <div class="media-body mt-2">
                                                            <h6 class="text-blue font-gothambook fontsize13px mb-0"> Telenew film </h6>
                                                            <span class="font-gothamlight text-gray fontsize9px d-block mb-1"> 10:00 PM | 21 Juny, 2021 </span>
                                                            <p class="font-gothambook text-dark fontsize11px mb-1"> Lorem ipsum dolor sit amet mollis consequat ut quis adipiscing rhoncus libero venenatis ipsum. Rhoncus tincidunt elementum sit vidi metus aenean viverra nullam fringilla et. </p>
                                                             <a href="#" class="text-gray-500 font-montserrat fontsize10px"> Reply</a>
                                                          </div>
                                                        </div>
                                              

                                                    </div>

                                                </div>

                                            </div>

                                              <!-- right side -->


                                    </div>
                             </div>
                            <!-- /.container-fluid -->

            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

</div>
    <!-- Scroll to Top Button-->


@endsection


@section('afterScript')
<script>


</script>
@endsection
