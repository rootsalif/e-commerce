@extends('back.layout.plateform-layout')

@section('pageTitle', isset($pageTitle)? $pageTitle: 'SUGU-ARTISANAL')
@section('contentClient')

{{-- @php
  $cart = session('cart');
  
@endphp --}}


{{-- @if(session('cart'))

  <div class="cart">              
      @foreach($cart as $productId => $productData)
          <div class="content">
            
              <a href="#" class="title">{{ $productData['name'] }}</a>
              <p class="quantity">Qte: {{ $productData['quantity'] }}</p>
              <span class="price">${{ $productData['price'] }}</span>
          </div>
      @endforeach
  </div>
@endif --}}
    <!-- Main Content Start -->
    <section class="section gray-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-4">          
              <div class="categories-wrapper white-bg">
                <h3 class="block-title">Categories</h3>
                <ul class="vertical-menu">
                  
                  <li>
                    <a href="{{ route('show', ['id'=>1, 'types'=>'recent' ]) }}">Recents</a>
                  </li>
                  <li>
                    <a href="{{ route('show', ['id'=>1, 'types'=>'all' ]) }}">Toutes article</a>
                  </li>
                  
                  @forelse($categorieMenu as $categorie)
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                        {{$categorie->nom_categorie}} <i class="caret-right fa fa-angle-right"></i>
                      </a>
                      <ul class="dropdown-menu">
                        @forelse($categorie->subcategories as $subcatego)
                                               
                        <li><a href="{{ route('show', ['id'=>$subcatego->id, 'types'=>'subCatego' ]) }}">{{$subcatego->nom_s_categorie}}</a></li>
                        @empty
                        <li><a href="#">vide</a></li>
                        @endforelse                        
                      </ul>
                    </li>
                  @empty

                  @endforelse
                  
                  <!-- <li class="dropdown">
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
                  </li> -->
                  <!-- <li class="dropdown">
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
                  <li class="dropdown"> -->
                      <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
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
  
                </ul> -->
              </div>
            </div>
            
              <div id="data" data-mavariable="{{ json_encode($images) }}"></div>
            <div class="col-md-9 col-sm-8">		
                <div class="touch-slider owl-carousel" data-slider-pagination="true">
                 @forelse ($articles as $article)
                  
                 @php
                   $imgs=$article->images->first();
                  
                 @endphp 
                              
                 @if(isset($imgs))                   
                 <div class="item">
                  
                  <a href="{{ route('show', ['id'=>$article->id, 'types'=>'articles' ]) }}"><img src="/storage/{{ $imgs->path }}" width="1024"
                    height="630" alt="image {{ $imgs->id }}"></a>
                </div>
                 
                 @endif
                 
                 
                 @empty
                   
                 @endforelse
                  
                      {{-- <a href="" id="image-container"></a> --}}
  
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
            @php
              $i=0;              
            @endphp
          @forelse ($categories as $categorie)
         
            @php
            $item=$categorie->first();              
              if(isset($item)){                
                $i++;
                $imgs=$item;  
                $catego_article=$categorieArticles->find($imgs->article_id);              
              }                
            @endphp
            
            @if ($i>0 && $i<=2)
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="feature-item-content">
                <a href="{{ route('show', ['id'=>$catego_article->id, 'types'=>'colections' ]) }}">
                  <img src="/storage/{{ $imgs->path }}" width="370" height="520" alt="image {{ $imgs->id }}">
                </a>
                <div class="feature-content">
                  <div class="banner-text">
                    <h4>Collection</h4>
                    <p>{{ $catego_article->categorie->nom_categorie }}</p>
                  </div>                
                  <a href="{{ route('show', ['id'=>$catego_article->id, 'types'=>'colections' ]) }}" class="btn btn-common">Détailler</a>
                </div>
              </div>
            </div> 
            @endif
              
            @if ($i>2 && $i<=4)
            <div class="col-md-4 col-sm-4 col-xs-12">
              @if ($i==3)
              <div class="feature-item-content mb-30">
                <a href="{{ route('show', ['id'=>$catego_article->id, 'types'=>'colections' ]) }}">
                  <img src="/storage/{{ $imgs->path }}" width="370" height="245" alt="image {{ $imgs->id }}">
                </a>
                <div class="feature-content">
                  <div class="banner-text accessories">
                    <h4>Collection</h4>
                    <p>{{ $catego_article->categorie->nom_categorie }}</p>
                  </div>
                  <a href="{{ route('show', ['id'=>$catego_article->id, 'types'=>'colections']) }}" class="btn btn-common">Détailler</a>
                </div>
              </div>
              @endif
              @if ($i==4)
              <div class="feature-item-content">
                <a href="{{ route('show', ['id'=>$catego_article->id, 'types'=>'colections' ]) }}">
                  <img src="/storage/{{ $imgs->path }}" width="370" height="245" alt="image {{ $imgs->id }}">
                </a>
                <div class="feature-content">
                  <div class="banner-text accessories">
                    <h4>Collection</h4>
                    <p>{{ $catego_article->categorie->nom_categorie }}</p>
                  </div>
                  <a href="{{ route('show', ['id'=>$catego_article->id, 'types'=>'colections']) }}" class="btn btn-common">Détailler</a>
                </div>
              </div>  
              @endif            
                         
            </div>
                {{-- {{ dd($i) }} --}}
            @endif              
          @empty
              
          @endforelse
          @php
            $i=0;
          @endphp
           
          </div>
        </div>
      </section>
      <!-- Feature ctg Section End -->
      
      
      <!-- Shop Collection Section Start -->
      <section id="shop-collection">
        <div class="container">
          <h1 class="section-title">Annonces</h1>
          <hr class="lines">
          <div class="row">
            <!-- Aticle blog foreach -->
            @forelse ($articlesAlea as $article)
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
              
            @endforelse            
        
           
          </div>
        </div>
      </section>
      <!-- Shop Collection Section End -->
  
      <!--  Discount Product Start  -->
      <section class="discount-product-area">
        <div class="container">
          <div class="row">
            <div class="discount-text">
              <p>Articles Recents</p>
              <h3>Profitez vous!</h3>
              {{-- <a href="#" class="btn btn-common btn-large">View Deals</a> --}}
            </div>
          </div>
        </div>
      </section>
      <!--  Discount Product End  -->
  
      <!-- New Products Section Start-->
      <section class="section">
        <div class="container">
          <h1 class="section-title">Articles Recent</h1>
          <hr class="lines">
          <div class="row">
            <div class="col-md-12">
              <div id="new-products" class="owl-carousel">
                
                  @forelse ($articlesRecent as $article)
                  @php
                    $imgs=$article->images->first();                  
                  @endphp    
                  <div class="item">
                                     
                  @if(isset($imgs))  
                  
                      <div class="shop-product">
                        <!-- Aticle section -->
                        <div class="product-box">                                   
                      
                          <a href="{{ route('show', ['id'=>$article->id, 'types'=>'categories']) }}"><img src="/storage/{{ $imgs->path }}" width="250" height="250" alt="image {{ $imgs->id }}"></a>
                      
                          {{-- <a href="#"><img src="/back/assets/img/products/img-01.jpg"  alt=""></a> --}}
                          <div class="cart-overlay">
                          </div>
      
                          <span class="sticker new"><strong>Neuf</strong></span>
                          <!-- Panier aimer afficher les article -->
                          <div class="actions">
                            <div class="add-to-links">                     
                                <a href="{{ route('panier', ['id'=>$article->id, 'type'=>'panier', 'guard'=>Auth::guard()->name]) }}" class="btn-cart"><i class="icon-basket"></i></a>
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
                   
                  @endif
                </div>
      
                  @empty
                    
                  @endforelse            
                
                {{-- <div class="item">
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
                </div> --}}
              
              </div>
            </div>                              
          </div>
        </div>
      </section>
      <!-- New Products Section End -->
  
      <!--  Content Area  Section Start -->
      <!-- <section id="content-area">
        <div class="container">
          <div class="hero-land clearfix">
            <div class="landing caption">
              <h2>Multi-vendeur eCommerce</h2>
              <p>
                <ul>
                  <ol>Faire des prévisions fiables</ol>
                  <ol>Augmenter ses ventes</ol>
                  <ol>Mieux comprendre sa clientèle</ol>
                  <ol>Mieux reconnaitre ses opportunités</ol>
                  <ol>Améliorer l'engagement et la loyauté des clients</ol>
                </ul>
              </p>
              <p>
                <a href="category.html" class="btn btn-common">Explore</a>
              </p>
            </div>
          </div>
        </div>
      </section> -->
      <!--  Content Area  Section End -->
  
      <!-- Services Section Starts -->
      <section id="services" class="section">
        <!-- Container Starts -->
        <div class="container">
          <div class="row">          
            <!-- Start Service-->
            <!-- <div class="col-md-4 col-sm-6">
              <div class="services-box">
                <div class="services-icon">
                  <i class="icon-people"></i>
                </div>
                <div class="services-content">
                  <h4><a href="#">Multi-vendeur eCommerce</a></h4>
                  <p>
                    <ul>
                      <ol>Faire des prévisions fiables</ol>
                      <ol>Augmenter ses ventes</ol>
                      <ol>Mieux comprendre sa clientèle</ol>
                      <ol>Mieux reconnaitre ses opportunités</ol>
                      <ol>Améliorer l'engagement et la loyauté des clients</ol>
                    </ul>
                  </p>
                </div>
              </div>
            </div> -->
            <!-- End Service-->
            <!-- Start Service-->
            <!-- <div class="col-md-4 col-sm-6">
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
            </div> -->
            <!-- End Service-->
            <!-- Start Service-->
            <!-- <div class="col-md-4 col-sm-6">
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
            </div> -->
            <!-- End Service-->
            <!-- Start Service-->
            <!-- <div class="col-md-4 col-sm-6">
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
            </div> -->
            <!-- End Service-->
            <!-- Start Service-->
            <!-- <div class="col-md-4 col-sm-6">
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
            </div> -->
            <!-- End Service-->
            <!-- Start Service -->
            <!-- <div class="col-md-4 col-sm-6">
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
            </div> -->
            <!-- End Service-->
            <!-- Start Service-->
            <!-- <div class="col-md-4 col-sm-6">
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
            </div> -->
            <!-- End Service-->
            <!-- Start Service-->
            <!-- <div class="col-md-4 col-sm-6">
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
            </div> -->
            <!-- End Service-->
            <!-- Start Service -->
            <!-- <div class="col-md-4 col-sm-6">
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
            </div> -->
            <!-- End Service-->
          </div>
        </div>
        <!-- Container Ends -->
      </section>
      <!-- Services Section Ends -->
  
   
  
    
      <!-- Start Client Section -->
      {{-- <div class="client section">
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
      </div> --}}
      <!-- End Client Section -->
  
      <!-- Support Section Start -->
      {{-- <div class="support section">
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
      </div> --}}
      <!-- Support Section End -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

      <script>
        document.addEventListener('DOMContentLoaded', function () {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Récupérez les informations sur l'article à partir des attributs data
            const productId = this.getAttribute('data-product-id');
            const productPrice = this.getAttribute('data-product-price');

            // Effectuez une requête AJAX pour ajouter l'article au panier
            addToCart(productId, productPrice);
        });
    });

    function addToCart(productId, productPrice) {
        // Effectuez une requête AJAX pour ajouter l'article au panier
        // Vous pouvez utiliser Axios, Fetch ou toute autre bibliothèque de requêtes AJAX de votre choix.

        // Exemple avec Axios :
        axios.post('/ecommerce', { 
          productId: productId,
          productPrice: productPrice
        })
            .then(response => {
                // Mettez à jour l'affichage du panier ou affichez un message de confirmation
            })
            .catch(error => {
                // Gérez les erreurs
            });
    }
});

      </script>
          
     @endsection