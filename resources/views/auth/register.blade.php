@extends('layouts.app')

@section('content')


   <div class="container-fluid">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-12 col-md-12 col-12">

                <div class="card o-hidden border-0 my-2 h-97">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row h-100">
                            <!-- left side -->
                            <div class="col-lg-8 col-12 bg-login-image pr-0 d-flex align-items-center">
                                <div class="w-100 text-center mobile-h" style="padding: 5em 2em;height: 60%;">
                                    <h1 class="text-white font-weight800 font-gothambold">HCP <br/> ENGAGEMENT PORTAL</h1>
                                    <h2 class="text-white text-uppercase font-weight800 font-gothambold mt-4">Welcome Back!</h2>
                                    <p class="text-white fontsize21px maxwidth437px font-gothamlight m-auto">To keep connected with us please login with your personal infos</p>
                                </div>
                            </div>
                            <!-- left side -->
                            <div class="col-lg-4 col-12 pl-5 pb-5 pr-5 pt-4 h-100" style="overflow-y: scroll;">
                                <div class="mb-5 logo-cs" style="top: -7em;"><img src="{{asset('images/Asset3.png')}}" width="130"></div>
                                <div class="col-md-12 pt-4">
                                    <div class="text-center">
                                         <ul class="nav nav-tabs tabs-login border-0 justify-content-center" role="tablist">
                                                 <li class="nav-item">
                                                  <a class="nav-link font-gothamlight" href="{{url('/login')}}">Sign in</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link active font-gothammedium" href="{{url('/register')}}">Sign up</a>
                                                </li>
                                                 <!-- <li class="nav-item">
                                                  <a class="nav-link" data-toggle="tab" href="#signup">Sign Up</a>
                                                </li> -->
                                         </ul>
                                    </div>

                                     <div class="tab-content mt-4">

                                              <form class="form" method="POST" id="userForm" action="{{ route('users.store') }}" enctype="multipart/form-data">
                                                @csrf
                                                    <div class="form-group form-control border-radius25px bg-gray border-gray pt-2 pb-2 h-100 d-flex align-items-center">
                                                        <img src="{{asset('images/Asset4.png')}}" width="11">
                                                        <input type="text" id="name" class="border-0 outline-none bg-transparent pl-3 pr-2 font-gothamlight fontsize13px col-md-12 text-darkgray" name="name"
                                                            placeholder="Name">
                                                      </div>
                                                    <div class="form-group form-control border-radius25px bg-gray border-gray pt-2 pb-2 h-100 d-flex align-items-center">
                                                        <img src="{{asset('images/Asset14.png')}}" width="13">
                                                        <input type="email" id="email" name="email" class="border-0 outline-none bg-transparent pl-3 pr-2 font-gothamlight fontsize13px col-md-12 text-darkgray" placeholder="Email">
                                                       
                                                    </div>
                                                     <div class="form-group form-control border-radius25px bg-gray border-gray pt-2 pb-2 h-100 d-flex align-items-center">
                                                        <img src="{{asset('images/Asset9.png')}}" width="10">
                                                        <input type="text" name="specialty" class="border-0 outline-none bg-transparent pl-3 pr-2 font-gothamlight fontsize13px col-md-12 text-darkgray" placeholder="Specialty">
                                                    </div>
                                                    <div class="form-group form-control border-radius25px bg-gray border-gray pt-2 pb-2 h-100 d-flex align-items-center">
                                                        <img src="{{asset('images/Asset8.png')}}" width="13">
                                                        <input type="tel" name="phone" id="phone" class="border-0 outline-none bg-transparent pl-3 pr-2 font-gothamlight fontsize13px col-md-12 text-darkgray" placeholder="Phone">
                                                    </div>
                                                    <div class="form-group form-control border-radius25px bg-gray border-gray pt-2 pb-2 h-100 d-flex align-items-center">
                                                        <img src="{{asset('images/Asset7.png')}}" width="11">
                                                        <input type="text" name="location" class="border-0 outline-none bg-transparent pl-3 pr-2 font-gothamlight fontsize13px col-md-12 text-darkgray" placeholder="Location">
                                                    </div>
                                                    
                                                    <div class="form-group form-control border-radius25px bg-gray border-gray pt-2 pb-2 h-100 d-flex align-items-center">
                                                        <img src="{{asset('images/Asset49.png')}}" width="10">
                                                        <input type="password" name="pmdc_code" class="border-0 outline-none bg-transparent pl-3 pr-2 font-gothamlight fontsize13px col-md-12 text-darkgray" placeholder="PMDC Code">
                                                    </div>

                                                    <div class="form-group form-control border-radius25px bg-gray border-gray pt-2 pb-2 h-100 d-flex align-items-center">
                                                        <img src="{{asset('images/Asset48.png')}}" width="11" height="11">
                                                        <input type="password" name="password" id="password" class="border-0 outline-none bg-transparent pl-3 pr-2 font-gothamlight fontsize13px col-md-12 text-darkgray" placeholder="Password" required>
                                                         
                                                    </div>
                                                  
                                                    <button type="submit" class="btn bg-orange text-uppercase border-radius25px text-white btn-block outline-none fontsize15px letterspacing1px pt-2 pb-2 mt-4 hoverbtn1 border border-orange font-gothamlight" type="submit">
                                                        Sign Up
                                                    </button>
                                                 
                                                </form>
                                         </div>
                                        <!-- signUp -->
                                    
                
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>






            
               <!--  <form class="form" method="POST" id="userForm" action="{{ route('users.store') }}" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="label-control" for="vendor_no">Name </label>
                                <input type="text" id="name" class="form-control border-primary" name="name" placeholder="Enter Name" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="label-control" for="vendor_no">User Name </label>
                                <input type="text" id="phone" class="form-control border-primary" name="username" placeholder="Enter User Name" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="label-control" for="vendor_no">Email </label>
                                <input type="email" id="email" class="form-control border-primary" name="email" placeholder="Enter User Email" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="label-control" for="vendor_no">Password </label>
                                <input type="password" id="password" class="form-control border-primary" name="password" placeholder="Enter User Password" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="label-control" for="vendor_no">Password Confirmation</label>
                                <input type="password" id="con_pass" class="form-control border-primary" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="label-control" for="vendor_no">Phone No. </label>
                                <input type="text" id="phone" class="form-control border-primary" name="phone" placeholder="Enter User Phone Number" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="label-control">Role</label>
                                <select name="roles[]" id="role" value="{{old('role')}}" class="form-control border-primary" >
                                </select>
                            </div>
                        </div>
                  
                        
                    </div>

                    <div class="form-actions right">
                        <button type="button" class="btn btn-danger mr-1">
                            <i class="icon-trash"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-success">
                            <i class="icon-note"></i> Save
                        </button>
                    </div>
                </form> -->
          

          
       


@endsection
@section('afterScript')
<script>
    $('#role').select2({
        placeholder: "Search Role",
        allowClear: true,
        ajax: {
            url: "{{ route('role.get-role') }}",
            type: "GET",
            dataType: 'json',
            data: function (params) {
                return {
                    search: params.term
                };
            },
            processResults: function (response) {
                return {
                    results: response
                };
            },
            cache: true
        }
    });
</script>
@endsection
