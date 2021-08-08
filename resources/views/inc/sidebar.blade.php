<ul class="navbar-nav bg-blue sidebar sidebar-dark accordion pt-2" id="accordionSidebar">

                 <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-right d-none d-md-inline w-100 bg-orange text-white font-gothamlight fontsize11px text-center lineheight2px"> <span>Collapse </span> <span class="hide-collapse"> Expand </span><button class="rounded-circle bg-orange border-0 float-right mb-0" id="sidebarToggle"></button>
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
        <a class="nav-link font-gothambook" href="{{url('dashboard')}}" title="Dashboard">
            <span class="{{ (request()->is('dashboard')) ? ' bg-white rounded-circle p-1 text-center d-inline-block mr-1' : 'rounded-circle p-1 text-center d-inline-block mr-1' }}" style="width: 31px;height: 31px;"> <img src='{{asset("images")}}/{{ (request()->is('dashboard')) ?'Asset25.png':'Asset35.png'}}' width="15"></span>
            <span>Dashboard</span>
        </a>
    </li>
    
    <li class="nav-item {{ (request()->is('profile')) ? 'active' : '' }}">
        <a class="nav-link font-gothambook" href="{{route('profile')}}" title="Profile">
            <span class="{{ (request()->is('profile')) ? ' bg-white rounded-circle p-1 text-center d-inline-block mr-1' : 'rounded-circle p-1 text-center d-inline-block mr-1' }}" style="width: 31px;height: 31px;"> <img src='{{asset("images")}}/{{ (request()->is('profile')) ?'Asset17.png':'Asset27.png'}}' width="15"></span>
            <span>Profile</span>
        </a>
    </li>
    
    <li class="nav-item {{ (request()->is('post')) ? 'active' : '' }}">
        <a class="nav-link font-gothambook" href="{{route('post.index')}}" title="Profile">
            <span class="{{ (request()->is('post')) ? ' bg-white rounded-circle p-1 text-center d-inline-block mr-1' : 'rounded-circle p-1 text-center d-inline-block mr-1' }}" style="width: 31px;height: 31px;"> <img src='{{asset("images")}}/{{ (request()->is('profile')) ?'Asset17.png':'Asset27.png'}}' width="15"></span>
            <span>Recent Posts</span>
        </a>
    </li>

    
    <li class="nav-item {{ (request()->is('activity')) ? 'active' : '' }}">
        <a class="nav-link font-gothamlight" href="{{route('activity.index')}}" title="Activities">
            <span class="{{ (request()->is('activity')) ? ' bg-white rounded-circle p-1 text-center d-inline-block mr-1' : 'rounded-circle p-1 text-center d-inline-block mr-1' }}" style="width: 31px;height: 31px;"> <img src='{{asset("images")}}/{{ (request()->is('activities')) ?'Asset20.png':'Asset30.png'}}' width="15"></span>
            <span>Activities</span>
        </a>
    </li>

    <li class="nav-item {{ (request()->is('activity')) ? 'active' : '' }}">
        <a class="nav-link font-gothamlight" href="{{route('activity.index')}}" title="Activities">
            <span class="{{ (request()->is('activity')) ? ' bg-white rounded-circle p-1 text-center d-inline-block mr-1' : 'rounded-circle p-1 text-center d-inline-block mr-1' }}" style="width: 31px;height: 31px;"> <img src='{{asset("images")}}/{{ (request()->is('activities')) ?'Asset20.png':'Asset30.png'}}' width="15"></span>
            <span>Create Activity</span>
        </a>
    </li>


    <li class="nav-item {{ (request()->is('chatroom')) ? 'active' : '' }}">
        <a class="nav-link font-gothambook" href="{{url('chatroom')}}" title="Chatroom">
            <span class="{{ (request()->is('chatroom')) ? ' bg-white rounded-circle p-1 text-center d-inline-block mr-1' : 'rounded-circle p-1 text-center d-inline-block mr-1' }}" style="width: 31px;height: 31px;"> <img src='{{asset("images")}}/{{ (request()->is('chatroom')) ?'Asset24.png':'Asset34.png'}}' width="15"></span>
            <span>Chatroom</span>
        </a>
    </li>


    <li class="nav-item {{ (request()->is('communities')) ? 'active' : '' }}">
        <a class="nav-link font-gothambook" href="{{url('communities')}}" title="Communities">
            <span class="{{ (request()->is('communities')) ? ' bg-white rounded-circle p-1 text-center d-inline-block mr-1' : 'rounded-circle p-1 text-center d-inline-block mr-1' }}" style="width: 31px;height: 31px;"> <img src='{{asset("images")}}/{{ (request()->is('communities')) ?'Asset21.png':'Asset31.png'}}' width="15"></span>
            <span>Communities</span>
        </a>
    </li>

        <li class="nav-item {{ (request()->is('event')) ? 'active' : '' }}">
        <a class="nav-link font-gothambook" href="{{url('event')}}" title="Event Calendars">
            <span class="{{ (request()->is('event')) ? ' bg-white rounded-circle p-1 text-center d-inline-block mr-1' : 'rounded-circle p-1 text-center d-inline-block mr-1' }}" style="width: 31px;height: 31px;"> <img src='{{asset("images")}}/{{ (request()->is('eventcalender')) ?'Asset19.png':'Asset29.png'}}' width="15"></span>
            <span>Events Calendars</span></a>
    </li>

    <li class="nav-item {{ (request()->is('libraries')) ? 'active' : '' }}">
        <a class="nav-link font-gothamlight" href="{{url('libraries')}}" title="Libraries">
            <span class="{{ (request()->is('libraries')) ? ' bg-white rounded-circle p-1 text-center d-inline-block mr-1' : 'rounded-circle p-1 text-center d-inline-block mr-1' }}" style="width: 31px;height: 31px;"> <img src='{{asset("images")}}/{{ (request()->is('libraries')) ?'Asset21.png':'Asset32.png'}}' width="15"></span>
            <span>Libraries</span></a>
    </li>



    <li class="nav-item {{ (request()->is('trainings')) ? 'active' : '' }}">
        <a class="nav-link font-gothambook" href="{{url('trainings')}}" title="My Trainings">
            <span class="{{ (request()->is('trainings')) ? ' bg-white rounded-circle p-1 text-center d-inline-block mr-1' : 'rounded-circle p-1 text-center d-inline-block mr-1' }}" style="width: 31px;height: 31px;"> <img src='{{asset("images")}}/{{ (request()->is('trainings')) ?'Asset23.png':'Asset33.png'}}' width="15"></span>
            <span>My Trainings</span></a>
    </li>


    <li class="nav-item {{ (request()->is('faq')) ? 'active' : '' }}">
        <a class="nav-link font-gothambook" href="{{url('faq')}}" title="FAQs">
            <span class="{{ (request()->is('faq')) ? ' bg-white rounded-circle p-1 text-center d-inline-block mr-1' : 'rounded-circle p-1 text-center d-inline-block mr-1' }}" style="width: 31px;height: 31px;"> <img src='{{asset("images")}}/{{ (request()->is('faq')) ?'Asset65.png':'Asset64.png'}}' width="15"></span>
            <span>FAQ</span></a>
    </li>

        <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}">
        <a class="nav-link font-gothambook" href="{{url('about')}}" title="About">
                <span class="{{ (request()->is('about')) ? ' bg-white rounded-circle p-1 text-center d-inline-block mr-1' : 'rounded-circle p-1 text-center d-inline-block mr-1' }}" style="width: 31px;height: 31px;">  <img src='{{asset("images")}}/{{ (request()->is('about')) ?'Asset18.png':'Asset28.png'}}' width="15"></span>
            <span  >About</span></a>
    </li>


    <li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}">
        <a class="nav-link font-gothambook" href="{{url('contact')}}" title="Contact Us">
            <span class="{{ (request()->is('contact')) ? ' bg-white rounded-circle p-1 text-center d-inline-block mr-1' : 'rounded-circle p-1 text-center d-inline-block mr-1' }}" style="width: 31px;height: 31px;"> <img src='{{asset("images")}}/{{ (request()->is('contact')) ?'Asset26.png':'Asset36.png'}}' width="15"></span>
            <span>Contact Us</span></a>
    </li>



    <div class="w-100 mt-5">
        <h6 class="fontsize12px font-weight-light text-center font-gothamlight" style="color: rgb(255 255 255 / 58%);">©2021. Celeritas</h6>
    </div>

</ul>