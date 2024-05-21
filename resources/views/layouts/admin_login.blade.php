<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Etrade</title>
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{asset('assets/clients/css/animate.min.css')}}">
</head>
<body>

    
  @include('admin.login')
  

 
  <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{asset('assets/clients/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/clients/js/wow.min.js')}}"></script>
            <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.js"></script>
            <script src="{{asset('assets/clients/js/wow.js')}}"></script>
            <script src="{{asset('assets/clients/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('assets/clients/js/admin.js')}}"></script>
            @yield('js')
            @stack('script')
        </body>
        </html>