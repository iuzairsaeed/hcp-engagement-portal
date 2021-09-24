<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @livewireStyles
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

                @if (auth()->user()->role == "admin")
                    @include('inc.adminFooter')
                @else
                    @include('inc.footer')
                @endif
             
        @else
            @yield('content')
        @endif
        <div id="chat-overlay"></div>
            <audio id="chat-alert-sound" style="display: none">
              <source src="{{ asset('sound/facebook_chat.mp3') }}" />
            </audio>
         </div>

    </div>

    @yield('afterScript')
    @include('inc.messages')
    @livewireScripts
    <script src="{{ URL::to('/vendor/livewire/livewire.js?id=21fa1dd78491a49255cd') }}" data-turbo-eval="false" data-turbolinks-eval="false"></script>
</body>
</html>
