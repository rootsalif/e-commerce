<li>
    @php
      $itemCount=session()->get('itemCount');
    @endphp
   
              <a href="#" class="cart-icon cart-btn"><i class="icon-basket"></i><span class="cart-label">{{ isset($itemCount)? $itemCount:0 }}</span></a>
              <div class="cart-box">
      <div class="popup-container">
        @php
          $cart=session()->get('cart');
          // session()->flush();
        @endphp
        {{-- {{ dd($cart) }} --}}
        @if(isset($cart))          
            <div class="cart">              
                @foreach($cart as $productId =>$productData)  
          
                <div class="cart-entry">
                  <a href="#" class="image">
                    <img src="/storage/{{ $productData['image'] }}" alt="image {{ $productId}}">
                  </a>
                  <div class="content">
                        <a href="#" class="title">{{ $productData['name'] }}</a>
                        <p class="quantity">Qte: {{ $productData['quantity'] }}</p>
                        <span class="price">{{ $productData['price'] }}F CFA</span>
                    </div>
                   
                  <div class="button-x">
                    <a href="{{ route('removeFromCart', ['id' => $productId, 'type'=>'panier', 'guard'=>Auth::guard()->name]) }}">
                      <i class="icon-close"></i>
                    </a>                        
                  </div>
                </div>  
                @endforeach
            </div>
          @endif					
      
        <div class="summary">
        <div class="subtotal">Total</div>
        <div class="price-s">{{ session()->get('itemPrice') }}</div>
        </div>
       
        <div class="cart-buttons">
          @auth
          <a href="{{ route('home.clientPanier') }}" class="btn btn-border-2">Gerer</a>
          @endauth
          @guest
          <a href="{{ route('listPanier') }}" class="btn btn-border-2">Gerer</a>
          @endguest
          <a href="{{ route('home.clientCommande') }}" class="btn btn-common">Commande</a>

          
          <div class="clear"></div>
        </div>
      </div>
              </div>
</li>  