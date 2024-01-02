<!DOCTYPE html>
<html lang="fr en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ecommerce">
    <title>@yield('pageTitle')</title>



    <!-- Favicon -->
    <link rel="shortcut icon" href="/back/vendors/images/deskapp-logo.svg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/back/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/back/assets/css/bootstrap-select.min.css" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="/back/assets/fonts/font-awesome.min.css" type="text/css">
    <!-- Line Icons CSS -->
    <link rel="stylesheet" href="/back/assets/fonts/line-icons/line-icons.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="/back/assets/css/main.css" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/back/assets/extras/animate.css" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="/back/assets/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="/back/assets/extras/owl.theme.css" type="text/css">
    <!-- Modals Effects -->
    <link rel="stylesheet" href="/back/assets/extras/component.css" type="text/css">
    <!-- Rev Slider Css -->
    <link rel="stylesheet" href="/back/assets/extras/settings.css" type="text/css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="/back/assets/extras/slick.css" type="text/css">
    <link rel="stylesheet" href="/back/assets/extras/slick-theme.css" type="text/css">
    <!-- Nivo Lightbox Css -->
    <link rel="stylesheet" href="/back/assets/extras/nivo-lightbox.css" type="text/css">
    <!-- Color switcher CSS -->
    <link rel="stylesheet" href="/back/assets/css/color-switcher.css" type="text/css">
    <!-- Slicknav Css -->
    <link rel="stylesheet" href="/back/assets/css/slicknav.css" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="/back/assets/css/responsive.css" type="text/css">
    <link rel="stylesheet" href="/back/css/style.css" type="text/css">

    @stack('stylesheets')
  </head>

  <body>
    <!-- Header Section Start -->
    <div class="header">

      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-2">
              <div class="language-wrapper">
                <div class="box-language">
                  <form id="form-language">
                    <div class="btn-group toggle-wrap">
                      <span class="toggle">
                        <span><img src="/back/assets/img/language/fr-FR.png"  title="Français" height="11" width="16"> Français</span>
                        <span class="hidden">Language</span>
                      </span>
                      <ul style="display: none;" class="toggle_cont pull-right">
                      <li>
                        <button class="language-select selected" type="button" name="fr-FR">
                        <img src="/back/assets/img/language/fr-FR.png" title="Français" height="11" width="16">
                        Français </button>
                        </li>
                        <li>
                        <button class="language-select" type="button" name="en-gb">
                        <img src="/back/assets/img/language/en-gb.png" alt="English" title="English" height="11" width="16">
                        English </button>
                        </li>

                        <li>
                        <button class="language-select" type="button" name="ru-ru">
                        <img src="/back/assets/img/language/ru-ru.png" alt="Русский" title="Русский" height="11" width="16">
                        Русский </button>
                        </li>
                      </ul>
                    </div>
                  </form>
                </div>
                <div class="box-currency">
                  <form method="post" id="form-currency">
                    <div class="btn-group toggle-wrap">
                      <span class="toggle">
                        Devise
                      </span>
                      <ul class="toggle_cont pull-right">
                      <li>
                        <button class="currency-select selected" type="button" name="GBP">
                        F CFA </button>
                        </li>
                        <li>
                        <button class="currency-select" type="button" name="USD">
                        $ USD </button>
                        </li>
                        <li>
                        <button class="currency-select" type="button" name="EUR">
                        € EUR
                        </button>
                        </li>

                      </ul>
                    </div>
                  </form>
                </div>
                {{-- <a href="#"><i class="icon-phone"></i> Call Us: (123) 456- 789</a> --}}
              </div>
              <div class="clear"></div>
            </div>
            <div class="col-md-8 col-sm-10">
              <!-- shopping cart end -->
              @php
                use App\Models\Article;
                 $articlesJson = Article::all();
                 response()->json(['articlesJson' => $articlesJson]);
              @endphp
              <script>
                var articlesJson = json($articlesJson);
              </script>


              <div class="search-area">
                <form action="{{route('ecommerce.search')}}" method="get">
                  <div class="control-group">

                    <input class="search-field"name="nom_article" id="search-input" value="{{$input['nom_article'] ?? ''}}" placeholder="Recherches...">
                    <button class="search-button search-results"><i class="icon-magnifier"></i></button>
                    <div class="results" id="search-results">
                      <!-- Contenu des résultats de recherche -->
                    </div>
                    <!-- Un conteneur pour afficher les résultats de la recherche -->

                  </div>

                </form>
              </div>

              <div class="shop-cart">

				<ul>
				<li><a class="cart-icon cart-btn" href="wishlist.html"><span class="icon-heart"></span></a></li>

          @include('back.pages.include.section.panier-layout')
				</ul>

              </div>
              @guest
              <div class="account link-inline">
                <a href="{{ route('login') }}"><i class="icon-login"></i><span class="hidden-mobile">connection</span></a>
              </div>
              @endguest

               @auth
               <div class="account link-inline">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                  @csrf
                  <a href="{{ route('ecommerce') }}"><i class="icon-login"></i><span class="hidden-mobile">Deconnect</span></a>
                </form>

              </div>
               @endauth


            </div>
          </div>
        </div>
      </div>
      <!-- End Top Bar -->

      <!-- Start  Logo & Naviagtion  -->
      <nav class="navbar navbar-default">
        <div class="container">
          <div class="row">
            <div class="navbar-header">
              <!-- Stat Toggle Nav Link For Mobiles -->
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand" href="https://telnet-africa.com">
              <img src="/back/vendors/images/deskapp-logo.svg" alt="" height="40" width="50">
				      <h5>SUGU-ARTISANNAL</h5>

              </a>
            </div>
            <div class="navbar-collapse collapse">
              <!-- Start Navigation List -->
              <ul class="nav navbar-nav navbar-right">
                <li>
                  @auth
                  <a href="{{ route('home.dashClient') }}">Accueil</a>
                  @endauth
                  @guest
                  <a href="{{ route('ecommerce') }}">Accueil</a>
                  @endguest
                </li>
                <li>
                  <a href="#">
                  À Propos
                  </a>
                </li>

				{{-- Catalog --}}
                {{-- <li>
                  <a href="#">Catalog <span class="caret"></span></a>
					<div class="dropdown mega-menu megamenu1">
						<div class="row">
						<div class="col-sm-3 col-xs-12">
							<ul class="menulinks">
							<li class="maga-menu-title">
								<a href="#">Men</a>
							</li>
							<li><a href="category.html">Clothing</a></li>
							<li><a href="category.html">Handbags</a></li>
							<li><a href="category.html">Maternity</a></li>
							<li><a href="category.html">Jewelry</a></li>
							<li><a href="category.html">Scarves</a></li>
							</ul>
						</div>
						<div class="col-sm-3 col-xs-12">
							<ul class="menulinks">
							<li class="maga-menu-title">
								<a href="#">Women</a>
							</li>
							<li><a href="category.html">Handbags</a></li>
							<li><a href="category.html">Jewelry</a></li>
							<li><a href="category.html">Clothing</a></li>
							<li><a href="category.html">Watches</a></li>
							<li><a href="category.html">Hats</a></li>
							</ul>
						</div>
						<div class="col-sm-5 col-sm-offset-1 col-xs-12">
							<span class="block-last">
							<img src="/back/assets/img/block_menu.jpg"  alt="">
							</span>
						</div>
						</div>
					</div>
                </li> --}}

				{{-- Boutique --}}
                {{-- <li>
                  <a href="#">Boutique <span class="caret"></span></a>
                  <div class="dropdown mega-menu megamenu2">
                    <div class="row">
                      <div class="col-sm-6 col-xs-12">
                        <ul class="menulinks">
                          <li class="maga-menu-title">
                            <a href="#">Normal Shop Pages</a>
                          </li>
                          <li><a href="category.html">Single Category</a></li>
                          <li><a href="product-details.html">Product Details</a></li>
                          <li><a href="shopping-cart.html">Cart Page</a></li>
                          <li><a href="checkout.html">Checkout Page</a></li>
                          <li><a href="single-shop.html">Seller's Store</a></li>
                          <li><a href="shop-grid.html">Shop Grid Sidebar</a></li>
                          <li><a href="shop-list.html">Shop List Sidebar</a></li>
                          <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                          <li><a href="order.html">Order Track</a></li>
                        </ul>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                        <ul class="menulinks">
                          <li class="maga-menu-title">
                            <a href="#">Multi-vendor Pages</a>
                          </li>
                          <li><a href="submission.html">Product Submission</a></li>
                          <li><a href="single-shop.html">Seller Store Page</a></li>
                          <li><a href="edit-profile.html">Seller Account</a></li>
                          <li><a href="login.html">Log In</a></li>
                          <li><a href="shop.html">Search</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li> --}}

				@auth
          <li>

            <a href="{{ route('home.commandeStatus') }}">
              Commandes
            </a>
          </li>
          <li>
            <a href="{{ route('home.commandeLivraison') }}">
            Livraisons
            </a>
          </li>
          {{-- <li>
            <a href="#">Pages <span class="caret"></span></a>
            <ul class="dropdown">
              <li>
                <a href="about.html">
                About Us
                </a>
              </li>
              <li>
                <a href="services.html">
                Services
                </a>
              </li>
              <li>
                <a href="contact.html">
                Contact Us
                </a>
              </li>
              <li>
                <a href="product-details.html">
                Product Details
                </a>
              </li>
              <li>
                <a href="team.html">
                Team Member
                </a>
              </li>
              <li>
                <a href="checkout.html">
                Checkout
                </a>
              </li>
              <li>
                <a href="compare.html">
                Compare
                </a>
              </li>
              <li>
                <a href="compare.html">
                Compare
                </a>
              </li>
              <li>
                <a href="shopping-cart.html">
                Shopping cart
                </a>
              </li>
                <li>
                <a href="faq.html">
                FAQs
                </a>
              </li>
                <li>
                <a href="wishlist.html">
                Wishlist
                </a>
              </li>
                <li>
                <a href="404.html">
                404 Error
                </a>
              </li>
            </ul>
          </li> --}}
				@endauth

				{{-- Blog de Communication --}}

                {{-- <li>
                  <a href="#">Blog <span class="caret"></span></a>
                  <ul class="dropdown">
                    <li>
                      <a href="blog.html">
                      Blog Right Sidebar
                      </a>
                    </li>
                    <li>
                      <a href="blog-left-sidebar.html">
                      Blog Left Sidebar
                      </a>
                    </li>
                    <li>
                      <a href="blog-full-width.html">
                      Blog Full Width
                      </a>
                    </li>
                    <li>
                      <a href="blog-details.html">
                      Blog Details
                      </a>
                    </li>
                  </ul>
                </li> --}}

                <li>
                  <a href="contact.html">
                  Contact
                  </a>
                </li>
              </ul>
              <!-- End Navigation List -->
            </div>
          </div>
        </div>
        <!-- End Header Logo & Naviagtion -->

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
          <li>
            <a class="active" href="{{ route('ecommerce') }}">
              Accueil
            </a>
          </li>
          <li>
            <a href="#">À propos</a>
          </li>
          {{-- <li>
            <a href="#">Catalog</a>
            <ul class="dropdown menulinks">
              <li class="maga-menu-title">
                <a href="#">Men</a>
              </li>
              <li><a href="category.html">Clothing</a></li>
              <li><a href="category.html">Handbags</a></li>
              <li><a href="category.html">Maternity</a></li>
              <li><a href="category.html">Jewelry</a></li>
              <li><a href="category.html">Scarves</a></li>
              <li class="maga-menu-title">
                <a href="#">Women</a>
              </li>
              <li><a href="category.html">Handbags</a></li>
              <li><a href="category.html">Jewelry</a></li>
              <li><a href="category.html">Clothing</a></li>
              <li><a href="category.html">Watches</a></li>
              <li><a href="category.html">Hats</a></li>
            </ul>
          </li> --}}
          {{-- <li>
            <a href="#">Shop</a>
            <ul class="menulinks">
              <li class="maga-menu-title">
                <a href="#">Boutique</a>
              </li>
              <li><a href="category.html">Single Category</a></li>
              <li><a href="product-details.html">Product Details</a></li>
              <li><a href="shopping-cart.html">Cart Page</a></li>
              <li><a href="checkout.html">Checkout Page</a></li>
              <li><a href="single-shop.html">Seller's Store</a></li>
              <li><a href="shop-grid.html">Shop Grid Sidebar</a></li>
              <li><a href="shop-list.html">Shop List Sidebar</a></li>
              <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
              <li><a href="order.html">Order Track</a></li>
              <li class="maga-menu-title">
                <a href="#">Multi-vendor Pages</a>
              </li>
              <li><a href="submission.html">Product Submission</a></li>
              <li><a href="single-shop.html">Seller Store Page</a></li>
              <li><a href="edit-profile.html">Seller Account</a></li>
              <li><a href="login.html">Log In</a></li>
              <li><a href="shop.html">Search</a></li>
            </ul>
          </li> --}}
		  @auth
			<li>
				<a href="#">Pages</a>
				<ul class="dropdown">
				<li>
					<a href="about.html">About Us</a>
				</li>
				<li>
					<a href="services.html">Services</a>
				</li>
				<li>
					<a href="contact.html">Contact Us</a>
				</li>
				<li>
					<a href="product-details.html">Product Details</a>
				</li>
				<li>
					<a href="team.html">Team Member</a>
				</li>
				<li>
					<a href="checkout.html">Checkout</a>
				</li>
				<li>
					<a href="compare.html">Compare</a>
				</li>
				<li>
					<a href="shopping-cart.html">Shopping cart</a>
				</li>
				<li>
					<a href="faq.html">FAQs</a>
				</li>
				<li>
					<a href="wishlist.html">Wishlist</a>
				</li>
				<li>
					<a href="404.html">404 Error</a>
				</li>
				</ul>
        	</li>


          <li>
            <a href="#">Blog</a>
            <ul class="dropdown">
              <li>
                <a href="blog.html">Blog Right Sidebar</a>
              </li>
              <li>
                <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
              </li>
              <li>
                <a href="blog-full-width.html">Blog Full Width</a>
              </li>
              <li>
                <a href="blog-details.html">Blog Details</a>
              </li>
            </ul>
          </li>
		  @endauth
          <li>
            <a href="#">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->


      </nav>
    </div>
    <!-- Header Section End -->
     <!-- Start Page Header -->
     <div class="page-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="breadcrumb">
              <a href="{{ route('ecommerce') }}"><i class="icon-home"></i> Accueil</a>
              <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
              <span class="current">@yield('pageTitle')</span>
              <h2 class="entry-title">*****<span class="crumbs-spacer">@yield('pageTitle')</span>****</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Header -->

    <div id="container">
      @yield('contentClient')

    </div>




     <!-- Footer Start -->
    <footer class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="contact-us">
              <h3 class="widget-title">Site</h3>
              <ul class="contact-list">
                <li><i class="icon-home"></i> <span>ACI 2000 MALI BAMAKO</span></li>

              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <h3 class="widget-title">CONTACT</h3>
            <ul class="contact-list">
              <li><i class="icon-call-out"></i> <span>212-631-5135 <br> 212-631-5105</span></li>

            </ul>
          </div>
          <div class="col-md-3 col-sm-6">
            <h3 class="widget-title">EMAIL</h3>
            <ul class="contact-list">
              <li><i class="icon-envelope"></i> <span>telnet-africa.com  support@telnet.com</span></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="block-subscribe">
              <h3 class="widget-title">Infos de telnet-africa</h3>
              <ul class="contact-list">
                <li class="icon-info"><a href="https:www.telnet-africa.com" style="margin-left: 5px;">cliqué ici</a></li>
              </ul>


            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <p>copyrights &copy; 2023 - concepteur & Developpeur chez <a rel="nofollow" href="https://uideck.com/">TELNET-AFRICA</a></p>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="payment pull-right">
              <img src="/back/assets/img/payment.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright End -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="icon-arrow-up"></i>
    </a>

    <!-- All modals added here for the demo -->
    <div class="md-modal md-effect-3" id="modal-3">
      <div class="md-content">
          <!-- Product Info Start -->
          {{-- <div class="product-info row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="product-details-image">
                <div class="slider-for slider">
                  <div>
                    <img src="/back/assets/img/single-product/img1.jpg" alt="">
                  </div>
                  <div>
                    <img src="/back/assets/img/single-product/img2.jpg" alt="">
                  </div>
                  <div>
                    <img src="/back/assets/img/single-product/img3.jpg" alt="">
                  </div>
                  <div>
                    <img src="/back/assets/img/single-product/img4.jpg" alt="">
                  </div>
                  <div>
                    <img src="/back/assets/img/single-product/img5.jpg" alt="">
                  </div>
                  <div>
                    <img src="/back/assets/img/single-product/img3.jpg" alt="">
                  </div>
                </div>
                <ul id="productthumbnail" class="slider slider-nav">
                  <li>
                    <img src="/back/assets/img/single-product/small/img1.jpg" alt="">
                  </li>
                  <li>
                    <img src="/back/assets/img/single-product/small/img2.jpg" alt="">
                  </li>
                  <li>
                    <img src="/back/assets/img/single-product/small/img3.jpg" alt="">
                  </li>
                  <li>
                    <img src="/back/assets/img/single-product/small/img4.jpg" alt="">
                  </li>
                  <li>
                    <img src="/back/assets/img/single-product/small/img5.jpg" alt="">
                  </li>
                  <li>
                    <img src="/back/assets/img/single-product/small/img3.jpg" alt="">
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <div class="info-panel">
                <h1 class="product-title">Proin Lectus Ipsum</h1>
                <!-- Rattion Price -->
                <div class="price-ratting">
                  <div class="price float-left">
                    $ 18.00
                  </div>
                </div>
                <!-- Short Description -->
                <div class="short-desc">
                  <h5 class="sub-title">Quick Overview</h5>
                  <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </div>
                <!-- Product Size -->
                <div class="product-size">
                  <h5 class="sub-title">Select Size</h5>
                  <span>S</span>
                  <span class="active">M</span>
                  <span>L</span>
                  <span>XL</span>
                </div>
                <!-- Quantity Cart -->
                <div class="quantity-cart">
                  <button class="btn btn-common"><i class="icon-basket"></i> add to cart</button>
                </div>
                <!-- Share -->
                <div class="share-icons pull-right">
                  <span>share :</span>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
              </div>
            </div>
          </div> --}}
          <!-- Product Info End -->
          <button class="md-close"><i class="icon-close"></i></button>
      </div>
    </div>
    <div class="md-overlay"></div>
    <!-- the overlay element -->


    <!-- All js here -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="/back/assets/js/jquery-min.js"></script>
    <script type="text/javascript" src="/back/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/back/assets/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="/back/assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/back/assets/js/ion.rangeSlider.js"></script>
    <script type="text/javascript" src="/back/assets/js/modalEffects.js"></script>
    <script type="text/javascript" src="/back/assets/js/classie.js"></script>
    <script type="text/javascript" src="/back/assets/js/nivo-lightbox.js"></script>
    <script type="text/javascript" src="/back/assets/js/color-switcher.js"></script>
    <script type="text/javascript" src="/back/assets/js/slick.min.js"></script>
    <script type="text/javascript" src="/back/assets/js/jquery.slicknav.js"></script>

    <script type="text/javascript" src="/back/assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="/back/assets/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/back/assets/js/main.js"></script>

    {{-- <script>
      $(document).ready(function() {
          // Lorsque l'utilisateur commence à taper dans le champ de recherche
          $('#search-input').on('input', function() {
              var query = $(this).val(); // Récupérez la valeur saisie par l'utilisateur

              // Envoyez la requête de recherche au serveur uniquement si la requête n'est pas vide
              if (query.trim() !== '') {
                  $.ajax({
                      url: '/ecommerce/', // Remplacez par l'URL de votre endpoint de recherche
                      method: 'GET',
                      data: { query: query }, // Envoyez la requête de recherche au serveur
                      success: function(response) {
                          // Affichez les résultats dans le conteneur de résultats
                          $('#search-results').html(response);
                      },
                      error: function() {
                          // Gérez les erreurs ici, par exemple, affichez un message d'erreur
                          $('#search-results').html('Une erreur s\'est produite lors de la recherche.');
                      }
                  });
              } else {
                  // Si la requête est vide, effacez le conteneur de résultats
                  $('#search-results').html('');
              }
          });
      });
    </script> --}}
    <script>
      $(document).ready(function() {
          // Récupérez les données des articles préchargées depuis la page
          var articlesData = articlesJson;

          // Lorsque l'utilisateur commence à taper dans le champ de recherche
          $('#search-input').on('input', function() {
              var query = $(this).val().toLowerCase(); // Récupérez la valeur saisie par l'utilisateur

              // Filtrer les articles correspondants à la requête de l'utilisateur
              var filteredArticles = articlesData.filter(function(article) {
                  return article.nom_article.toLowerCase().includes(query);
              });

              // Afficher les résultats dans le conteneur de résultats
              displayResults(filteredArticles);
          });

          function displayResults(results) {
              var resultsHtml = '';

              if (results.length === 0) {
                  resultsHtml = '<p>Aucun résultat trouvé.</p>';
              } else {
                  resultsHtml = '<ul>';
                  results.forEach(function(article) {
                      resultsHtml += '<li><a href="/produit/'+ article.id +'">' + article.nom_article + '</a></li>';
                  });
                  resultsHtml += '</ul>';
              }

              $('#search-results').html(resultsHtml);
          }
      });
    </script>
    {{-- <script>
      $(document).ready(function() {
          // Lorsque l'utilisateur soumet le formulaire de recherche
          $('#search-form').submit(function(event) {
              event.preventDefault(); // Empêchez la soumission du formulaire par défaut
              performSearch();
          });

          // Lorsque l'utilisateur commence à taper dans le champ de recherche
          $('#search-input').on('input', function() {
              performSearch();
          });

          function performSearch() {
              var query = $('#search-input').val(); // Récupérez la valeur saisie par l'utilisateur

              // Vous devrez exécuter votre recherche et obtenir les résultats ici.
              // Supposons que vous ayez une liste de résultats (articles) au format JSON.

              // Exemple de résultats fictifs pour illustrer le concept :
              var results = [
                  { title: 'Article 1', description: 'Description de l\'article 1' },
                  { title: 'Article 2', description: 'Description de l\'article 2' },
                  { title: 'Article 3', description: 'Description de l\'article 3' }
              ];

              // Générez les cartes à partir des résultats
              displayResults(results);
          }

          function displayResults(results) {
              var resultsContainer = $('#search-results-container');
              resultsContainer.empty(); // Effacez les résultats précédents

              if (results.length === 0) {
                  resultsContainer.html('<p>Aucun résultat trouvé.</p>');
              } else {
                  results.forEach(function(result) {
                      var cardHtml = `
                          <div>
                            <ul><li>${result.nom_article}</li></ul>
                            <ul class="dropdown"><li>${result.description}</li></ul>
                          </div>
                      `;
                      resultsContainer.append(cardHtml);
                  });
              }
          }
      });
    </script> --}}








	<script>
		var maVariable = JSON.parse(document.getElementById('data').getAttribute('data-mavariable'));

// Initialisation du tableau imagesData en dehors de la boucle forEach
var imagesData = [];



maVariable.forEach(image => {
    // Vous pouvez construire votre objet image ici
    var imageObj = {
        id: image.id,
        path: 'storage/images/' + image.nom_image, // Utilisez + pour concaténer les chaînes
        alt: 'Image ' + image.id // Alt peut être basé sur l'ID de l'image ou toute autre information que vous avez
    };

    // Ajoutez l'objet image à imagesData
    imagesData.push(imageObj);

    // Vous pouvez également afficher chaque image ici si nécessaire

});

// À l'extérieur de la boucle forEach, vous pouvez utiliser imagesData comme nécessaire.


		// Sélectionnez le conteneur d'images
		const imageContainer = document.getElementById('image-container');

		// Parcourez les données d'images et créez des éléments <img>
		imagesData.forEach((imageData) => {
			const img = document.createElement('img');
			img.classList.add('item')
			img.src = imageData.path;
			img.alt = imageData.alt;
			imageContainer.appendChild(img);
		});

	</script>



    @stack('scripts')
  </body>

</html>
