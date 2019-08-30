<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title> @yield('title')</title>
    <meta ...>
   
    <!-- CSS + Font -->
    <link href="/img/favicon.ico" rel="SHORTCUT ICON" />

     <!-- Fonts pour laffichage du coeur -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    
    <!-- Custom CSS -->
    @yield('custom_css')    
</head>

<body>
<nav class="navbar navbar-expand-sm fixed-top bg-dark navbar-dark justify-content-center">
  <ul class="navbar-nav ">
    <li class="nav-item active ">
      <a class="nav-link" href="#">JUMIA Commerce</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('shop.index')}}">Boutique</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">À propos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Blog</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('cart.index')}}">Chariot <span class="cart-count">
            @if (Cart::instance('default')->count()>0)
                <span>{{Cart::instance('default')->count()}}</span></span>
            @endif
        </a>
    </li>
  </ul>
</nav>
 
   @yield('content')

 <footer >
    <div class="footer-content container">
         <div class="made-with">Créé avec <i class="fa fa-heart heart"></i> par CISSOKO Boubacar</div>
    </div> <!-- end footer-content -->
    </footer>

  <!--  Scripts-->
  <script src="{{asset('js/jquery.js')}}"></script>
  
  @yield('scripts')   
</body>
</html>