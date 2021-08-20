<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('inc.header')
    @yield('afterStyle')
</head>
<body>
    <div class="wrapper">
        @if(Auth::check())

            @if(Request::segment(1) != "search" )
                {{ Session::forget('search') }}
            @endif
            @include('inc.navbar')
            
            <div class="main-panel" id="wrapper">

                @if (auth()->user()->role == "admin")
                    @include('inc.adminSidebar')
                @else
                    @include('inc.sidebar')
                @endif

                @yield('content')
            </div>
             
        @else
            @yield('content')
        @endif
        <div id="chat-overlay" class="row"></div>
            <audio id="chat-alert-sound" style="display: none">
              <source src="{{ asset('sound/facebook_chat.mp3') }}" />
            </audio>

    </div>

    @include('inc.footer')
    @include('inc.messages')
    @yield('afterScript')
</body>
</html>
