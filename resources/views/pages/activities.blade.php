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
                                      <div class="col-sm-4 offset-sm-8 col-12 text-right mt-up">
                                         <a href="#" class="bg-orange border-radius25px text-uppercase border text-white font-gothambook pl-4 pr-4 pt-2 pb-2 fontsize13px border-orange d-inline-block hoverbtn" data-toggle="modal" data-target="#addgami"> Add Gamification</a>
                                    </div>

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
                                  <div class="col-sm-4 offset-sm-8 col-12 text-right mt-up">
                                         <a href="#" class="bg-orange border-radius25px text-uppercase border text-white font-gothambook pl-4 pr-4 pt-2 pb-2 fontsize13px border-orange d-inline-block hoverbtn" data-toggle="modal" data-target="#addclinical">Create Activity </a>
                                         </div>


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


     <!-- Add Gamification -->
  <div class="modal fade" id="addgami" role="dialog">
    <div class="modal-dialog modal-lg" style=" max-width: 605px;">
    
      <!-- Modal content-->
      <div class="modal-content border-0 border-radius10px overflow-hiden">
        <div class="modal-header pl-4 pr-4 border-0" style="background: #4d8ac0;">
            <h6 class="modal-title text-left text-white font-gothambook">  Add Gamification </h6>
          <button type="button" class="close text-white font-weight-light" data-dismiss="modal" style="opacity: 1;">&times;</button>
        </div>
        <div class="modal-body border-0 pl-4 pr-4 pt-3 pb-3">
                <form class="w-100 uploader" action="" method="post"  enctype="multipart/form-data">
                  @csrf
                    <div class="w-100">
                        <label class="font-gothamlight fontsize10px text-dark w-100"> Upload Thumbnail </label>
                        <div class="col-sm-5 border text-center border-radius10px p-2">
                            <div class="circle">
                               <img class="profile-pic img-fluid border-radius10px" id="profile-pic" src="{{ asset ('images/Asset88.png') }}">
                             </div>
                             <div class="p-image">
                               <h6 class="upload-button text-blue fontsize13px font-montserrat" id="upload-button">Upload Image</h6>
                                 <input class="file-upload" id="file-upload"  name="fileUpload" type="file" accept="image/*"/>       
                            </div>
                         </div>
                    </div>  

                    <div class="w-100 mt-2">
                        <label class="font-gothamlight fontsize10px text-dark"> Post Title </label>
                        <input placeholder="Post Title" name="title" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                    </div>

                    <div class="w-100 mt-3">
                        <label class="font-gothamlight fontsize10px text-dark"> Post Description </label>
                        <textarea placeholder="Post Description" name="description" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; resize: none; height: 100px;"></textarea>
                    </div>

                    <div class="w-100 mt-3">
                        <label class="font-gothamlight fontsize10px text-dark"> Attachment <span class="font-weight-light"> (PDF or PPT)</span> </label>
                            <input type="file" name="fileUpload2" class="input-file">
                            <div class="input-group col-sm-6 p-0">
                                
                                <input type="text" class="fileinput font-gothamlight w-100 bg-blue fontsize10px bg-blue p-3 border-0 border-radius10px text-white" disabled placeholder="Choose File">
                                <span class="input-group-btn position-absolute" style="right: 0; top: 1px;">
                                    <button class="upload-field btn text-white rounded-0 border-0 bg-transparent fontsize22px outline-none" type="button"><i class="fa fa-paperclip"></i> </button>
                                </span>
                            </div>
                    </div>

                <div class="w-100 text-center p-3 pb-4">
                    <button type="submit" class="btn w-100 bg-orange border-radius25px pt-2 pb-2 text-uppercase font-gothamlight text-white ml-auto mr-auto mt-4 hoverbtn" style="max-width: 380px;"> Add Gamification </button>
                </div>
            </form>
        </div>
       
      </div>
      
    </div>
  </div>
  <!-- Add Post -->



  <!-- add Clinical -->
  <div class="modal fade" id="addclinical" role="dialog">
    <div class="modal-dialog modal-lg" style=" max-width: 605px;">
    
      <!-- Modal content-->
      <div class="modal-content border-0 border-radius10px overflow-hiden">
        <div class="modal-header pl-4 pr-4 border-0" style="background: #4d8ac0;">
            <h6 class="modal-title text-left text-white font-montserrat font-weight-light">  Add Clinical </h6>
          <button type="button" class="close text-white font-weight-light" data-dismiss="modal" style="opacity: 1;">&times;</button>
        </div>
        <div class="modal-body border-0 pl-4 pr-4 pt-3 pb-3">
                <form class="w-100 uploader" action="" method="post"  enctype="multipart/form-data">
                  @csrf
                    <div class="w-100">
                        <label class="font-montserrat fontsize10px text-dark w-100"> Upload Thumbnail </label>
                        <div class="col-sm-5 border text-center border-radius10px p-2">
                            <div class="circle">
                               <img class="profile-pic img-fluid border-radius10px" id="profile-pic2" src="{{asset('images/Asset88.png') }}">
                             </div>
                             <div class="p-image">
                               <h6 class="upload-button text-blue fontsize13px font-montserrat" id="upload-button2">Upload Image</h6>
                                 <input class="file-upload" id="file-upload2" name="fileUploadclinic" type="file" accept="image/*"/>       
                            </div>
                         </div>
                    </div>

                    <div class="w-100 mt-2">
                        <label class="font-montserrat fontsize10px text-dark"> Post Title </label>
                        <input placeholder="Post Title" name="titleclinic" class="font-montserrat w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                    </div>

                    <div class="w-100 mt-3">
                        <label class="font-montserrat fontsize10px text-dark"> Post Description </label>
                        <textarea placeholder="Post Description" name="descriptionclinic" class="font-montserrat w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; resize: none; height: 100px;"></textarea>
                    </div>

                    <div class="w-100 mt-3">
                        <label class="font-montserrat fontsize10px text-dark"> Attachment <span class="font-weight-light"> (PDF or PPT)</span> </label>
                            <input type="file" name="fileUpload2clinic" class="input-file">
                            <div class="input-group col-sm-6 p-0">
                                
                                <input type="text" class="fileinput font-montserrat w-100 bg-blue fontsize10px bg-blue p-3 border-0 border-radius10px text-white" disabled placeholder="Choose File">
                                <span class="input-group-btn position-absolute" style="right: 0; top: 1px;">
                                    <button class="upload-field btn text-white rounded-0 border-0 bg-transparent fontsize22px outline-none" type="button"><i class="fa fa-paperclip"></i> </button>
                                </span>
                            </div>
                    </div>

                <div class="w-100 text-center p-3 pb-4">
                    <button type="submit" class="btn w-100 bg-orange border-radius25px pt-2 pb-2 text-uppercase font-montserrat text-white ml-auto mr-auto mt-4 hoverbtn" style="max-width: 380px;"> Add Clinical </button>
                </div>
            </form>
        </div>
       
      </div>
      
    </div>
  </div>
  <!-- Add Clinical -->




      
 

            


@endsection

