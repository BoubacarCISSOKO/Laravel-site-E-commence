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
            <span>Boutique</span>
        </div>
    </div>
    <!-- @endcomponent -->

    <div class="products-section container">
        <div class="sidebar">
            <h3>Pour les Categories</h3>
            <ul>
                <li><a href="#">LapTop</a></li>
                <li><a href="#">DeskTop</a></li>
                <li><a href="#">Mobil Phne</a></li>
                <li><a href="#">TV</a></li>
                <li><a href="#">Poducts Camera</a></li>
            </ul>
            <h3>Pour les Prix</h3>
            <ul>
                <li><a href="#">0 - 700.000 fcfa</a></li>
                <li><a href="#">700.000 - 2.500.000 fcfa</a></li>
                <li><a href="#">2.500.000 fcfa</a></li>
            </ul>
        </div> <!-- end sidebar -->
        <div class="container">
            <hr>
            <h2 style="text-align: center;font-style: italic;font-size: 50px">Laptops</h2>
            <hr>
            
            <div class="products text-center">
             
                @foreach($products as $product)
                
                    <div class="product">
                        <a href="{{ route('shop.show',$product->slug) }}"><img src="/img/macbook-pro.png" style="width:150px;margin-bottom: 20px;" alt="products"></a>
                        <a href="{{ route('shop.show',$product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                        <div class="product-price">{{ $product-> price.' fcfa'}}</div>
                    </div>
                  
                @endforeach
             
            </div> <!-- end products -->
            
        </div>

           <!--  <div class="cart-table-row">
                <div class="cart-table-row-left">
                    <a href="#"><img src="/img/macbook-pro.png" alt="item" class="cart-table-img"></a>
                    <div class="cart-item-details">
                        <div class="cart-table-item"><a href="#">MacBook Pro</a></div>
                        <div class="cart-table-description">15 inch, TB SSD, 32GB RAM</div>
                        <div>249.999 fcfa</div>
                    </div>
                </div>
            </div> end cart-table-row -->
          <!--   <div class="cart-table-row">
                <div class="cart-table-row-left">
                    <a href="#"><img src="/img/macbook-pro.png" alt="item" class="cart-table-img"></a>
                    <div class="cart-item-details">
                        <div class="cart-table-item"><a href="#">MacBook Pro</a></div>
                        <div class="cart-table-description">15 inch, TB SSD, 32GB RAM</div>
                        <div>249.999 fcfa</div>
                    </div>
                </div>
            </div> --> <!-- end cart-table-row --> 
           
    </div>

   
</body>
@endsection
