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
                                     <h6 class="mb-1 col-sm-6 font-gothambook text-darkgray ml-2"> FAQs </h6>
                                 </div>


                                 <div class="col-sm-12 mt-4">
                                <div class="w-100 border-radius10px pt-4 pb-5 pl-4 pr-4 text-center bg-white">

                                      <div id="accordion">
                                          <div class="card text-left border-0">
                                              <div class="card-header bg-transparent">
                                                <a class="card-link font-gothambook text-dark fontweight500 mb-3 collapsed" data-toggle="collapse" href="#collapse1" aria-expanded="false">
                                                     What Is An Sop ?
                                                </a>
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


@endsection