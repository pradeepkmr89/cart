<!DOCTYPE html>
<html>
<head> 
    <title>Cart</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
  <a href="{{ url('/') }}"class="navbar-brand">LOGO</a>
   
   
  <a href="{{url('/cart');}}" class="navbar-brand">
   <i class="fa fa-shopping-cart"></i> <span class="badge badge-pill badge-danger " id="totalcart">{{count((array) session('cart'))}} </span>  </a>
</nav> 
<br/>
<div class="container mydiv">
    <span id="res"></span> 
    @yield('content')
</div>
  
@yield('scripts')
     
</body>
</html>