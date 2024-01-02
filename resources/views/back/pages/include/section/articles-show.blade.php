 <!-- Start Content -->
 <div id="content">
    <div class="container">
      <div class="row">         
        <div class="col-sm-12">
          <!-- Product filter Start -->
          <div class="product-filter">
            <p class="result-count">d'autre suggestion"</p>
            <div class="sort-by">
              <span>Sort by: </span>
              <form class="woocommerce-ordering" method="post">
                <label>
                  <select name="order" class="orderby">
                    <option selected="selected" value="menu-order">Default sortion</option>
                    <option value="popularity">popularity</option>
                    <option value="popularity">Average ration</option>
                    <option value="popularity">newness</option>
                    <option value="popularity">price</option>
                  </select>
                </label>
              </form>
            </div>
          </div>
          <!-- Product filter End -->

           

          <!-- Product Item Start -->
          <div class="category-product-grid  row">
           <!-- Aticle blog foreach -->
           @forelse ($articlefinds as $article)
           {{-- {{ dd($articlefinds) }} --}}
           @php

             $imgs=$article->images->first();                  
           @endphp    
                              
           @if(isset($imgs))  
             <div class="col-md-3 col-sm-6 col-xs-12">
               <div class="shop-product">
                 <!-- Aticle section -->
                 <div class="product-box">                                   
               
                   <a href="{{ route('show', ['id'=>$article->id, 'types'=>'categories']) }}">
                     <img src="/storage/{{ $imgs->path }}" width="250" height="250" alt="image {{ $imgs->id }}"></a>
               
                   {{-- <a href="#"><img src="/back/assets/img/products/img-01.jpg"  alt=""></a> --}}
                   <div class="cart-overlay">
                   </div>
                   
                   <span class="sticker new"><strong>Neuf</strong></span>
                   <!-- Panier aimer afficher les article -->
                   <div class="actions">
                     <div class="add-to-links">                     
                         {{-- <a href="{{ route('show', ['id'=>$article->id, 'types'=>'achat']) }}" class="btn-cart"><i class="icon-basket"></i></a> --}}
                         {{-- <button class="add-to-cart" data-product-id="{{ $article->id }}" data-product-price="{{ $article->prix_unitaire_article }}"><i class="icon-heart"></i></button> --}}
                         <a href="{{ route('panier', ['id'=>$article->id, 'type'=>'panier', 'guard'=>Auth::guard()->name]) }}" class="btn-cart" data-product-id="{{ $article->id }}" data-product-price="{{ $article->prix_unitaire_article }}"><i class="icon-basket"></i></a>

                         <a href="{{ route('show', ['id'=>$article->id, 'types'=>'detailles', 'guard'=>Auth::guard()->name]) }}" class="btn-quickview"><i class="icon-eye"></i></a>
                         {{-- <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a> --}}
                     </div>
                   </div>
                 </div>
                 <!-- Aticle info -->
                 <div class="product-info">
                   <h4 class="product-title"><a href="product-details.html">{{ $article->nom_article }}</a></h4>  
                   <div class="align-items">
                     <div class="pull-left">
                       <span class="price">{{ $article->prix_unitaire_article }}F CFA</span>
                     </div>
                     <div class="pull-right">
                       <div class="reviews-icon">
                         <i class="i-color fa fa-star"></i>
                         <i class="i-color fa fa-star"></i>
                         <i class="i-color fa fa-star"></i>
                         <i class="fa fa-star-o"></i>
                         <i class="fa fa-star-o"></i>
                       </div>
                     </div>
                   </div> 
                 </div>
               </div>             
             </div>
           @endif

           @empty
             <h3 class="text-danger"> Aucune suggestion trouvé</h3>
           @endforelse   
            
          </div>
          <!-- Product Item End -->
          <!-- Start Pagination -->
          <!-- <div class="pagination">
            <div class="results-navigation pull-left">
              Showing: 1 - 6 Of 17
            </div>
            <nav class="navigation pull-right">
              <span class="current page-num">1</span>
              <a class="page-num" href="#">2</a>
              <a class="page-num" href="#">3</a>
              <div class="divider">...</div>
              <a class="next-page" href="#"><i class="fa fa-angle-right"></i></a>
            </nav>              
          </div> -->
          <!-- End Pagination -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Content -->