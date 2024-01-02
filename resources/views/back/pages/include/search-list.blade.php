 <!-- Product Categories Section Start -->
              @forelse($articles as $article)
                @php
                    $imgs=$article->images->first();
                @endphp
                <div class="item">
                    <div class="shop-product">
                        <!-- Aticle section -->
                        <div class="product-box">

                        <a href="#"><img src="/storage/{{ $imgs->path }}" width="250" height="250" alt="image {{ $imgs->id }}"></a>

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
                </div>

              @empty
                <p>Aucun resultat trouver</p>
              @endforelse


  <!-- Product Categories Section End -->


