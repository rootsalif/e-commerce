 <!-- Start Content -->
 <div id="content">
    <div class="container">
      <div class="row">
        <div class="header text-center">
          <h3 class="small-title">Panier</h3>
          <p>Liste des articles dans le panier</p>
        </div>
        <div class="col-md-12">
          <div class="wishlist">
            <div class="col-md-4 col-sm-4 text-center">
              <p>Articles</p>
            </div>
            <div class="col-md-2 col-sm-2">
              <p>Prix</p>
            </div>
            <div class="col-md-2 col-sm-2">
              <p>Quantité</p>
            </div>
            <div class="col-md-2 col-sm-2">
              <p>Total</p>
            </div>
            <div class="col-md-2 col-sm-2">
              <p>Suprimer</p>
            </div>
          </div> 
        </div> 
        @php
            $cart=session()->get('cart');
            // session()->flush();
        @endphp
        {{-- {{ dd($cart) }} --}}
        
            @if(isset($cart))         
                            
            @foreach($cart as $productId =>$productData)
            <div class="wishlist-entry clearfix">
                <div class="col-md-4 col-sm-4">
                  <div class="cart-entry">
                    <a class="image" href="#"><img src="/storage/{{ $productData['image'] }}" alt="image {{ $productId}}"></a>
                    <div class="cart-content">
                      <h4 class="title">{{ $productData['name'] }}</h4>
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 entry">
                  <div class="price">
                    {{ $productData['price']/$productData['quantity'] }} F CFA <del>$280.00</del>
                  </div>
                </div>
                <div class="col-md-2 col-sm-2">
                  <ul class="quantity-selector">
                    <a href="{{ route('removeFromCart', ['id'=>$productId, 'type'=>'list', 'guard'=>Auth::guard()->name]) }}"><li class="entry number-minus">1</li></a>
                    <li class="entry number">{{ $productData['quantity'] }}</li>
                    <a href="{{ route('panier', ['id'=>$productId, 'type'=>'list', 'guard'=>Auth::guard()->name]) }}"><li class="entry number-plus">500</li></a>
                  </ul>
                </div>
                <div class="col-md-2 col-sm-2 entry">
                  <div class="price">
                    {{ $productData['price'] }} F CFA
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 entry">
                  <a class="btn-close" href="{{ route('removeFromCart', ['id'=>$productId, 'type'=>'list', 'guard'=>Auth::guard()->name]) }}"><i class="icon-close"></i></a> 
                </div>
              </div>

            @endforeach
            @endif

          
      </div>
    </div>
  </div>
  <!-- End Content -->