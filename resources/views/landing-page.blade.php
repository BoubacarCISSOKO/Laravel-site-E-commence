@extends('template')

@section('content')
<head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

    <body>
        <div id="app">
            <header class="with-background">
                <div class="hero container text-center">
                    <div class="hero-copy">
                        <h2> Démonstration de commerce électronique Laravel </h2>
                        <p> Inclut plusieurs produits, catégories, un panier et un système de paiement avec intégration Stripe. </p>
                        <div class="hero-buttons">
                            <a href="{{ route('cart.index')}}" class="button button-white">Pannier</a>
                            <a href="{{ route('shop.index') }}" class="button button-white">Boutique</a>
                        </div>
                    </div> <!-- end hero-copy -->

                    <div class="hero-image text-center">
                        <img src="img/macbook-pro-laravel.png" style="height: 250px;width: 300px" alt="hero image">
                    </div> <!-- end hero-image -->
                </div> <!-- end hero -->
            </header>

            <div class="featured-section">

                <div class="container">
                    <h1 class = "text-center"> Commerce électronique de Laravel </h1>

                    <p class = "section-description" style="font-size: 15px">Informations importantes suite à l'illustration de toutes les informations sur les personnes présumées providentielles et non officielles l'officier est répressif, il est réprimandé, il contient un aliquide possimus temporibus enim eum hic lorem. </P>

                    <div class="text-center button-container">
                        <a href="#" class="button">En vedette</a>
                        <a href="#" class="button">En soldes</a>
                    </div>

              </div> <!-- end container -->

            </div> <!-- end featured-section -->
            <div class="container">
                <div class="products text-center">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-md-3">   
                    <div class="product">
                        <a href="{{ route('shop.show',$product->slug) }}"><img src="/img/macbook-pro.png" style="width:150px;margin-bottom: 20px;" alt="products"></a>
                        <a href="{{ route('shop.show',$product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                        <div class="product-price">{{ $product-> price.' fcfa'}}</div>
                        <div class="spacer"></div>
                    </div>
                    </div>  
                    @endforeach
                </div>  
                </div> 
            </div>
            <div class="text-center button-container">
                <a href="{{ route('shop.index') }}" class="button">Vues Produits</a>
            </div>
            <hr style="font-size:8px">
            <div class="container bg-light">
                <div class="row text-center">
                    <div class="col-sm-12 ">
                    <h2>Form notre blog</h2>
                    <p>Nos services sont parotut dans le monde. Vous pouvez nous suivre dans <br> tous les réseaux sociaux. Vous serez toujours les bienvenues!!!</p>
                    </div>
                    <div class="spacer">
                       <p></p>
                       <p></p> 
                    </div>
                    <div class="col-sm-3 text-center">
                        <p><img src="img/blog1.png"></p>
                    </div>
                    <div class="col-sm-3 text-center">
                        <p><img src="img/blog2.png"></p>
                    </div>
                    <div class="col-sm-3 text-center"> 
                        <p><img src="img/blog3.png"></p>
                    </div>
                    <div class="col-sm-3 text-center">
                        <p><img src="img/macbook-pro-laravel.png" style="height: 180px;width: 500px"></p>
                    </div>
                </div>
            </div>
        </div> <!-- end #app -->
        <script src="js/app.js"></script>
    </body>
@endsection
