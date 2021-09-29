
 <div class="container-fluid">
                <div class="row">
                <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-3 static-top shadow col-sm-12">
                        <div><a href="{{ url('/dashboard') }}"><img src="{{asset('images/Asset3.svg')}}" width="130"></a></div>
                         <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between border-left p-2 ml-4 col-sm-4 d-sm-block d-none" style="border-width: 2px !important;">
                            <h1 class="h5 mb-0 text-dark font-weight-light ml-2 font-gothammedium ">{{  Str::upper(Request::segment(1) == "profileShow" ? "Profile Edit" : Request::segment(1) ) }}
                             </h1>
                        </div>
                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search " method="GET" action='{{route('search')}}'>
                            @csrf
                            <div class="input-group border-radius25px bg-lightgray border border-orange">
                                <input type="text" class="form-control font-gothamlight bg-transparent border-0 small outline-none pl-4" placeholder="Search..."
                                    value="{{ session('search') }}" aria-label="Search" name="search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none d-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                placeholder="Search for..." aria-label="Search"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>



                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <img src="{{asset('images/Asset14.png')}}" width="17">
                                    <!-- Counter - Messages -->
                                    <!-- <span class="badge bg-blue text-white badge-counter">7</span> -->
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown" id="testss">
                                    <h6 class="dropdown-header font-gothamlight" >
                                        Message Center
                                    </h6>


                                   {{-- <a class="dropdown-item d-flex align-items-center" href="#" id="tests">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                                alt="">
                                            <div class="status-indicator bg-warning"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Last month's report looks great, I am very happy with
                                                the progress so far, keep up the good work!</div>
                                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                        </div>
                                    </a>  --}}
                                  

                                    <a class="dropdown-item text-center small text-gray-500" href="{{ route('chatroom') }}">Read More Messages</a>
                                </div>
                            </li>


                               <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1" >
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     <img src="{{asset('images/Asset13.png')}}" width="15   ">
                                     
                                    <!-- Counter - Alerts -->
                                    <!-- <span class="badge bg-blue text-white badge-counter">3+</span> -->
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in notify-sec"
                                    aria-labelledby="alertsDropdown" >
                                    <h6 class="dropdown-header font-gothamlight">
                                        Alerts Center
                                    </h6>
                                    
                                    @livewire('notification-list')
                                    
                                </div>
                            </li>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow d-sm-block d-none">
                                <a class="nav-link dropdown-toggle" href="{{route('profile.show')}}" id="userDropdown" role="button">
                                     <img class="img-profile rounded-circle mr-2" src="{{ asset(auth()->user()->avatar) }}" />
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"> {{ auth()->user()->name }} </span>
                                </a>
                            </li>
                              <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="{{url('/logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">

                                     <span class="d-block bg-lightgray rounded-circle p-1 text-center" style="width: 31px;"><img src="{{asset('images/Asset15.png')}}" width="15"></span>
                                     <span class="mr-2 d-none d-lg-inline text-gray-600 small ml-2">Logout </span>
                            
                                </a>
                        
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                 </form>
                            </li>
                        </ul>

                    </nav>
                <!-- End of Topbar -->
                </div>
    </div>
    {{-- {{dd($notification)}} --}}