<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title  > Home - UR HAIRDRESSER</a></title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/Navigation-Clean.css">
 
</head>

<body id="page-top">
     @include('layouts.navbar')

    @yield('content')


    @include('layouts.footer')
    
    <script src="assets/js/jquery.min.js"></script>
     
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
 
    <script src="assets/js/grayscale.js"></script>
    
     
    @yield('scripts')
</body>

</html>