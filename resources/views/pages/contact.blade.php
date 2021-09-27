@extends('layouts.app')

@section('content')


<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

              <div class="container-fluid pr-sm-0 pr-sm-4 pl-sm-4 pl-1 pb-4">
                    <div class="row">
                    
                    <div class="col-sm-12 mt-4">
                            <div class="w-100 border-radius10px pt-4 pb-5 pl-4 pr-4 text-center bg-white">
                                    <h5 class="text-darkgray font-gothambook mb-4">It starts with a problem or an opportunity</h5>
                                    
                                    <div class="w-100 d-flex flex-wrap">
                                            <div class="col-sm-4 text-center">
                                                <img src="{{asset('images/Asset66.png')}}" class="mb-3" width="25">
                                                 <h6 class="font-gothambook text-darkgray mb-1">Contact Address</h6>
                                                 <p class="font-gothambook text-gray fontsize14px">157 Columbus Avenue 4th Floor <br/> New York, NY 10023 USA</p>
                                            </div>
                                            <div class="col-sm-4 text-center">
                                                <img src="{{asset('images/Asset67.png')}}" class="mb-3" width="35">
                                                 <h6 class="font-gothambook text-darkgray mb-1">Let's Talk</h6>
                                                 <p class="font-gothambook text-gray fontsize14px">Phone (US): +1 (646) 374-0260 <br/> Phone (PK): +92 (21) 34536712/13</p>
                                            </div>
                                            <div class="col-sm-4 text-center">
                                                <img src="{{asset('images/Asset68.png')}}" class="mb-3" width="45">
                                                 <h6 class="font-gothambook text-darkgray mb-1">Email Us</h6>
                                                 <p class="font-gothambook text-gray fontsize14px">info@celeritasdigital.com</p>
                                            </div>
                                    </div>

                                      <form class="w-100 contact-form" method="POST" action="{{ route('support.store') }}" >
                                        @csrf
                                        <div class="w-100 d-flex flex-wrap mt-2" style="padding: 0px 10%;">
                                            <div class="form-group col-sm-6 text-left">
                                                <label class="text-darkgray font-gothambook fontsize12px ">First Name*</label>
                                                <input type="text" required="required" class="border w-100 bg-gray border-radius25px outline-none font-gothambook fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" name="fname" placeholder="First Name"/>
                                            </div>
                                            <div class="form-group col-sm-6 text-left">
                                                <label class="text-darkgray font-gothamlight fontsize12px">Last Name*</label>
                                                <input type="text" required="required" class="border w-100 bg-gray border-radius25px outline-none font-gothambook fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" name="lname" placeholder="Last Name" />
                                            </div>
                                            <div class="form-group col-sm-6 text-left">
                                                <label class="text-darkgray font-gothambook fontsize12px">Email*</label>
                                                <input type="email" required="required" class="border w-100 bg-gray border-radius25px outline-none font-gothambook fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" name="email" placeholder="Email" />
                                            </div>
                                             <div class="form-group col-sm-6 text-left">
                                                <label class="text-darkgray font-gothambook fontsize12px">Phone Number*</label>
                                                <input type="Number" required="required" class="border w-100 bg-gray border-radius25px outline-none font-gothambook fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" name="phone" placeholder="Phone Number" />
                                            </div>
                                            <div class="form-group col-sm-12 text-left">
                                                <label class="text-darkgray font-gothambook fontsize12px">Message*</label>
                                                <textarea required="required" class="border w-100 bg-gray border-radius25px outline-none font-gothambook fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" name="message" placeholder="Your Message" style="height: 60px;resize: none"></textarea>
                                            </div>
                                            <div class="w-100 text-center mt-3">
                                                    <button type="submit" class="btn bg-orange text-white nextBtn text-uppercase border-radius25px w-100 font-gothambook hoverbtn" style="max-width: 190px;">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>

                                    <div class="w-100 text-center bg-gray pt-3 pb-3" style="margin-top: -4px">
                                            <h6 class="font-gothambook text-darkgray mb-2">On Social Networks</h6>
                                            <a href="https://www.facebook.com/celeritassolutionsTUJU" class="pl-1 pr-1"><img src="{{asset('images/Asset69.png')}}" width="25"></a>
                                            <a href="https://www.linkedin.com/company/celeritas-digital-solutions/mycompany/" class="pl-1 pr-1"><img src="{{asset('images/Asset70.png')}}" width="25"></a>
                                            <a href="https://www.youtube.com/user/CeleritasSolutions" class="pl-1 pr-1"><img src="{{asset('images/Asset71.png')}}" width="25"></a>
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
