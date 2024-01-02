<!-- Content Section Start -->
<form action="{{ route('home.commande') }}" method="POST">
  @csrf
  <div id="content">
    <div class="container">
      
      <div class="row">
        <div class="col-md-6 col-sm-6 col-sx-12">
          <div class="order-details">
            <h2 class="title-checkout"><i class="icon-basket-loaded"></i>Votre Commande</h2>
            <div class="order_review margin-bottom-35">
              <table class="table table-responsive table-review-order">
                <thead>
                  <tr>
                    <th class="product-name">Article</th>
                    <th class="product-name">Qte</th>
                    <th class="product-total">Total</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $cart=session()->get('cart');
                  // session()->flush();
                @endphp
               {{-- {{ dd($cart) }} --}}
               
                  @if(isset($cart))         
                                  
                    @foreach($cart as $productId =>$productData)
                    <tr>
                      <td><p>{{ $productData['name'] }}</p></td>
                      <td><p>{{ $productData['quantity'] }}</p></td>
                      <td><p class="price">{{ $productData['price'] }} F CFA</p></td>
                    </tr>

                    @endforeach
                  @endif
                </tbody>
                <tfoot>
                  <tr>
                    <th>Total General</th>
                    <td>
                      <p class="price">{{ session()->get('itemPrice') }}F CFA</p>
                    </td>
                  </tr>
                  <tr>
                    <th>Lieu de Livraison <sup>*</sup></th>
                    <td>
                      <div class="form-group">
                        <select class="selectpicker" name="type_livraison" >
                          @if (session()->get('itemPrice')>=300000)
                          <option selected="selected" value="à la maison">à la maison</option>
                          @endif                          
                          <option selected="selected" value="Dans un lieu public">Dans un lieu public</option>
                          @if (session()->get('itemPrice')<300000)
                            <option value="à la maison + {{ session()->get('itemPrice')*0.1 }}">à la maison + {{ session()->get('itemPrice')*0.1 }} F CFA</option>
                          @endif
                        </select>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Total</th>
                    <td><p class="price">{{ session()->get('itemPrice') }} F CFA</p></td>
                  </tr>
                  
                  @if (session()->get('itemPrice')<300000)
                  <p>Vous preférer être livrez à la maisons plus 10%</p>
                  <tr>
                    <th>Total commande d'être livrez à la maison</th>
                    <td><p class="price">{{ session()->get('itemPrice') + session()->get('itemPrice')*0.1 }} F CFA</p></td>
                  </tr>
                  <tr>
                    <th class="text-info">NB:</th>
                    <td><p class="text-danger">La Livraisons est payant quand la commande sera comfirmer</p></td>
                  </tr>
                  @endif                 
                </tfoot>               
              </table>
            </div>               
          </div>
        </div>

        <div class="col-md-6 col-sm-6 col-sx-12">
          <!-- Payment Method -->
          <h2 class="title-checkout">
            <i class="icon-credit-card"></i>
            Methode de Payment
          </h2>
          <!-- /Payment Method -->
          
          <div class="form-group">
            <label>Nom de votre Carte ou Identification <sup>*</sup></label>
            <input class="form-control" value="{{old('carte_payer')}}" type="text" name="carte_payer" >
          </div>
            @error('carte_payer')
              <div class="d-block text-danger" style="margin-top: -25px;margin-bottom:15px">
                {{$message}}
              </div>
            @enderror
          <div class="form-group">
            <label>Type de Payment <sup>*</sup></label>
            <select class="selectpicker" value="{{old('type_payer')}}" name="type_payer" >
              <option value="">Type</option>
              <option value="Orange Money">Orange Money</option>
              @if (session()->get('itemPrice')<25000)
                <option value="En Cache">En Cache</option>
              @endif              
              <option value="Carte Bancaire">Carte Bancaire</option>
            </select>
            @error('type_payer')
              <div class="d-block text-danger" style="margin-bottom:15px">
                {{$message}}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label>Numero de Carte ou Identification  <sup>*</sup></label>
            <input class="form-control" type="text" value="{{old('numero_payer')}}" name="numero_payer" >
          </div>     
          @error('numero_payer')
              <div class="d-block text-danger" style="margin-top: -25px;margin-bottom:15px">
                {{$message}}
              </div>
            @enderror
          <div class="form-group">
            <label>Verifier le Numero de Carte<sup>*</sup></label>
            <input class="form-control" type="text" value="{{old('numero_conf_payer')}}" name="numero_conf_payer" >
          </div>
          @error('numero_conf_payer')
              <div class="d-block text-danger" style="margin-top: -25px;margin-bottom:15px">
                {{$message}}
              </div>
            @enderror
          {{-- information de livraison --}}
          <h2 class="title-checkout"><i class="icon-basket-loaded"></i>Votre Adresse pour livrer</h2>
          <div class="form-group">
            <label>Votre Numero de Tel <sup>*</sup></label>
            <input class="form-control" type="text" value="{{old('phone_livraison')}}" name="phone_livraison" >
          </div>     
          @error('phone_livraison')
              <div class="d-block text-danger" style="margin-top: -25px;margin-bottom:15px">
                {{$message}}
              </div>
            @enderror
          <div class="form-group">
            <label>Adresse<sup>*</sup></label>
            <input class="form-control" type="text" value="{{old('adresse_livraison')}}" name="adresse_livraison" >
          </div>
          @error('adresse_livraison')
              <div class="d-block text-danger" style="margin-top: -25px;margin-bottom:15px">
                {{$message}}
              </div>
            @enderror
          <div class="form-group">
            <label>Saisie au moins Trois Lieu Public Proche de vous<sup>*</sup></label>
            <input class="form-control" placeholder="Lieu Public de ton ville separer par un point virgul" 
            type="text" value="{{old('lieu_livraison')}}" name="lieu_livraison" >
          </div>
          @error('lieu_livraison')
              <div class="d-block text-danger" style="margin-top: -25px;margin-bottom:15px">
                {{$message}}
              </div>
            @enderror
          <!-- GRAND TOTAL -->
          <div class="card card--padding fill-bg">
            <table class="table-total-checkout">                
              <tbody>
                <tr>
                  <th>TOTAL D'ARTICLES:</th>
                  <td>{{ session()->get('itemPrice') }} F CFA</td>
                </tr>
              </tbody>
            </table>
           
            <button type="submit" class="btn btn-common btn-full">Passer la Commande Maintenant <span class="icon-action-redo"></span></button>              

          </div>
          <!-- /GRAND TOTAL -->
        </div>
      </div>
    </div>
  </div>
  <!-- Content Section End -->  
</form>