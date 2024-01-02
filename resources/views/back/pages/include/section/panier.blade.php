
    <!-- Single-prouduct Section Start -->
    <section id="product-collection" class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="product-details-image">
              <div class="slider-for slider">
               
                @forelse ($images as $image)
               
                <div>
                  {{-- <img src="/back/assets/img/single-product/small/img1.jpg"  alt=""> --}}
                  <img src="/storage/{{ $image->path }}" alt="image {{ $image->id }}">
                </div>
                @empty
                  
                @endforelse
              </div>
              <ul id="productthumbnail" class="slider slider-nav">

                @forelse ($images as $image)
                <li>
                  <img src="/storage/{{ $image->path }}" alt="image {{ $image->id }}">
                </li>
                @empty
                  
                @endforelse
                
              </ul>
            </div>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <div class="info-panel">
              <h1 class="product-title">{{ $article->nom_article }}</h1>
              <!-- Rattion Price -->
              <div class="price-ratting">
                <div class="price float-left">
                  {{ $article->prix_unitaire_article }} F CFA
                </div>
                <div class="ratting float-right">
                  <div class="product-star">
                    <i class="icon-star active"></i>
                    <i class="icon-star active"></i>
                    <i class="icon-star active"></i>
                    <i class="icon-star active"></i>
                    <i class="icon-star active"></i>
                    <span>(01 Customer Review)</span>
                  </div>  
                </div>
              </div>
              <!-- Short Description -->
              <div class="short-desc">
                <h5 class="sub-title">Description</h5>
                <p>{{ $article->desc_article }} </p>
              </div>  
            <form action="" method="POST">
            
              <!-- <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                  <div class="form-group">
                    <label for="color">Couleur</label>
                    <select class="form-control" id="nom_couleur">
                        <option ><i class="text-info">
                          Vert
                        </i></option>
                        <option class="color" style="background-color: #ff7a5f;">Rouge</option>
                        <option class="color" style="background-color: #baa6c2;">Violet</option>
                        <option class="color" style="background-color: #414141;">Maron</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group">
                        <label for="color">Specification</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="form-group quantity">
                        <label for="color">Quantité</label>
                        <input class="form-control" type="number" min="1" step="any" name="panier_qte">
                    </div>
                </div>
              </div> -->
              <div class="quantity-cart">
                <a href="{{ route('panier', ['id'=>$article->id, 'type'=>'panier', 'guard'=>Auth::guard()->name]) }}" class="btn btn-common"><i class="icon-basket-loaded"></i>Ajouter</a>
              </div>
            

              <!-- Usefull Link -->
              <!-- <ul class="usefull-link">
                <li><a href="#"><i class="icon-envelope-open"></i> Email to a Friend</a></li>
                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                <li><a href="#"><i class="icon-printer"></i> print</a></li>
              </ul> -->
              <!-- Share -->
              <!-- <div class="share-icons">
                <span>share :</span>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
              </div> -->
            </div>
          </div>      
        </div>
      </div>
    </section>
    <!-- Single-prouduct Section End -->

    @if ($type=='detailles'||$type=='colections')      
    
       <!-- Single-prouduct-tab Start -->
      <div class="single-pro-tab section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-xs-12">
              <div class="single-pro-tab-menu">
                <!-- Nav tabs -->
                <ul class="">
                  <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                  <li><a href="#reviews" data-toggle="tab">Commentaire</a></li>
                  <li><a href="#information" data-toggle="tab">Information</a></li>
                  {{-- <li><a href="#tags" data-toggle="tab">Tags</a></li> --}}
                </ul>
              </div>
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="description">
                  <div class="pro-tab-info pro-description">
                    <h3 class="small-title">{{$article->nom_article}}</h3>
                   <p>{{$article->desc_article}}</p>
                  </div>
                </div>
                <div class="tab-pane" id="reviews">
                  <div class="pro-tab-info pro-reviews">
                    <div class="customer-review">
                      <h3 class="small-title">Customer review</h3>
                      <ul class="product-comments clearfix">
                        <li class="mb-30">
                          <div class="pro-reviewer">
                            <img src="/back/assets//img/reviewer/1.jpg"  alt="">
                          </div>
                          <div class="pro-reviewer-comment">
                            <div class="fix">
                              <div class="pull-left mbl-center">
                                <h5><strong>Gerald Barnes</strong></h5>
                                <p class="reply-date">27 Jun, 2016 at 2:30pm</p>
                              </div>
                              <div class="comment-reply pull-right">
                                <a href="#"><i class="fa fa-reply"></i></a>
                                <a href="#"><i class="fa fa-close"></i></a>
                              </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                          </div>
                        </li>
                        <li class="threaded-comments">
                          <div class="pro-reviewer">
                            <img src="/back/assets//img/reviewer/2.jpg"  alt="">
                          </div>
                          <div class="pro-reviewer-comment">
                            <div class="fix">
                              <div class="pull-left mbl-center">
                                <h5 class="text-uppercase mb-0"><strong>Gerald Barnes</strong></h5>
                                <p class="reply-date">27 Jun, 2016 at 2:30pm</p>
                              </div>
                              <div class="comment-reply pull-right">
                                <a href="#"><i class="fa fa-reply"></i></a>
                                <a href="#"><i class="fa fa-close"></i></a>
                              </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="leave-review">
                      <h3 class="small-title">Leave your reviw</h3>
                      <div class="your-rating mb-30">
                        <p class="mb-10"><strong>Your Rating</strong></p>
                        <span>
                          <a href="#"><i class="fa fa-star-o"></i></a>
                        </span>
                        <span class="separator">|</span>
                        <span>
                          <a href="#"><i class="fa fa-star-o"></i></a>
                          <a href="#"><i class="fa fa-star-o"></i></a>
                        </span>
                        <span class="separator">|</span>
                        <span>
                          <a href="#"><i class="fa fa-star-o"></i></a>
                          <a href="#"><i class="fa fa-star-o"></i></a>
                          <a href="#"><i class="fa fa-star-o"></i></a>
                        </span>
                        <span class="separator">|</span>
                        <span>
                          <a href="#"><i class="fa fa-star-o"></i></a>
                          <a href="#"><i class="fa fa-star-o"></i></a>
                          <a href="#"><i class="fa fa-star-o"></i></a>
                          <a href="#"><i class="fa fa-star-o"></i></a>
                        </span>
                        <span class="separator">|</span>
                        <span>
                          <a href="#"><i class="fa fa-star-o"></i></a>
                          <a href="#"><i class="fa fa-star-o"></i></a>
                          <a href="#"><i class="fa fa-star-o"></i></a>
                          <a href="#"><i class="fa fa-star-o"></i></a>
                          <a href="#"><i class="fa fa-star-o"></i></a>
                        </span>
                      </div>
                      <div class="reply-box">
                        <form class="form-horizontal">
                          <div class="form-group">
                            <div class="col-md-6">
                              <input class="form-control" type="text" name="Name" placeholder="Votre nom...">
                            </div>
                            <div class="col-md-6">
                              <input class="form-control" name="subject" type="text" placeholder="sujet...">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-12">
                              <textarea class="form-control input-lg" name="comment" rows="4" placeholder="Votre commentaire..."></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-12">
                              <button class="btn btn-common" type="submit">Envoyer</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>    
                </div>
                <div class="tab-pane" id="information">
                  <div class="pro-tab-info pro-information">
                    <h3 class="small-title">Product information</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                  </div>                      
                </div>
                {{-- <div class="tab-pane" id="tags">
                  <div class="pro-tab-info pro-information">
                    <h3 class="small-title">tags</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                  </div>                      
                </div> --}}
              </div>                  
            </div>
          </div>
        </div>
      </div>
      <!-- Single-prouduct-tab End -->    
    @endif    
