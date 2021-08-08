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
                                     <div class="col-sm-4 offset-sm-8 col-12 text-right mt-up">
                                         <a href="#" class="bg-orange border-radius25px text-uppercase border text-white font-montserrat pl-4 pr-4 pt-2 pb-2 fontsize13px border-orange d-inline-block hoverbtn" data-toggle="modal" data-target="#addwebinar"> Add Webinar </a>
                                         </div>


                                         <div class="w-100 pt-3 d-flex flex-wrap">
                                            <div class="col-sm-3 pl-2 pr-2 mt-3">
                                               
                                                <div class="w-100 p-2 card border-0 border-radius10px">
                                                        <div class="w-100 h-img"><img class="card-img-top w-100 mb-1 rounded" src="{{asset('images/Asset46.png') }}"></div>
                                                        <div class="card-body text-left pt-2 pb-0 pl-1 pr-1">
                                                              <p  class="bg-white col-auto border-0 float-right p-0 rounded-circle text-center mt-minus mr-2 text-orange" style="width: 28px;height: 28px;"><i class="fa fa-heart-o align-middle"></i></p>

                                                            <ul class="list-unstyled d-inline-block p-0 d-flex flex-wrap w-100 mb-3 border-bottom border-gray">
                                                            <li class="col-sm-4 col-4 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-calendar-check fontsize12px mr-1"></i> Monday </li>
                                                             <li class="col-sm-5 col-5 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-calendar mr-1 fontsize12px float-left"></i>
                                                             <span class="float-left text-left w-fix">  24 June, 2021 </span></h6></li>
                                                            <li class="col-sm-3 col-3 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-clock mr-1 fontsize12px float-left"></i><span class="float-left text-left w-fix"> 12:30PM  </span> </h6></li>
                                                         </ul>

                                                          <a href="{{url('/eventdetails') }}"><h6 class="card-title text-black font-gothambook mt-1 mb-2 fontsize12px"> Title goes Here </h6></a>

                                                        </div>
                                                    </div>
                                               
                                            </div>
                                            
                                            
                                  </div>
                              </div>
                                  <!-- first tab -->


                          <!-- second tab -->
                          <div class="tab-pane fade" id="virtual">
                                <div class="col-sm-4 offset-sm-8 col-12 text-right mt-up">
                                         <a href="#" class="bg-orange border-radius25px text-uppercase border text-white font-gothambook pl-4 pr-4 pt-2 pb-2 fontsize13px border-orange d-inline-block hoverbtn" data-toggle="modal" data-target="#virtualevent"> Add Virtual Event </a>
                                    </div>

                                 <div class="w-100 pt-3 d-flex flex-wrap">
                                            <div class="col-sm-3 pl-2 pr-2 mt-3">
                                             
                                                <div class="w-100 p-2 card border-0 border-radius10px">
                                                      <div class="w-100 h-img">  <img class="card-img-top w-100 mb-1 rounded" src="{{asset('images/Asset46.png') }}"></div>
                                                        <div class="card-body text-left pt-2 pb-0 pl-1 pr-1">
                                                              <p  class="bg-white col-auto border-0 float-right p-0 rounded-circle text-center mt-minus mr-2 text-orange" style="width: 28px;height: 28px;"><i class="fa fa-heart align-middle"></i></p>

                                                            <ul class="list-unstyled d-inline-block p-0 d-flex flex-wrap w-100 mb-3 border-bottom border-gray">
                                                            <li class="col-sm-4 col-4 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-calendar-check fontsize12px mr-1"></i> Monday </li>
                                                             <li class="col-sm-5 col-5 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-calendar mr-1 fontsize12px float-left"></i>
                                                             <span class="float-left text-left w-fix"> 24 August, 2021 </span></h6></li>
                                                            <li class="col-sm-3 col-3 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-clock mr-1 fontsize12px float-left"></i><span class="float-left text-left w-fix"> 12:30PM </span></h6></li>
                                                         </ul>

                                                          <a href="{{url('/eventdetails') }}"><h6 class="card-title text-black font-gothambook mt-1 mb-2 fontsize12px"> Title goes Here </h6></a>

                                                        </div>
                                                    </div>
                                                
                                            </div>
                                    

                          </div>
                      </div>
                          <!-- second tab -->



                           <!-- Third tab -->
                          <div class="tab-pane fade" id="trainings">
                                <div class="col-sm-4 offset-sm-8 col-12 text-right mt-up">
                                         <a href="#" class="bg-orange border-radius25px text-uppercase border text-white font-gothambook pl-4 pr-4 pt-2 pb-2 fontsize13px border-orange d-inline-block hoverbtn" data-toggle="modal" data-target="#trainingsmodal"> Add Training </a>
                                    </div>

                                 <div class="w-100 pt-3 d-flex flex-wrap">
                                            <div class="col-sm-3 pl-2 pr-2 mt-3">
                                            
                                                <div class="w-100 p-2 card border-0 border-radius10px">
                                                       <div class="w-100 h-img"> <img class="card-img-top w-100 mb-1 rounded" src="{{asset('images/Asset46.png') }}"></div>
                                                        <div class="card-body text-left pt-2 pb-0 pl-1 pr-1">
                                                              <p  class="bg-white col-auto border-0 float-right p-0 rounded-circle text-center mt-minus mr-2 text-orange" style="width: 28px;height: 28px;"><i class="fa fa-heart-o align-middle"></i></p>
                                                              
                                                            <ul class="list-unstyled d-inline-block p-0 d-flex flex-wrap w-100 mb-3 border-bottom border-gray">
                                                            <li class="col-sm-4 col-4 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-calendar-check fontsize12px mr-1"></i> Wednesday </li>
                                                             <li class="col-sm-5 col-5 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-calendar mr-1 fontsize12px float-left"></i>
                                                             <span class="float-left text-left w-fix"> 10 July, 2021 </span></h6></li>
                                                            <li class="col-sm-3 col-3 p-0"><h6 class="text-darkgray fontsize9px font-gothambook"><i class="fa fa-clock mr-1 fontsize12px float-left"></i> <span class="float-left text-left w-fix"> 10:30PM </span></h6></li>
                                                         </ul>

                                                          <a href="{{url('/eventdetails') }}"><h6 class="card-title text-black font-gothambook mt-1 mb-2 fontsize12px">Title goes Here</h6></a>

                                                        </div>
                                                    </div>
                                                
                                            </div>
                                          
                          </div>
                      </div>
                          <!-- third tab -->
          

                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



        </div>
    </div>



       <!-- Add Gamification -->
  <div class="modal fade" id="addwebinar" role="dialog">
    <div class="modal-dialog modal-lg" style=" max-width: 605px;">
    
      <!-- Modal content-->
      <div class="modal-content border-0 border-radius10px overflow-hiden">
        <div class="modal-header pl-4 pr-4 border-0" style="background: #4d8ac0;">
            <h6 class="modal-title text-left text-white font-gothambook">  Add Webinar </h6>
          <button type="button" class="close text-white font-weight-light" data-dismiss="modal" style="opacity: 1;">&times;</button>
        </div>
        <div class="modal-body border-0 pl-4 pr-4 pt-3 pb-3">
                <form class="w-100 uploader" action="{{route('event.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="type" value="webinar">
                    <div class="w-100">
                        <label class="font-gothamlight fontsize10px text-dark w-100"> Upload Thumbnail </label>
                         <div class="col-sm-5 border text-center border-radius10px p-2">
                            <div class="circle">
                               <img class="profile-pic img-fluid border-radius10px" id="profile-pic" src="{{ asset('images/Asset88.png') }}">
                             </div>
                             <div class="p-image">
                               <h6 class="upload-button text-blue fontsize13px font-gothamlight" id="upload-button">Upload Image</h6>
                                 <input class="file-upload" id="file-upload" name ="fileUploadweb" type="file" accept="image/*"/>       
                            </div>
                         </div>
                    </div>

                    <div class="w-100 mt-2">
                        <label class="font-gothamlight fontsize10px text-dark"> Post Title </label>
                        <input type="text" placeholder="Pst Title" name="titleweb" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                    </div>

                    <div class="w-100 mt-3">
                        <label class="font-gothamlight fontsize10px text-dark"> Post Description </label>
                        <textarea placeholder="Post Description" name="descriptionweb" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; resize: none; height: 100px;"></textarea>
                    </div>

                    <div class="w-100 mt-3 d-flex flex-wrap">
                        <div class="col-sm-6 pl-sm-0 pr-sm-4">
                        <label class="font-gothamlight fontsize10px text-dark"> Date </label>
                           <input type="date" placeholder="From" name="date_fromweb" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                       </div>
                       <div class="col-sm-6 pl-sm-4 pr-sm-0">
                            <label class="font-gothamlight fontsize10px text-dark"> Date </label>
                           <input type="date" placeholder="To" name="date_toweb" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                       </div>
                            
                    </div>

                     <div class="w-100 mt-3 d-flex flex-wrap">
                        <div class="col-sm-6 pl-sm-0 pr-sm-4">
                        <label class="font-gothamlight fontsize10px text-dark"> Time </label>
                           <input type="time" placeholder="Choose Time" name="timeweb" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                       </div>
                       <div class="col-sm-6 pl-sm-4 pr-sm-0">
                            <label class="font-gothamlight fontsize10px text-dark"> Presenter Name </label>
                           <input type="text" placeholder="Presenter Name" name="presenterweb" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                       </div>
                            
                    </div>

                     <div class="w-100 mt-3">
                        <label class="font-gothamlight fontsize10px text-dark"> Location </label>
                           <input type="text" placeholder="Location (if any)" name="locationweb" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                   </div>

                   <div class="w-100 mt-3">
                        <label class="font-gothamlight fontsize10px text-dark"> URL </label>
                           <input type="text" placeholder="Enter URL" name="urlweb" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                   </div>

                   <div class="w-100 mt-3">
                        <label class="font-gothamlight fontsize10px text-dark"> Category/Tags </label>
                           <input type="text" placeholder="Category/Tags" name="categoryweb" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                   </div>

                <div class="w-100 text-center p-3 pb-4">
                    <button type="submit" class="btn w-100 bg-orange border-radius25px pt-2 pb-2 text-uppercase font-gothambook text-white ml-auto mr-auto mt-4 hoverbtn" style="max-width: 380px;"> Add Webinar </button>
                </div>
            </form>
        </div>
       
      </div>
      
    </div>
  </div>
  <!-- Add Post -->




<!-- Training Modal -->
  <div class="modal fade" id="trainingsmodal" role="dialog">
    <div class="modal-dialog modal-lg" style=" max-width: 605px;">
    
      <!-- Modal content-->
      <div class="modal-content border-0 border-radius10px overflow-hiden">
        <div class="modal-header pl-4 pr-4 border-0" style="background: #4d8ac0;">
            <h6 class="modal-title text-left text-white font-gothambook">  Add Training </h6>
          <button type="button" class="close text-white font-weight-light" data-dismiss="modal" style="opacity: 1;">&times;</button>
        </div>
        <div class="modal-body border-0 pl-4 pr-4 pt-3 pb-3">
                <form class="w-100 uploader" action="{{route('event.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="type" value="training">
                    <div class="w-100">
                        <label class="font-gothamlight fontsize10px text-dark w-100"> Upload Thumbnail </label>
                         <div class="col-sm-5 border text-center border-radius10px p-2">
                            <div class="circle">
                               <img class="profile-pic img-fluid border-radius10px" id="profile-pic2" src="{{asset('images/Asset88.png') }}">
                             </div>
                             <div class="p-image">
                               <h6 class="upload-button text-blue fontsize13px font-gothamlight" id="upload-button2">Upload Image</h6>
                                 <input class="file-upload" id="file-upload2" name = "fileUploadtrain"type="file" accept="image/*"/>       
                            </div>
                         </div>
                    </div>

                    <div class="w-100 mt-2">
                        <label class="font-gothamlight fontsize10px text-dark"> Post Title </label>
                        <input placeholder="Post Title" name="titletrain" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                    </div>

                    <div class="w-100 mt-3">
                        <label class="font-gothamlight fontsize10px text-dark"> Post Description </label>
                        <textarea placeholder="Post Description" name="descriptiontrain" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; resize: none; height: 100px;"></textarea>
                    </div>

                <div class="w-100 text-center p-3 pb-4">
                    <button type="submit" class="btn w-100 bg-orange border-radius25px pt-2 pb-2 text-uppercase font-gothambook text-white ml-auto mr-auto mt-4 hoverbtn" style="max-width: 380px;"> Add Training </button>
                </div>
            </form>
        </div>
       
      </div>
      
    </div>
  </div>
  <!-- Virtual Event -->





<!-- Add Virtual Event -->
  <div class="modal fade" id="virtualevent" role="dialog">
    <div class="modal-dialog modal-lg" style=" max-width: 605px;">
    
      <!-- Modal content-->
      <div class="modal-content border-0 border-radius10px overflow-hiden">
        <div class="modal-header pl-4 pr-4 border-0" style="background: #4d8ac0;">
            <h6 class="modal-title text-left text-white font-gothambook">  Add Clinical </h6>
          <button type="button" class="close text-white font-weight-light" data-dismiss="modal" style="opacity: 1;">&times;</button>
        </div>
        <div class="modal-body border-0 pl-4 pr-4 pt-3 pb-3">
                <form class="w-100 uploader" action="{{route('event.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="type" value="clinical">

                    <div class="w-100">
                        <label class="font-gothamlight fontsize10px text-dark w-100"> Upload Thumbnail </label>
                        <div class="col-sm-5 border text-center border-radius10px p-2">
                            <div class="circle">
                               <img class="profile-pic img-fluid border-radius10px" id="profile-pic3" src="{{asset('images/Asset88.png') }}">
                             </div>
                             <div class="p-image">
                               <h6 class="upload-button text-blue fontsize13px font-gothamlight" id="upload-button3">Upload Image</h6>
                                 <input class="file-upload" id="file-upload3" name="fileUploadvir" type="file" accept="image/*"/>       
                            </div>
                         </div>
                    </div>

                    <div class="w-100 mt-2">
                        <label class="font-gothamlight fontsize10px text-dark"> Post Title </label>
                        <input placeholder="Post Title" name="titlevir" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                    </div>

                    <div class="w-100 mt-3">
                        <label class="font-gothamlight fontsize10px text-dark"> Post Description </label>
                        <textarea placeholder="Post Description" name="descriptionvir" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; resize: none; height: 100px;"></textarea>
                    </div>

                   <div class="w-100 mt-3 d-flex flex-wrap">
                        <div class="col-sm-6 pl-sm-0 pr-sm-4">
                        <label class="font-montserrat fontsize10px text-dark"> Date </label>
                           <input type="date" placeholder="From" name="date_fromvir" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                       </div>
                       <div class="col-sm-6 pl-sm-4 pr-sm-0">
                            <label class="font-montserrat fontsize10px text-darkvir"> Date </label>
                           <input type="date" placeholder="To" name="date_tovir" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                       </div>
                            
                    </div>

                     <div class="w-100 mt-3 d-flex flex-wrap">
                        <div class="col-sm-6 pl-sm-0 pr-sm-4">
                        <label class="font-gothamlight fontsize10px text-dark"> Time </label>
                           <input type="time" placeholder="Choose Time" name="timevir" class="font-montserrat w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                       </div>
                       <div class="col-sm-6 pl-sm-4 pr-sm-0">
                            <label class="font-montserrat fontsize10px text-dark"> Presenter Name </label>
                           <input type="text" placeholder="Presenter Name" name="presentervir" class="font-montserrat w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                       </div>
                            
                    </div>

                     <div class="w-100 mt-3">
                        <label class="font-montserrat fontsize10px text-dark"> Location </label>
                           <input type="text" placeholder="Location (if any)" name="locationvir" class="font-montserrat w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                   </div>

                   <div class="w-100 mt-3">
                        <label class="font-montserrat fontsize10px text-dark"> URL </label>
                           <input type="text" placeholder="Enter URL" name="urlvir" class="font-montserrat w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                   </div>

                   <div class="w-100 mt-3">
                        <label class="font-montserrat fontsize10px text-dark"> Category/Tags </label>
                           <input type="text" placeholder="Category/Tags" name="categoryvir" class="font-montserrat w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                   </div>

                <div class="w-100 text-center p-3 pb-4">
                    <button type="submit" class="btn w-100 bg-orange border-radius25px pt-2 pb-2 text-uppercase font-montserrat text-white ml-auto mr-auto mt-4 hoverbtn" style="max-width: 380px;"> Add Virtual Event </button>
                </div>
            </form>
        </div>
       
      </div>
      
    </div>
  </div>
  <!-- Add Training -->





@endsection




@section("afterScript")
<script>

</script>
@endsection