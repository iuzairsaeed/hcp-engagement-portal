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
                        
                       <div class="col-sm-12 mt-4">
                                <div class="w-100 border-radius10px pt-4 pb-5 pl-4 pr-4 text-center bg-white">
                                                                            <h6 class="font-gothambook text-darkgray mb-3">We Focus On Problems &amp; Opportunities</h6>
                             
                                        <p class="font-gothambook text-gray fontsize15px">We design, implement and launch digital and technology solutions that start with a deep understanding of business problems and opportunities. Our POF framework helps achieve alignment with st</p>
                                                                                     
                                        <div class="w-100 mt-4 d-flex flex-wrap">
                                                <div class="col-md-12"><h6 class="font-gothambook text-darkgray text-left fontweight500 mb-3 w-100">Why Our Clients Love Us</h6></div>
                                                                                                  
                                                                                                  <div class="col-sm-6 text-left ">
                                                        <h6 class="font-gothambook text-darkgray">2  We dig in</h6>
                                                         <p class="font-gothambook text-left text-gray fontsize14px">We don’t just scratch the surface. We probe and analyze, looking to figure out exactly where and how a project or campaign can achieve dramatic results. Success is not when we complete our pr</p>
                                                 </div>
                                                                                                                                                   
                                                                                                  <div class="col-sm-6 text-left ">
                                                        <h6 class="font-gothambook text-darkgray">3  We do more with less</h6>
                                                         <p class="font-gothambook text-left text-gray fontsize14px">Regardless of how small or large an organization is, budgets matter. Our goal is to optimize costs so that more can be achieved, in less. Our ability to offer a blend of onshore, nearshore, a</p>
                                                 </div>
                                                                                                                                                   
                                                                                                  <div class="col-sm-6 text-left ">
                                                        <h6 class="font-gothambook text-darkgray">4 We create possibilities</h6>
                                                         <p class="font-gothambook text-left text-gray fontsize14px">Everything we do starts with a focus on how we can build capabilities and experiences that can create more possibilities. Each successful outcome creates opportunities that can then be pursue</p>
                                                 </div>
                                                                                                                                                   
                                                                                                  <div class="col-sm-6 text-left ">
                                                        <h6 class="font-gothambook text-darkgray">5 We are always around to help</h6>
                                                         <p class="font-gothambook text-left text-gray fontsize14px">Because our services span marketing, technology, and learning, we can deliver a “one-stop” shop experience that builds on the knowledge we have of our client’s businesses. We don’t walk away.</p>
                                                 </div>
                                                                                                  
                                            
                                        </div>
                                        
                                    
                                </div>
                        </div>
                        </div>
                   

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->



@endsection
