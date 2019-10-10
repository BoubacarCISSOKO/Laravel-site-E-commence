@extends('template')

@section('content')
<head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body>
    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Accueil</a>
             <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span><a href="{{ route('shop.index') }}">Boutique</a></span>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>MacBook Pro</span>
        </div>
    </div>
 
    <div class="product-section container">
        <div>
            <div class="product-section-image">
                 <a href="#"><img src="/img/macbook-pro.png" style="width:150px;margin-bottom: 20px;" alt="products" class="active" id="currentImage"></a>
            </div>
        </div>
        <div class="product-section-information">
       
            <h1 class="product-section-title">{{ $product->name }}</h1>
            <div class="product-section-subtitle">{{ $product->details }}</div>
            <div class="product-section-price">{{ $product->price.' fcfa' }}</div>

            <p>
                {!! $product->description !!}
            </p>
       
            <p>&nbsp;</p>
             <form action="{{ route('cart.store') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $product->id }}">
                     <input type="hidden" name="name" value="{{ $product->name }}">
                      <input type="hidden" name="price" value="{{ $product->price }}">
                    <button type="submit" class="button button-plain">Ajouter au panier</button>
            </form>
         
        </div>

    </div> <!-- end product-section -->
   
    <script>
        (function(){
            const currentImage = document.querySelector('#currentImage');
            const images = document.querySelectorAll('.product-section-thumbnail');

            images.forEach((element) => element.addEventListener('click', thumbnailClick));

            function thumbnailClick(e) {
                currentImage.classList.remove('active');

                currentImage.addEventListener('transitionend', () => {
                    currentImage.src = this.querySelector('img').src;
                    currentImage.classList.add('active');
                })

                images.forEach((element) => element.classList.remove('selected'));
                this.classList.add('selected');
            }

        })();
    </script>

    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>

    <script src="{{ asset('js/algolia.js') }}"></script>
</body>
@endsection
