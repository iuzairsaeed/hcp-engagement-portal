<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('inc.header')
    @yield('afterStyle')
</head>
<body>
    <div class="wrapper">
        @if(Auth::check())

             @include('inc.navbar')
            
            <div class="main-panel" id="wrapper">
                @include('inc.sidebar')
                @yield('content')
            </div>
             
        @else
            @yield('content')
        @endif
    </div>

    @include('inc.footer')
    @include('inc.messages')
    @yield('afterScript')
</body>
</html>
