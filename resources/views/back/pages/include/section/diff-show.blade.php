 <!-- Product Categories Section Start -->
 <div id="content" class="product-area">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="widget-search md-30">
            <form action="#">
              <input class="form-control" placeholder="Recherche ..." type="text">
              <button type="submit">
                <i class="fa fa-search"></i>
              </button>
            </form>
          </div>
          <div class="widget-ct widget-categories mb-30">
            <div class="widget-s-title">
              <h4>Resultat Simulaire</h4>
            </div>
            <ul id="accordion-category" class="product-cat">
              {{-- <li class="panel">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-category" href="#category1">Fashion <span><i class="icon-arrow-down"></i></span></a>
                <div id="category1" class="panel-collapse collapse">
                  <ul class="listSidebar">
                    <li><a href="#">Men</a></li>
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Bag</a></li>
                  </ul>
                </div>
              </li> --}}
              
              
              <li><a href="#">{{ $famille->first()->nom_famille }} <span>({{ $familles->count() }})</span></a></li>
              <li><a href="#">{{ $modele->first()->nom_modele }}<span>({{ $modeles->count() }})</span></a></li>
              <li><a href="#">{{ $marque->first()->nom_marque }}<span>({{ $marques->count() }})</span></a></li>
              
              <li><a href="#" class="pr-all">Tout les produits</a></li>
            </ul>
          </div>
          {{-- <div class="widget-ct widget-color mb-30">
            <div class="widget-s-title">
              <h4>Color</h4>
            </div>
            <div class="widget-info color-filter clearfix">
              <ul>
                <li><a href="#"><span class="color color-1"></span>LightSalmon<span class="count">12</span></a></li>
                <li><a href="#"><span class="color color-2"></span>Dark Salmon<span class="count">20</span></a></li>
                <li><a href="#"><span class="color color-3"></span>Tomato<span class="count">59</span></a></li>
                <li class="active"><a href="#"><span class="color color-4"></span>Deep Sky Blue<span class="count">45</span></a></li>
                <li><a href="#"><span class="color color-5"></span>Electric Purple<span class="count">78</span></a></li>
                <li><a href="#"><span class="color color-6"></span>Atlantis<span class="count">10</span></a></li>
                <li><a href="#"><span class="color color-7"></span>Deep Lilac<span class="count">15</span></a></li>
              </ul>
            </div>
          </div> --}}
          {{-- <div class="widget-ct widget-filter mb-30">
            <div class="widget-s-title">
              <h4>Filter By Price</h4>
            </div>
            <!-- Range contents -->
            <div class="widget-info filter-price" style="position: relative;">
                <div>
                    <input type="text" id="range" value="" name="range" />
                </div>
                <div class="filter-btn">
                  <button class="btn btn-common" type="button">Filter</button>
                </div>                  
            </div>              
          </div>
          <div class="widget-ct widget-size mb-30">
            <div class="widget-s-title">
              <h4>Size</h4>
            </div>
            <div class="widget-info size-filter clearfix">
              <ul>
                <li><a href="#">M</a></li>
                <li class="active"><a href="#">S</a></li>
                <li><a href="#">L</a></li>
                <li><a href="#">SL</a></li>
                <li><a href="#">XL</a></li>
              </ul>
            </div>
          </div>
          <div class="widget-ct widget-banner">
            <div class="widget-info widget-banner-img">
              <a href="#"><img src="/back/assets/img/banner-left.jpg"  alt=""></a>
            </div>
          </div> --}}
        </div>
        
        
        <div class="col-md-9 col-sm-9 col-xs-12">
          <div class="shop-content">
            <div class="col-md-12">
              <div class="product-option mb-30 clearfix">
                <ul class="shop-tab">
                  <li class="active"><a aria-expanded="true" href="#grid-view" data-toggle="tab"><i class="icon-grid"></i></a></li>
                  <li><a aria-expanded="false" href="#list-view" data-toggle="tab"><i class="icon-list"></i></a></li>
                </ul>
                <!-- Size end -->               
                <div class="showing text-right">
                  <p class="hidden-xs">Les resultats trouvés de <span class="text-info">"{{ $categories->first()->nom_categorie }}"</span></p>
                </div>
              </div>            
            </div>

            <div class="tab-content">
              <div id="grid-view" class="tab-pane active">
              
              @forelse($articlefinds as $article)
                <div class="col-md-4">
                  <div class="shop-product">
                    <div class="product-box">
                    
                      <a href="#"><img src="/storage/{{ $article->images->first()->path }}" 
                      alt="image {{ $article->images->first()->id }}" height="255px" width="150px"></a>
                      <div class="cart-overlay">
                      </div>
                      <div class="actions">
                        <div class="add-to-links">
                        <a href="{{ route('panier', ['id'=>$article->id, 'type'=>'panier', 'guard'=>Auth::guard()->name]) }}" class="btn-cart"><i class="icon-basket"></i></a>
                        <a href="{{ route('show', ['id'=>$article->id, 'types'=>'detailles', 'guard'=>Auth::guard()->name]) }}" class="btn-quickview"><i class="icon-eye"></i></a>
                        </div>
                      </div>             
                    </div>
                    <div class="product-info">
                      <h4 class="product-title"><a href="product-details.html">{{$article->nom_article}}</a></h4>  
                      <div class="align-items">
                        <div class="pull-left">
                          <span class="price">{{$article->prix_unitaire_article }} F CFA</span>
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

              @empty

              @endforelse
              @forelse($modeles as $article)
                <div class="col-md-4">
                  <div class="shop-product">
                    <div class="product-box">
                    
                      <a href="#"><img src="/storage/{{ $article->images->first()->path }}" 
                      alt="image {{ $article->images->first()->id }}" height="255px" width="150px"></a>
                      <div class="cart-overlay">
                      </div>
                      <div class="actions">
                        <div class="add-to-links">
                        <a href="{{ route('panier', ['id'=>$article->id, 'type'=>'panier', 'guard'=>Auth::guard()->name]) }}" class="btn-cart"><i class="icon-basket"></i></a>
                        <a href="{{ route('show', ['id'=>$article->id, 'types'=>'detailles', 'guard'=>Auth::guard()->name]) }}" class="btn-quickview"><i class="icon-eye"></i></a>
                        </div>
                      </div>             
                    </div>
                    <div class="product-info">
                      <h4 class="product-title"><a href="product-details.html">{{$article->nom_article}}</a></h4>  
                      <div class="align-items">
                        <div class="pull-left">
                          <span class="price">{{$article->prix_unitaire_article }} F CFA</span>
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

              @empty
                  <p>Aucune suggestion</p>
              @endforelse

              @forelse($categories as $article)
                <div class="col-md-4">
                  <div class="shop-product">
                    <div class="product-box">
                    
                      <a href="#"><img src="/storage/{{ $article->images->first()->path }}" 
                      alt="image {{ $article->images->first()->id }}" height="255px" width="150px"></a>
                      <div class="cart-overlay">
                      </div>
                      <div class="actions">
                        <div class="add-to-links">
                        <a href="{{ route('panier', ['id'=>$article->id, 'type'=>'panier', 'guard'=>Auth::guard()->name]) }}" class="btn-cart"><i class="icon-basket"></i></a>
                        <a href="{{ route('show', ['id'=>$article->id, 'types'=>'detailles', 'guard'=>Auth::guard()->name]) }}" class="btn-quickview"><i class="icon-eye"></i></a>
                        </div>
                      </div>             
                    </div>
                    <div class="product-info">
                      <h4 class="product-title"><a href="product-details.html">{{$article->nom_article}}</a></h4>  
                      <div class="align-items">
                        <div class="pull-left">
                          <span class="price">{{$article->prix_unitaire_article }} F CFA</span>
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

              @empty
              <p>Aucune suggestion</p>
              @endforelse
             
              </div>
              <div id="list-view" class="tab-pane">
                <div class="shop-list">
                  <div class="col-md-12">
                    <div class="shop-product clearfix">
                      <div class="product-box">
                        <a href="#"><img src="/back/assets/img/products/img-01.jpg"  alt=""></a>
                        <div class="cart-overlay">
                        </div>
                        <div class="actions">
                          <div class="add-to-links">
                            <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                            <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                            <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="product-info">
                        <div class="fix">
                          <h4 class="product-title pull-left"><a href="product-details.html">Qui Ratione Volup</a></h4>
                          <div class="star-rating pull-right">
                            <div class="reviews-icon">
                              <i class="i-color fa fa-star"></i>
                              <i class="i-color fa fa-star"></i>
                              <i class="i-color fa fa-star"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                            </div>
                          </div>
                        </div>
                        <div class="fix mb-10">
                          <span class="price">$ 56.20</span>
                          <span class="old-price font-16px ml-10"><del>$ 96.20</del></span>
                        </div>
                        <div class="product-description mb-20">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate pariatur tenetur fugiat quasi corrupti rerum officiis doloribus, cumque, culpa optio officia voluptatum fugit quis.</p>
                        </div>  
                        <button class="btn btn-common"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to wishlist</button>                       
                      </div>
                    </div>            
                  </div>
                  <div class="col-md-12">
                    <div class="shop-product clearfix">
                      <div class="product-box">
                        <a href="#"><img src="/back/assets/img/products/img-02.jpg"  alt=""></a>
                        <div class="cart-overlay">
                        </div>
                        <div class="actions">
                          <div class="add-to-links">
                            <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                            <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                            <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="product-info">
                        <div class="fix">
                          <h4 class="product-title pull-left"><a href="product-details.html">Eius Modi Tempo</a></h4>
                          <div class="star-rating pull-right">
                            <div class="reviews-icon">
                              <i class="i-color fa fa-star"></i>
                              <i class="i-color fa fa-star"></i>
                              <i class="i-color fa fa-star"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                            </div>
                          </div>
                        </div>
                        <div class="fix mb-10">
                          <span class="price">$ 56.20</span>
                        </div>
                        <div class="product-description mb-20">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate pariatur tenetur fugiat quasi corrupti rerum officiis doloribus, cumque, culpa optio officia voluptatum fugit quis.</p>
                        </div>  
                        <button class="btn btn-common"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to wishlist</button>                       
                      </div>
                    </div>            
                  </div>
                  <div class="col-md-12">
                    <div class="shop-product clearfix">
                      <div class="product-box">
                        <a href="#"><img src="/back/assets/img/products/img-03.jpg"  alt=""></a>
                        <div class="cart-overlay">
                        </div>
                        <div class="actions">
                          <div class="add-to-links">
                            <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                            <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                            <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="product-info">
                        <div class="fix">
                          <h4 class="product-title pull-left"><a href="product-details.html">Quia Voluptas Sit</a></h4>
                          <div class="star-rating pull-right">
                            <div class="reviews-icon">
                              <i class="i-color fa fa-star"></i>
                              <i class="i-color fa fa-star"></i>
                              <i class="i-color fa fa-star"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                            </div>
                          </div>
                        </div>
                        <div class="fix mb-10">
                          <span class="price">$ 56.20</span>
                          <span class="old-price font-16px ml-10"><del>$ 96.20</del></span>
                        </div>
                        <div class="product-description mb-20">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate pariatur tenetur fugiat quasi corrupti rerum officiis doloribus, cumque, culpa optio officia voluptatum fugit quis.</p>
                        </div>  
                         <button class="btn btn-common"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to wishlist</button>                     
                      </div>
                    </div>            
                  </div>

                  <div class="col-md-12">
                    <div class="shop-product clearfix">
                      <div class="product-box">
                        <a href="#"><img src="/back/assets/img/products/img-04.jpg"  alt=""></a>
                        <div class="cart-overlay">
                        </div>
                        <div class="actions">
                          <div class="add-to-links">
                            <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                            <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                            <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="product-info">
                        <div class="fix">
                          <h4 class="product-title pull-left"><a href="product-details.html">An Tium Lores Eos</a></h4>
                          <div class="star-rating pull-right">
                            <div class="reviews-icon">
                              <i class="i-color fa fa-star"></i>
                              <i class="i-color fa fa-star"></i>
                              <i class="i-color fa fa-star"></i>
                              <i class="i-color fa fa-star"></i>
                              <i class="fa fa-star-o"></i>
                            </div>
                          </div>
                        </div>
                        <div class="fix mb-10">
                          <span class="price">$ 56.20</span>
                        </div>
                        <div class="product-description mb-20">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate pariatur tenetur fugiat quasi corrupti rerum officiis doloribus, cumque, culpa optio officia voluptatum fugit quis.</p>
                        </div>  
                        <button class="btn btn-common"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to wishlist</button>                       
                      </div>
                    </div>            
                  </div>

                  <div class="col-md-12">
                    <div class="shop-product clearfix">
                      <div class="product-box">
                        <a href="#"><img src="/back/assets/img/products/img-05.jpg"  alt=""></a>
                        <div class="cart-overlay">
                        </div>
                        <div class="actions">
                          <div class="add-to-links">
                            <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                            <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                            <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="product-info">
                        <div class="fix">
                          <h4 class="product-title pull-left"><a href="product-details.html">Magni Dolores Eos</a></h4>
                          <div class="star-rating pull-right">
                            <div class="reviews-icon">
                              <i class="i-color fa fa-star"></i>
                              <i class="i-color fa fa-star"></i>
                              <i class="i-color fa fa-star"></i>
                              <i class="i-color fa fa-star"></i>
                              <i class="fa fa-star-o"></i>
                            </div>
                          </div>
                        </div>
                        <div class="fix mb-10">
                          <span class="price">$ 56.20</span>
                        </div>
                        <div class="product-description mb-20">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate pariatur tenetur fugiat quasi corrupti rerum officiis doloribus, cumque, culpa optio officia voluptatum fugit quis.</p>
                        </div>  
                        <button class="btn btn-common"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to wishlist</button>                       
                      </div>
                    </div>            
                  </div>

                </div>
              </div>
              
            </div>
          </div>

          <!-- Start Pagination -->
          <!-- <div class="pagination">
            <div class="results-navigation pull-left">
              Showing: 1 - 6 Of 17
            </div>
            <nav class="navigation pull-right">
              <a class="next-page" href="#"><i class="fa fa-angle-left"></i></a>
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
  <!-- Product Categories Section End -->   