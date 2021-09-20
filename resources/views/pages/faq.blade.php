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
                            
                                 <div class="w-100 d-flex flex-wrap mt-3">
                                     <h6 class="mb-1 col-sm-6 font-gothambook text-darkgray pl-3 m-auto"> FAQs </h6>
                                     <div class="text-right pl-3 pr-3 col-sm-6">
                                      <a href="#" class="bg-orange border-radius25px text-uppercase border text-white font-gothambook pl-4 pr-4 pt-2 pb-2 fontsize13px border-orange d-inline-block hoverbtn" data-toggle="modal" data-target="#addpost"> Add Faq</a>
                                    </div>
                                 </div>


                                 <div class="col-sm-12 mt-4">
                                <div class="w-100 border-radius10px pt-4 pb-5 pl-4 pr-4 text-center bg-white">

                                      <div id="accordion">
                                          <div class="card text-left border-0">
                                              <div class="card-header bg-transparent">
                                                <a class="card-link font-gothambook text-dark fontweight500 mb-3 collapsed" data-toggle="collapse" href="#collapse1" aria-expanded="false">
                                                     What Is An Sop ?
                                                </a>
                                                <div class="float-right col-auto p-0"><a href="#" class="text-black fontsize14px"><i class="fa fa-pencil"></i></a><button href="#" class="text-black fontsize14px bg-transparent border-0 ml-1"><i class="fa fa-trash"></i></button> </div>
                                              </div>
                                              <div id="collapse1" class="collapse" data-parent="#accordion" style="">
                                                <div class="card-body font-gothamlight">
                                                  Standard Operating Procedure (SOP) is a certain type of document that describes in a step-by-step 
                                                </div>
                                              </div>
                                            </div>
                                                                                       <div class="card text-left border-0">
                                              <div class="card-header bg-transparent">
                                                <a class="card-link font-gothambook text-dark fontweight500 mb-3" data-toggle="collapse" href="#collapse3">
                                                     What Is 21 Cfr Part 11 ?
                                                </a>
                                                <div class="float-right col-auto p-0"><a href="#" class="text-black fontsize14px"><i class="fa fa-pencil"></i></a><button href="#" class="text-black fontsize14px bg-transparent border-0 ml-1"><i class="fa fa-trash"></i></button> </div>
                                              </div>
                                              <div id="collapse3" class="collapse" data-parent="#accordion">
                                                <div class="card-body font-gothamlight">
                                                  
													Title 21 CFR Part 11 of the Code of Federal Regulations deals with the Food and Drug Administration (FDA) guidelines on electronic records and electronic signatures in the United States. Part 11, as it is commonly called, defines the criteria under which electronic records and electronic signatures are considered to be trustworthy, reliable and equivalent to paper records.

                                                </div>
                                              </div>
                                            </div>
                                                


                                            <div class="card text-left border-0">
                                              <div class="card-header bg-transparent">
                                                <a class="card-link font-gothambook text-dark fontweight500 mb-3" data-toggle="collapse" href="#collapse4">
                                                     What Is An Sop  2?
                                                </a>
                                                <div class="float-right col-auto p-0"><a href="#" class="text-black fontsize14px"><i class="fa fa-pencil"></i></a><button href="#" class="text-black fontsize14px bg-transparent border-0 ml-1"><i class="fa fa-trash"></i></button> </div>
                                              </div>
                                              <div id="collapse4" class="collapse" data-parent="#accordion">
                                                <div class="card-body font-gothamlight">
                                                  Standard Operating Procedure (SOP) is a certain type of document that describes in a step-by-step 
                                                </div>
                                              </div>
                                            </div>
                                           
                                            <div class="card text-left border-0">
                                              <div class="card-header bg-transparent">
                                                <a class="card-link font-gothambook text-dark fontweight500 mb-3" data-toggle="collapse" href="#collapse5">
                                                     What Is 22 Cfr Part XYZ ?
                                                </a>
                                                <div class="float-right col-auto p-0"><a href="#" class="text-black fontsize14px"><i class="fa fa-pencil"></i></a><button href="#" class="text-black fontsize14px bg-transparent border-0 ml-1"><i class="fa fa-trash"></i></button> </div>
                                              </div>
                                              <div id="collapse5" class="collapse" data-parent="#accordion">
                                                <div class="card-body font-gothamlight">
                                                  
												Title 21 CFR Part 11 of the Code of Federal Regulations deals with the Food and Drug Administration (FDA) guidelines on electronic records and electronic signatures in the United States. Part 11, as it is commonly called, defines the criteria under which electronic records and electronic signatures are considered to be trustworthy, reliable and equivalent to paper records.

                                                </div>
                                              </div>
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




     <!-- Add Post Modal -->
  <div class="modal fade" id="addpost" role="dialog">
    <div class="modal-dialog modal-lg" style=" max-width: 605px;">
    
      <!-- Modal content-->
      <div class="modal-content border-0 border-radius10px overflow-hiden">
        <div class="modal-header pl-4 pr-4 border-0" style="background: #4d8ac0;">
            <h6 class="modal-title text-left text-white font-gothambook"> Add Faq's </h6>
          <button type="button" class="close text-white font-weight-light" data-dismiss="modal" style="opacity: 1;">&times;</button>
        </div>
        <div class="modal-body border-0 pl-4 pr-4 pt-3 pb-3">
                <form class="w-100 uploader" action="" id="postForm" method="post" enctype="multipart/form-data">
                     @csrf
                    
                    <div class="w-100 mt-2">
                        <label class="font-gothamlight fontsize10px text-dark"> Post Title </label>
                        <input placeholder="Post Title" name="title" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; ">
                    </div>

                    <div class="w-100 mt-3">
                        <label class="font-gothamlight fontsize10px text-dark"> Post Description </label>
                        <textarea placeholder="Post Description" name="description" class="font-gothamlight w-100 border-radius10px fontsize11px p-3 bg-gray border-0 outline-none" style="box-shadow: 2px 3px 11px #d2d2d2; resize: none; height: 100px;"></textarea>
                    </div>
                <div class="w-100 text-center p-3 pb-4">
                    <button type="button" onclick="submitPost()" class="btn w-100 bg-orange border-radius25px pt-2 pb-2 text-uppercase font-gothambook text-white ml-auto mr-auto mt-4 hoverbtn" style="max-width: 380px;"> Add Faqs </button>
                </div>
            </form>
        </div>
       
      </div>
      
    </div>
  </div>
  <!-- Add Post -->

@endsection