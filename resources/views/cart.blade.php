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
            <span>Achats Chariot</span>
        </div>
    </div>

    <div class="cart-section container">
        <div>
            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
             @if (Cart::count() > 0)

            <h2>{{ Cart::count() }} article (s) dans le panier</h2>

            <div class="cart-table">
                @foreach (Cart::content() as $item)
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="{{ route('shop.show', $item->model->slug)}}"><img src="/img/macbook-pro.png" alt="item" class="cart-table-img"></a>
                         {{ csrf_field() }}
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a></div>
                            <div class="cart-table-description">{{ $item->model->details }}</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="cart-options">Retirer</button>
                            </form>
                            <form action="{{route('cart.switchToSaveForLater', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}
                                <button type="submit" class="cart-options">Garder pour plus tard</button>
                            </form>
                           
                        </div>
                        <div>
                            <select class="quantity">
                                <option class='selected'>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div>{{ $item->model->price.' fcfa'}}</div>
                    </div>

                </div> <!-- end cart-table-row -->
                @endforeach
            </div> <!-- end cart-table -->

            <div >
                <a href="#" class="have-code">Avoir un code?</a>
                <div class="have-code-container">
                    <input type="text" name="coupon_code" id="coupon_code">
                    <button type="submit" class="button button-plain">Appliquer</button>
                </div>
            </div>

            <div class="cart-totals">
                <div class="cart-totals-left">
                    La livraison est gratuite car nous sommes géniaux comme ça. C’est aussi parce que c’est un truc supplémentaire que je n’ai pas envie de comprendre :).
                </div>
                <div class="cart-totals-right">
                    <div>
                        Subtotal <br>
                        Tax <br>
                        <span class="cart-totals-total">Total</span>
                    </div>
                    <div class="cart-totals-subtotal">
                        {{Cart::subtotal().' fcfa'}}<br>
                        {{Cart::tax().' fcfa'}}<br>
                        <span class="cart-totals-total"> {{Cart::total().' fcfa'}}</span>
                    </div>
                </div>
                    
            </div> <!-- end cart-totals -->

            <div class="cart-buttons">
                <a href="{{ route('shop.index') }}" class="button">Continuer vos achats</a>
                <a href="#" class="button-primary">Passer à la caisse</a>
            </div>
            @else

                <h3>Aucun article dans le panier!</h3>
                <div class="spacer"></div>
                <a href="{{ route('shop.index') }}" class="button">Continuer vos achats</a>
                <div class="spacer"></div>

            @endif

            @if (Cart::instance('saveForLater')->count() > 0)

            <h2>{{ Cart::instance('saveForLater')->count() }}article(s) enregistrés pour plus tard</h2>

            <div class="saved-for-later cart-table">
                @foreach (Cart::instance('saveForLater')->content() as $item)
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="{{ route('shop.show',$item->model->slug) }}"><img src="/img/macbook-pro.png" alt="item" class="cart-table-img" style="width: 200px"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="{{route('shop.show',$item->model->slug) }}">{{ $item->model->name }}</a></div>
                            <div class="cart-table-description">{{ $item->model->details}}</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <a href="#">Retirer</a><br>
                            <a href="#">Garder pour plus tard</a>
                        </div>
                         <div class="spacer"></div>
                        <div style="margin-left: 35px;">{{ $item->model->price.' fcfa'}}</div>
                    </div>
                </div> <!-- end cart-table-row -->
                @endforeach
                

            </div> <!-- end saved-for-later -->
            @else

             <h3>Vous n'avez aucun élément enregistré pour plus tard.</h3>

            @endif
        </div>
        
    </div> <!-- end cart-section -->

    <div class="container bg-light espace">
            <h2 style="text-align: left;margin-left: 45px;">vous pourriez aussi aimer</h2>
            <div class="products text-center">
                <div class="row ">
                @foreach($products as $product)
                    <div class="col-md-3"> 
                    <div class="cart-product"> 
                    <div class="product">
                        <a href="{{ route('shop.show',$product->slug) }}"><img src="/img/macbook-pro.png" alt="products"></a>
                        <a href="{{ route('shop.show',$product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                        <div class="product-price">{{ $product-> price.' fcfa'}}</div>
                        <div class="spacer"></div>
                    </div>
                    </div>
                    </div>
                @endforeach
                </div>
            </div>
    </div>
    <hr style="width:2px">
   
    <script>
        (function(){
            const classname = document.querySelectorAll('.quantity')

            Array.from(classname).forEach(function(element) {
                element.addEventListener('change', function() {
                    const id = element.getAttribute('data-id')
                    const productQuantity = element.getAttribute('data-productQuantity')

                    axios.patch(`/cart/${id}`, {
                        quantity: this.value,
                        productQuantity: productQuantity
                    })
                    .then(function (response) {
                        // console.log(response);
                        window.location.href = '{{ route('cart.index') }}'
                    })
                    .catch(function (error) {
                        // console.log(error);
                        window.location.href = '{{ route('cart.index') }}'
                    });
                })
            })
        })();
    </script>

    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
</body>
@endsection