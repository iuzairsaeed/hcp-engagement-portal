<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="{{ config('app.name', 'HCP Engagement Portal') }}">
<meta name="keywords" content="{{ config('app.name', 'HCP Engagement Portal') }}">
<meta name="author" content="hcp Inc">
<title>{{ config('app.name', 'HCP Engagement Portal') }}</title>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<!-- <link rel="icon" type="image/png" href="{{ asset('W.ico') }}" /> -->

{{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"> --}}
<link href="{{asset('css/custom.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href="{{ asset('css/chat.css') }}" rel="stylesheet">
<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

<script>
        var base_url = '{{ url("/") }}';
</script>

<link href="{{asset('app-assets/vendors/css/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('app-assets/vendors/css/toastr.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="manifest" href="manifest.json">
