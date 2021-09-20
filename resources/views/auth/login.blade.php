@extends('layouts.app')

@section('content')
<section id="login">

        <div class="container-fluid">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-12 col-md-12">

                <div class="card o-hidden border-0 my-2 h-97">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row h-100">
                            <!-- left side -->
                            <div class="col-lg-8 col-sm-7 bg-login-image pr-0 d-flex align-items-center">
                                <div class="w-100 text-center mobile-h" style="padding: 5em 2em;height: 60%;">
                                    <h1 class="text-white font-gothambold font-weight800">HCP <br/> ENGAGEMENT PORTAL</h1>
                                    <h2 class="text-white font-gothambold font-weight800 mt-4"> Welcome Back!</h2>
                                    <p class="text-white font-gothamlight fontsize21px maxwidth437px m-auto">Helping you connect, share and learn with HCPs around the world</p>
                                </div>
                            </div>
                            <!-- left side -->
                            <div class="col-lg-4 col-sm-5 p-lg-5 p-sm-4 p-5">
                                <div class="logo-cs mb-5" style=""><img src="{{asset('images/Asset3.png')}}" width="130"></div>
                                <div class="col-md-12 pt-5">
                                    <div class="text-center">
                                         <ul class="nav nav-tabs tabs-login border-0 justify-content-center" role="tablist">
                                                 <li class="nav-item">
                                                  <a class="nav-link active font-gothammedium" href="{{url('/login')}}">Sign in</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link font-gothamlight" href="{{url('/register') }}">Sign up</a>
                                                </li>
                                              
                                         </ul>
                                    </div>

                                    <div class="tab-content mt-4 pt-2">
                                 
                                        <!-- sign In -->
                                         <!-- <div id="signin" class="tab-pane active"> -->
                                                <form class="user" method="POST" action="{{ route('login') }}">
                                                    @csrf
                                                    <div class="form-group form-control border-radius25px bg-gray border-gray pt-1 pb-1 h-100 d-flex align-items-center">
                                                        <img src="{{asset('images/Asset10.png')}}" width="13">
                                                        <input type="email" name="username" class="form-control form-control-lg{{ $errors->has('username') ? ' is-invalid' : '' }} border-0 outline-none bg-transparent pl-3 pr-2 font-gothamlight text-darkgray fontsize13px col-md-12" placeholder="Email" value="{{ old('username') }}" id="username">

                                                        </div>
                                                         @if ($errors->has('username'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('username') }}</strong>
                                                            </span>
                                                        @endif
                                                    <div class="form-group form-control border-radius25px bg-gray border-gray pt-1 pb-1 h-100 align-items-center d-flex">
                                                        <img src="{{asset('images/Asset5.png')}}" width="10" >
                                                        <input type="password" name="password" class="form-control form-control-lg{{ $errors->has('password') ? ' is-invalid' : '' }} border-0 outline-none bg-transparent pl-3 pr-2 font-gothamlight fontsize13px col-md-12 text-darkgray"
                                                           name="password" id="inputPass" placeholder="Password">
                                                    </div>
                                                   
                                                          @if ($errors->has('password'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('password') }}</strong>
                                                                </span>
                                                            @endif
                                                    <div class="w-100 d-flex flex-wrap">
                                                        <div class="form-group col-sm-6">
                                                            <div class="custom-control custom-checkbox small">
                                                                <input type="checkbox" class="custom-control-input" name="remember" id="customCheck">
                                                                <label class="custom-control-label fontsize11px font-gothamlight text-darkgray" for="customCheck">Remember
                                                                    me</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 text-right p-0">
                                                             <a class="small text-orange fontsize11px font-gothamlight" href={{url('resetpassword')}}>Forgot Password?</a>
                                                        </div>
                                                    </div>
                                                    <button class="btn bg-orange text-uppercase border-radius25px text-white btn-block outline-none fontsize14px letterspacing1px pt-2 pb-2 mt-4 hoverbtn1 border border-orange font-gothamlight" type="submit">
                                                        Sign In
                                                    </button>
                                                 
                                                </form>

                                    </div>
                
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


                        
</section>
@endsection

@section('afterScript')
<script src="{{ asset('js/app.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="{{asset('app-assets/vendors/js/select2/select2.js')}}"></script>
<script src="{{asset('app-assets/js/toastr.js')}}"></script>
<script src="{{asset('app-assets/js/sweet-alerts.js')}}"></script>
<script src="{{asset('app-assets/js/toastr.min.js')}}"></script>
@endsection