@extends('back.layout.client-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'Client')
@section('contentClient')
    <!-- Main Content Start -->
    <section class="section gray-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-4">          
              <div class="categories-wrapper white-bg">
                <h3 class="block-title">Familles d'Articles</h3>
                <ul class="vertical-menu">
                  
                  <li>
                    <a href="#">Recents</a>
                  </li>
                  <li>
                    <a href="#">Toutes article</a>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                      Electroniques <i class="caret-right fa fa-angle-right"></i>
                    </a>
                    <ul class="dropdown-menu">
                  
                      <li><a href="#">smartphones</a></li>
                      <li><a href="#">ordinateurs</a></li>
                      <li><a href="#">tablettes</a></li>
                      <li><a href="#">téléviseurs</a></li>
                      <li><a href="#">appareils photo</a></li>
                      <li><a href="#">casques</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                      Vêtements & mode <i class="caret-right fa fa-angle-right"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Bags & Accessories</a></li>
                      <li><a href="#">Man's Products</a></li>
                      <li><a href="#">Woman's Products</a></li>
                      <li><a href="#">Top Brands</a></li>
                      <li><a href="#">Special Offer</a></li>
                      <li><a href="#">Leather's Products</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                      Mobilier et décoration intérieure <i class="caret-right fa fa-angle-right"></i>
                    </a>
                    <ul class="dropdown-menu">
                      
                      <li><a href="#">maison</a></li>
                      <li><a href="#">meubles</a></li>
                      <li><a href="#">décorations murales</a></li>
                      <li><a href="#">careau</a></li>
                      <li><a href="#">tapis</a></li>
                      <li><a href="#">rideaux</a></li>   
                      <li><a href="#">lampes</a></li>              
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                      Électroménagers <i class="caret-right fa fa-angle-right"></i>
                    </a>
                    <ul class="dropdown-menu">
                  
                      <li><a href="#">réfrigérateurs</a></li>
                      <li><a href="#">cuisinières</a></li>
                      <li><a href="#">aspirateurs</a></li>
                      <li><a href="#">fours à micro-ondes</a></li>                    
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                      Beauté & soins personnels <i class="caret-right fa fa-angle-right"></i>
                    </a>
                    <ul class="dropdown-menu">
                  
                      <li><a href="#">Produits de beauté</a></li>
                      <li><a href="#">maquillage</a></li>
                      <li><a href="#">soins de la peau</a></li>
                      <li><a href="#">parfums</a></li>
                      <li><a href="#">produits capillaires</a></li>                   
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                      Sports et loisirs  <i class="caret-right fa fa-angle-right"></i>
                    </a>
                    <ul class="dropdown-menu">
                  
                      <li><a href="#">vêtements de sport</a></li>
                      <li><a href="#">vélos</a></li>
                      <li><a href="#">articles de camping</a></li>
                      <li><a href="#">équipements de fitness</a></li>
                      
                    </ul>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                          Alimentation et boissons  <i class="caret-right fa fa-angle-right"></i>
                      </a>
                      <ul class="dropdown-menu">
                  
                        <li><a href="#">boissons</a></li>
                        <li><a href="#">snacks</a></li>
                        <li><a href="#">produits de boulangerie</a></li>					  
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                          Outils et bricolage   <i class="caret-right fa fa-angle-right"></i>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#">outils électriques</a></li>
                        <li><a href="#">équipement de jardinage</a></li>
                        <li><a href="#">fournitures de bricolage</a></li>
                        <li><a href="#">fournitures d'électricité</a></li>					 
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                          Équipement de bureau  <i class="caret-right fa fa-angle-right"></i>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#">mobilier de bureau</a></li>
                        <li><a href="#">matériel informatique</a></li>
                        
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                          Véhicules & moto  <i class="caret-right fa fa-angle-right"></i>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#">neuf</a></li>
                        <li><a href="#">Véhicules d'occasion</a></li>
                        <li><a href="#">Pièces de rechange</a></li>
                        <li><a href="#">Équipements de garage</a></li>
                        <li><a href="#">Produits d'entretien automobile</a></li>
                      </ul>
                    </li>
                    
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                          seconde main  <i class="caret-right fa fa-angle-right"></i>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Ordinataire</a></li>
                        <li><a href="#">Smart Phone</a></li>
                        <li><a href="#">Tablette</a></li>
                        <li><a href="#">Télévision</a></li>
                        <li><a href="#">Moto</a></li>
                        <li><a href="#">Autres</a></li>
                      </ul>
                    </li>
                   
  
                </ul>
              </div>
            </div>
            
              <div id="data" data-mavariable="{{ json_encode($images) }}"></div>
            <div class="col-md-9 col-sm-8">		
                <div class="touch-slider owl-carousel" data-slider-pagination="true">
                 @forelse ($articles as $article)
                 @php
                   $items=$article->images->first();
                 @endphp                
                 @if(isset($items))                 
                 <div class="item">
                  {{-- <a href="{{ route('show', ['id'=>$article->categorie_id ]) }}"><img src="storage/images/{{ $items->nom_image }}" alt="image {{ $items->id }}"></a> --}}
                </div>
                 
                 @endif
                 
                 
                 @empty
                   
                 @endforelse
                  
                      <div class="item">
                        
                      {{-- <a href="" id="image-container"></a> --}}
  
                      <div >
                      <!-- Les images seront affichées ici -->
                      {{-- <div class="item">
                        <a href="category.html"><img src="/back/assets/img/touch-slider/img2.jpg" alt="image 2"></a>
                      </div>
                      <div class="item">
                        <a href="category.html"><img src="/back/assets/img/touch-slider/img3.jpg" alt="image 3"></a>
                      </div> --}}

                </div>
                  
            </div>
                
              
          </div>
        </div>
      </section>
      <!-- Main Content End -->    
  
      <!-- Feature ctg Section Start -->
      <section class="feature-categories section">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="feature-item-content">
                <img src="/back/assets/img/feature/img1.jpg"  alt="">
                <div class="feature-content">
                  <div class="banner-text">
                    <h4>Men's Collection</h4>
                    <p>Summer Exclusive</p>
                  </div>                
                  <a href="#" class="btn btn-common">Shop Now</a>
                </div>
              </div>
            </div>         
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="feature-item-content">
                <img src="/back/assets/img/feature/img3.jpg"  alt="">
                <div class="feature-content">
                  <div class="banner-text">
                    <h4>Women's Clothing</h4>
                    <p>Up to <span>70%</span> OFF</p>
                  </div>                 
                  <a href="#" class="btn btn-common">Shop Now</a>
                </div>
              </div>
            </div>
             <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="feature-item-content mb-30">
                <img src="/back/assets/img/feature/img2.jpg"  alt="">
                <div class="feature-content">
                  <div class="banner-text accessories">
                    <h4>Accessories</h4>
                    <p>Handpicked for Men/Women</p>
                  </div>
                  <a href="#" class="btn btn-common">Shop Now</a>
                </div>
              </div>
              <div class="feature-item-content">
                <img src="/back/assets/img/feature/img4.jpg"  alt="">
                <div class="feature-content">
                  <div class="banner-text accessories">
                    <h4>Kids Essentials</h4>
                    <p>Best Collection for Kids</p>
                  </div>
                  <a href="#" class="btn btn-common">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Feature ctg Section End -->
  
      <!-- Collection des articles -->
      <section id="shop-collection">
        <div class="container">
          <h1 class="section-title">Nouveautés</h1>
          <hr class="lines">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <!-- Aticle section -->
              <div class="shop-product">
                <div class="product-box">
                  <a href="#"><img src="/back/assets/img/products/img-01.jpg"  alt=""></a>
                  <div class="cart-overlay">
                  </div>
                  <span class="sticker new"><strong>Nouveau</strong></span>
                  <div class="actions">
                    <!-- Panier aimer afficher larticle -->
                    <div class="add-to-links">                     
                        <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                        <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                    </div>
                  </div>
                </div>
                <!-- Aticle Info -->
                <div class="product-info">
                  <h4 class="product-title"><a href="product-details.html">Qui Ratione Volup</a></h4>  
                  <div class="align-items">
                    <div class="pull-left">
                      <span class="price">$49.00</span>
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
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="shop-product">                
                <div class="product-box">
                  <a href="#"><img src="/back/assets/img/products/img-02.jpg"  alt=""></a>
                  <div class="cart-overlay">
                  </div>
                  <span class="sticker discount"><strong>-40%</strong></span>
                  <div class="actions">
                    <div class="add-to-links">
                      <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                      <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                      <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                    </div>
                  </div>             
                </div>

                <div class="product-info">
                  <h4 class="product-title"><a href="product-details.html">Eius Modi Tempo</a></h4>  
                  <div class="align-items">
                    <div class="pull-left">
                      <span class="price">$59.00</span>
                    </div>
                    <div class="pull-right">
                      <div class="reviews-icon">
                        <i class="i-color fa fa-star"></i>
                        <i class="i-color fa fa-star"></i>
                        <i class="i-color fa fa-star"></i>
                        <i class="i-color fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>            
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="shop-product">
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
                  <h4 class="product-title"><a href="product-details.html">Quia Voluptas Sit</a></h4>  
                  <div class="align-items">
                    <div class="pull-left">
                      <span class="price">$69.00 <del>$79.00</del></span>
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
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="shop-product">
                <div class="product-box">
                  <a href="#"><img src="/back/assets/img/products/img-04.jpg"  alt=""></a>
                  <div class="cart-overlay">
                  </div>
                  <span class="sticker sale"><strong>Sale</strong></span>
                  <div class="actions">
                    <div class="add-to-links">
                      <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                      <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                      <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                    </div>
                  </div>             
                </div>
                <div class="product-info">
                  <h4 class="product-title"><a href="product-details.html">An Tium Lores Eos</a></h4>  
                  <div class="align-items">
                    <div class="pull-left">
                      <span class="price">$39.00</span>
                    </div>
                    <div class="pull-right">
                      <div class="reviews-icon">
                        <i class="i-color fa fa-star"></i>
                        <i class="i-color fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>            
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="shop-product">
                <div class="product-box">
                  <a href="#"><img src="/back/assets/img/products/img-05.jpg"  alt=""></a>
                  <div class="cart-overlay">
                  </div>
                  <span class="sticker sale"><strong>Sale</strong></span>
                  <div class="actions">
                    <div class="add-to-links">
                      <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                      <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                      <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                    </div>
                  </div>             
                </div>
                <div class="product-info">
                  <h4 class="product-title"><a href="product-details.html">Magni Dolores Eos</a></h4>  
                  <div class="align-items">
                    <div class="pull-left">
                      <span class="price">$69.00</span>
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
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="shop-product">
                <div class="product-box">
                  <a href="#"><img src="/back/assets/img/products/img-06.jpg"  alt=""></a>
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
                  <h4 class="product-title"><a href="product-details.html">Natur Aut Odit Aut</a></h4>  
                  <div class="align-items">
                    <div class="pull-left">
                      <span class="price">$39.00 <del>$79.00</del></span>
                    </div>
                    <div class="pull-right">
                      <div class="reviews-icon">
                        <i class="i-color fa fa-star"></i>
                        <i class="i-color fa fa-star"></i>
                        <i class="i-color fa fa-star"></i>
                        <i class="i-color fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>             
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="shop-product">
                <div class="product-box">
                  <a href="#"><img src="/back/assets/img/products/img-07.jpg"  alt=""></a>
                  <div class="cart-overlay">
                  </div>
                  <span class="sticker new"><strong>NEW</strong></span>
                  <div class="actions">
                    <div class="add-to-links">
                      <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                      <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                      <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                    </div>
                  </div>             
                </div>
                <div class="product-info">
                  <h4 class="product-title"><a href="product-details.html">Nisi Ut Aliqu</a></h4>  
                  <div class="align-items">
                    <div class="pull-left">
                      <span class="price">$56.00</span>
                    </div>
                    <div class="pull-right">
                      <div class="reviews-icon">
                        <i class="i-color fa fa-star"></i>
                        <i class="i-color fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>             
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="shop-product">
                <div class="product-box">
                  <a href="#"><img src="/back/assets/img/products/img-08.jpg"  alt=""></a>
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
                  <h4 class="product-title"><a href="product-details.html">Beatae Vitae Dicta</a></h4>  
                  <div class="align-items">
                    <div class="pull-left">
                      <span class="price">$79.00</span>
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
          </div>
        </div>
      </section>
      <!-- Shop Collection Section End -->
  
      <!--  Discount Product Start  -->
      <section class="discount-product-area">
        <div class="container">
          <div class="row">
            <div class="discount-text">
              <p>Best Bargains</p>
              <h3>Exclusive Deals of This Season!</h3>
              <a href="#" class="btn btn-common btn-large">View Deals</a>
            </div>
          </div>
        </div>
      </section>
      <!--  Discount Product End  -->
  
      <!-- New Products Section Start-->
      <section class="section">
        <div class="container">
          <h1 class="section-title">Featured Products</h1>
          <hr class="lines">
          <div class="row">
            <div class="col-md-12">
              <div id="new-products" class="owl-carousel">
                <div class="item">
                  <div class="shop-product">
                    <div class="product-box">
                      <a href="#"><img src="/back/assets/img/feature-products/img-01.jpg"  alt=""></a>
                      <div class="cart-overlay">
                      </div>
                       <span class="sticker new"><strong>NEW</strong></span>
                      <div class="actions">
                        <div class="add-to-links">
                          <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                          <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                          <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                        </div>
                      </div>             
                    </div>
                    <div class="product-info">
                      <h4 class="product-title"><a href="product-details.html">Nisi Ut Aliqu</a></h4>  
                      <div class="align-items">
                        <div class="pull-left">
                          <span class="price">$49.00</span>
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
                <div class="item">
                  <div class="shop-product">
                    <div class="product-box">
                      <a href="#"><img src="/back/assets/img/feature-products/img-02.jpg"  alt=""></a>
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
                      <h4 class="product-title"><a href="product-details.html">Eius Modi Tempo</a></h4>  
                      <div class="align-items">
                        <div class="pull-left">
                          <span class="price">$59.00 <del>$79.00</del></span>
                        </div>
                        <div class="pull-right">
                          <div class="reviews-icon">
                            <i class="i-color fa fa-star"></i>
                            <i class="i-color fa fa-star"></i>
                            <i class="i-color fa fa-star"></i>
                            <i class="i-color fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                        </div>
                      </div> 
                    </div>
                  </div> 
                </div>
                <div class="item">
                  <div class="shop-product">
                    <div class="product-box">
                      <a href="#"><img src="/back/assets/img/feature-products/img-03.jpg"  alt=""></a>
                      <div class="cart-overlay">
                      </div>                    
                      <span class="sticker sale"><strong>Sale</strong></span>
                      <div class="actions">
                    <div class="add-to-links">
                      <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                      <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                      <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                    </div>
                  </div>             
                    </div>
                    <div class="product-info">
                      <h4 class="product-title"><a href="product-details.html">Quia Voluptas Sit</a></h4>  
                      <div class="align-items">
                        <div class="pull-left">
                          <span class="price">$68.00</span>
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
                <div class="item">
                  <div class="shop-product">
                    <div class="product-box">
                      <a href="#"><img src="/back/assets/img/feature-products/img-04.jpg"  alt=""></a>
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
                      <h4 class="product-title"><a href="product-details.html">An Tium Lores Eos</a></h4>  
                      <div class="align-items">
                        <div class="pull-left">
                          <span class="price">$59.00 <del>$69.00</del></span>
                        </div>
                        <div class="pull-right">
                          <div class="reviews-icon">
                            <i class="i-color fa fa-star"></i>
                            <i class="i-color fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                        </div>
                      </div> 
                    </div>
                  </div> 
                </div>
                <div class="item">
                  <div class="shop-product">
                    <div class="product-box">
                      <a href="#"><img src="/back/assets/img/feature-products/img-05.jpg"  alt=""></a>
                      <div class="cart-overlay">
                      </div>
                      <span class="sticker discount"><strong>-40%</strong></span>
                      <div class="actions">
                        <div class="add-to-links">
                          <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                          <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                          <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                        </div>
                      </div>             
                    </div>
                    <div class="product-info">
                      <h4 class="product-title"><a href="product-details.html">Magni Dolores Eos</a></h4>  
                      <div class="align-items">
                        <div class="pull-left">
                          <span class="price">$79.00</span>
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
                <div class="item">
                  <div class="shop-product">
                    <div class="product-box">
                      <a href="#"><img src="/back/assets/img/feature-products/img-06.jpg"  alt=""></a>
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
                      <h4 class="product-title"><a href="product-details.html">Natur Aut Odit Aut</a></h4>  
                      <div class="align-items">
                        <div class="pull-left">
                          <span class="price">$69.00</span>
                        </div>
                        <div class="pull-right">
                          <div class="reviews-icon">
                            <i class="i-color fa fa-star"></i>
                            <i class="i-color fa fa-star"></i>
                            <i class="i-color fa fa-star"></i>
                            <i class="i-color fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                        </div>
                      </div> 
                    </div>
                  </div>  
                </div>
                <div class="item">
                  <div class="shop-product">
                    <div class="product-box">
                      <a href="#"><img src="/back/assets/img/feature-products/img-07.jpg"  alt=""></a>
                      <div class="cart-overlay">
                      </div>
                      <span class="sticker sale"><strong>Sale</strong></span>
                      <div class="actions">
                        <div class="add-to-links">
                          <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                          <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                          <a  class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                        </div>
                      </div>             
                    </div>
                    <div class="product-info">
                      <h4 class="product-title"><a href="product-details.html">Qui Ratione Volup</a></h4>  
                      <div class="align-items">
                        <div class="pull-left">
                          <span class="price">$56.00</span>
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
              </div>
            </div>                              
          </div>
        </div>
      </section>
      <!-- New Products Section End -->
  
      <!--  Content Area  Section Start -->
      <section id="content-area">
        <div class="container">
          <div class="hero-land clearfix">
            <div class="landing caption">
              <h2>Multi-vendor eCommerce Template</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis rem, ducimus reprehenderit sed molestiae iure sapiente accusamus incidunt minima expedita velit assumenda vitae libero. Eaque nostrum magni architecto, corporis doloremque!</p>
              <p>
                <a href="category.html" class="btn btn-common">Explore</a>
              </p>
            </div>
          </div>
        </div>
      </section>
      <!--  Content Area  Section End -->
  
      <!-- Services Section Starts -->
      <section id="services" class="section">
        <!-- Container Starts -->
        <div class="container">
          <div class="row">          
            <!-- Start Service-->
            <div class="col-md-4 col-sm-6">
              <div class="services-box">
                <div class="services-icon">
                  <i class="icon-people"></i>
                </div>
                <div class="services-content">
                  <h4><a href="#">Multi-vendor eCommerce</a></h4>
                  <p>
                    Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service-->
            <!-- Start Service-->
            <div class="col-md-4 col-sm-6">
              <div class="services-box">
                <div class="services-icon">
                  <i class="icon-screen-desktop"></i>
                </div>
                <div class="services-content">
                  <h4><a href="#">Clean Design</a></h4>
                  <p>
                    Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service-->
            <!-- Start Service-->
            <div class="col-md-4 col-sm-6">
              <div class="services-box">
                <div class="services-icon">
                  <i class="icon-basket-loaded"></i>
                </div>
                <div class="services-content">
                  <h4><a href="#">100+ eCommerce Elements</a></h4>
                  <p>
                    Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service-->
            <!-- Start Service-->
            <div class="col-md-4 col-sm-6">
              <div class="services-box">
                <div class="services-icon">
                  <i class="icon-layers"></i>
                </div>
                <div class="services-content">
                  <h4><a href="#">Included Business Pages</a></h4>
                  <p>
                    Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service-->
            <!-- Start Service-->
            <div class="col-md-4 col-sm-6">
              <div class="services-box">
                <div class="services-icon">
                  <i class="icon-screen-tablet"></i>
                </div>
                <div class="services-content">
                  <h4><a href="#">Fully Responsive</a></h4>
                  <p>
                    Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service-->
            <!-- Start Service -->
            <div class="col-md-4 col-sm-6">
              <div class="services-box">
                <div class="services-icon">
                  <i class="icon-chemistry"></i>
                </div>
                <div class="services-content">
                  <h4><a href="#">Cutting-edge Features</a></h4>
                  <p>
                    Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service-->
            <!-- Start Service-->
            <div class="col-md-4 col-sm-6">
              <div class="services-box">
                <div class="services-icon">
                  <i class="icon-settings"></i>
                </div>
                <div class="services-content">
                  <h4><a href="#">Completely Customizable</a></h4>
                  <p>
                    Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service-->
            <!-- Start Service-->
            <div class="col-md-4 col-sm-6">
              <div class="services-box">
                <div class="services-icon">
                  <i class="icon-rocket"></i>
                </div>
                <div class="services-content">
                  <h4><a href="#">Fast and Well-optimized</a></h4>
                  <p>
                    Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service-->
            <!-- Start Service -->
            <div class="col-md-4 col-sm-6">
              <div class="services-box">
                <div class="services-icon">
                  <i class="icon-umbrella"></i>
                </div>
                <div class="services-content">
                  <h4><a href="#">Rich Doc and Support</a></h4>
                  <p>
                    Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Service-->
          </div>
        </div>
        <!-- Container Ends -->
      </section>
      <!-- Services Section Ends -->
  
      <!-- Start Testimonial Section  -->        
      <div class="testimonial section">
        <div class="container">
          <div class="row">
            <!-- Testimonial section  -->
            <div class="testimonials-carousel owl-carousel">
              <div class="item">
                <div class="testimonial-item">
                  <div class="img">
                    <a href="#"><img src="/back/assets/img/testimonial/img1.jpg"  alt=""></a>
                  </div>
                  <div class="datils">                
                    <p>“ Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe porro neque a nam nulla quos atque reprehenderit eius corrupti amet! <br> hic et quidem. Dignissimos ad maxime velit unde inventore quasi vero dolorem. “</p>
                    <h5>Jared Erondu</h5> 
                    <span>- CEO & art director</span>
                  </div>
                </div>
              </div>                
              <div class="item">
                <div class="testimonial-item">
                  <div class="img">
                    <a href="#"><img src="/back/assets/img/testimonial/img2.jpg"  alt=""></a>
                  </div>
                  <div class="datils">                
                    <p>“ Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe porro neque a nam nulla quos atque reprehenderit eius corrupti amet! <br> hic et quidem. Dignissimos ad maxime velit unde inventore quasi vero dolorem. “</p>
                    <h5>Cadic Vegeta</h5> 
                    <span>- Graphic Design</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="img">
                    <a href="#"><img src="/back/assets/img/testimonial/img3.jpg"  alt=""></a>
                  </div>
                  <div class="datils">                
                    <p>“ Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe porro neque a nam nulla quos atque reprehenderit eius corrupti amet! <br> hic et quidem. Dignissimos ad maxime velit unde inventore quasi vero dolorem. “</p>
                    <h5>Jonathan Beri</h5> 
                    <span>- Web Developer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Testimonial Section  -->
  
      <!-- List Cart Products Start -->
      <section class="listcart-products section">
        <div class="container">
          <h1 class="section-title">Recommended For You</h1>
          <hr class="lines">
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="listcartproducts">
                <h2 class="title-cart">Men's</h2>
                <div class="products-item-inner">
                  <div class="products-item">
                    <div class="left">
                      <a href="product-details.html"><img src="/back/assets/img/products/p1.jpg" alt=""></a>
                      <a href="product-details.html" class="quick-view"><i class="icon-magnifier"></i></a>
                    </div>
                    <div class="right">
                      <h5 class="product-name">Floral Print Buttoned</h5>
                        <div class="reviews-icon">
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <div class="price">
                          $ 49.00
                        </div>
                    </div>
                  </div>
                  <div class="products-item">
                    <div class="left">
                      <a href="product-details.html"><img src="/back/assets/img/products/p2.jpg" alt=""></a>
                      <a href="product-details.html" class="quick-view"><i class="icon-magnifier"></i></a>
                    </div>
                    <div class="right">
                      <h5 class="product-name">Floral Print Buttoned</h5>
                        <div class="reviews-icon">
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <div class="price">
                          $ 12.00
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="listcartproducts">
                <h2 class="title-cart">Women's</h2>
                <div class="products-item-inner">
                  <div class="products-item">
                    <div class="left">
                      <a href="product-details.html"><img src="/back/assets/img/products/p3.jpg" alt=""></a>
                      <a href="product-details.html" class="quick-view"><i class="icon-magnifier"></i></a>
                    </div>
                    <div class="right">
                      <h5 class="product-name">Floral Print Buttoned</h5>
                        <div class="reviews-icon">
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <div class="price">
                          $ 59.00
                          <span class="old-price">$ 69.78</span>
                        </div>  
                    </div>
                  </div>
                  <div class="products-item">
                    <div class="left">
                      <a href="product-details.html"><img src="/back/assets/img/products/p4.jpg" alt=""></a>
                      <a href="product-details.html" class="quick-view"><i class="icon-magnifier"></i></a>
                    </div>
                    <div class="right">
                      <h5 class="product-name">Floral Print Buttoned</h5>
                        <div class="reviews-icon">
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <div class="price">
                          $ 19.00
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="listcartproducts">
                <h2 class="title-cart">Accessories</h2>
                <div class="products-item-inner">
                  <div class="products-item">
                    <div class="left">
                      <a href="product-details.html"><img src="/back/assets/img/products/p5.jpg" alt=""></a>
                      <a href="product-details.html" class="quick-view"><i class="icon-magnifier"></i></a>
                    </div>
                    <div class="right">
                      <h5 class="product-name">Floral Print Buttoned</h5>
                        <div class="reviews-icon">
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="i-color fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                        <div class="price">
                          $ 36.60
                        </div>
                    </div>
                  </div>
                  <div class="products-item">
                    <div class="left">
                      <a href="product-details.html"><img src="/back/assets/img/products/p6.jpg" alt=""></a>
                      <a href="product-details.html" class="quick-view"><i class="icon-magnifier"></i></a>
                    </div>
                    <div class="right">
                      <h5 class="product-name">Floral Print Buttoned</h5>
                      <div class="reviews-icon">
                        <i class="i-color fa fa-star"></i>
                        <i class="i-color fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                      <div class="price">
                        $ 12.00
                        <span class="old-price">$ 16.78</span>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- List Cart Products End --> 
  
      <!-- Start Client Section -->
      <div class="client section">
        <div class="container">
          <div class="row">
            <div id="client-logo" class="owl-carousel">
              <div class="client-logo item">
                <a href="#">
                  <img src="/back/assets/img/clients/logo-01.png" alt="" />
                </a>
              </div>
              <div class="client-logo item">
                <a href="#">
                  <img src="/back/assets/img/clients/logo-02.png" alt="" />
                </a>
              </div>
              <div class="client-logo item">
                <a href="#">
                  <img src="/back/assets/img/clients/logo-03.png" alt="" />
                </a>
              </div>
              <div class="client-logo item">
                <a href="#">
                  <img src="/back/assets/img/clients/logo-04.png" alt="" />
                </a>
              </div>
              <div class="client-logo item">
                <a href="#">
                  <img src="/back/assets/img/clients/logo-05.png" alt="" />
                </a>
              </div>
              <div class="client-logo item">
                <a href="#">
                  <img src="/back/assets/img/clients/logo-06.png" alt="" />
                </a>
              </div>
              <div class="client-logo item">
                <a href="#">
                  <img src="/back/assets/img/clients/logo-07.png" alt="" />
                </a>
              </div>
              <div class="client-logo item">
                <a href="#">
                  <img src="/back/assets/img/clients/logo-08.png" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Client Section -->
  
      <!-- Support Section Start -->
      <div class="support section">
        <div class="container">
          <div class="row">
           <div class="support-inner">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="row-normal clearfix">
                <div class="support-info">
                  <div class="info-title">
                    <i class="icon-plane"></i>
                    Free Shipping Worldwide
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="row-normal clearfix">
                <div class="support-info">
                  <div class="info-title">
                    <i class="icon-earphones-alt"></i>
                    24/7 Customer Service
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="row-normal clearfix">
                <div class="support-info">
                  <div class="info-title">
                    <i class="icon-refresh"></i>
                    Easy Return Policy
                  </div>
                </div>
              </div>
            </div>
           </div>
          </div>
        </div>
      </div>
      <!-- Support Section End -->
          
     @endsection