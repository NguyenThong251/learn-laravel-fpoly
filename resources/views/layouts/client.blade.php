<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Etrade</title>
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{asset('assets/clients/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/owl.theme.default.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('assets/clients/css/bootstrap.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('assets/clients/css/style.css')}}"> --}}
</head>
<body>
    @include('clients.partials.header')
        @yield('content')
    @include('clients.partials.footer')
    
  
    <script src="{{asset('assets/clients/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/clients/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/clients/js/owl.carousel.min.js')}}"></script>
    {{--<script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
        ></script> --}}
        {{-- <script
            src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"
            integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
            ></script> --}}
          
            <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.js"></script>
            {{-- <script src="{{asset('assets/clients/js/custom.js')}}"></script> --}}
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
            <script src="{{asset('assets/clients/js/owl.js')}}"></script>
            <script src="{{asset('assets/clients/js/wow.js')}}"></script>
            <script src="{{asset('assets/clients/js/bootstrap.min.js')}}"></script>
        </body>
        </html>