
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>@yield('pageTitle')</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="/back/vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="/back/vendors/images/deskapp-logo.svg"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="/back/vendors/images/deskapp-logo.svg"
		/>
		

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="/back/vendors/styles/icon-font.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="/back/src/plugins/jquery-steps/jquery.steps.css"
		/>		
		<link
			rel="stylesheet"
			type="text/css"
			href="/back/src/plugins/dropzone/src/dropzone.css"
		/>
		
		<!-- switchery css -->
		<link
			rel="stylesheet"
			type="text/css"
			href="/back/src/plugins/switchery/switchery.min.css"
		/>
		<!-- bootstrap-tagsinput css -->
		<link
			rel="stylesheet"
			type="text/css"
			href="/back/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css"
		/>
		<!-- bootstrap-touchspin css -->
		<link
			rel="stylesheet"
			type="text/css"
			href="/back/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css"
		/>
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>

		
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
        @stack('stylesheets')
	</head>
	<body>
	@if(request()->is('artisan/home/dashbord'))
		<div class="pre-loader">
			<div class="pre-loader-box">
				<div class="loader-logo">
					<img src="/back/vendors/images/deskapp-logo.svg" alt="" />
				</div>
				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Chargement...</div>
			</div>
		</div>
	@endif

		<div class="header">
			<div class="header-left">
				<!-- <div class="menu-icon bi bi-list"></div>
				<div
					class="search-toggle-icon bi bi-search"
					data-toggle="header_search"
				></div>
				<div class="header-search">
					<form>
						<div class="form-group mb-0">
							<i class="dw dw-search2 search-icon"></i>
							<input
								type="text"
								class="form-control search-input"
								placeholder="Search Here"
							/>
							<div class="dropdown">
								<a
									class="dropdown-toggle no-arrow"
									href="#"
									role="button"
									data-toggle="dropdown"
								>
									<i class="ion-arrow-down-c"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>From</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">To</label>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>Subject</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="text-right">
										<button class="btn btn-primary">Recherche</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div> -->
			</div>
			<div class="header-right">
				<div class="dashboard-setting user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="javascript:;"
							data-toggle="right-sidebar"
						>
							<i class="dw dw-settings2"></i>
						</a>
					</div>
				</div>
				@php 
					$notification=Auth::user()->notifications;
					
				@endphp
				<div class="user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<i class="icon-copy dw dw-notification"></i>
							<span class="badge notification-active"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<!-- Notification de commande -->
							<div class="notification-list mx-h-350 customscroll">
								<ul>
									@foreach($notification as $notifi)							
										
										<li>
											<a href="#">
												<img src="/storage/{{$notifi->data['image_client']}}" alt="img" />
												<h3>{{$notifi->data['client']}}</h3>
												
												<p>
												Commande N°:{{$notifi->data['commande_id'] }} | Date:{{$notifi->created_at}}
												</p>
											</a>
										</li>
									@endforeach
									
									
								</ul>
							</div>
							
							
						</div>
					</div>
				</div>
				<div class="user-info-dropdown">
					<div class="dropdown">
						<a
							class="dropdown-toggle"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<span class="user-icon">

								<img src="/storage/{{ (Auth::user()->image_artisan) }}"
								height="40" width="40" alt="" />
							</span>
							
							<span class="user-name">{{Auth::user()->nom_artisan}}</span>
						</a>
						<div
							class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"							

						> 
						
							<a class="dropdown-item" href="{{route('home.profilArtisan',['artisan'=>Auth::user()->id])}}"
								><i class="dw dw-user1"></i> Profil </a
							>
						
							<a class="dropdown-item" href="faq.html"
								><i class="dw dw-help"></i> Aide</a
							>
							
							<form id="logout-form" action="{{ route('logout') }}" method="POST">
								@csrf
								<a class="dropdown-item" href="{{ route('ecommerce') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									<i class="dw dw-logout"></i>	Se deconnecter
								</a>
							</form>							
					

							<!-- <a class="dropdown-item" href=""
								><i class="dw dw-logout"></i> Se deconnecter</a
							> -->
						</div>
					</div>
				</div>
				<!-- <div class="github-link">
					<a href="https://github.com/dropways/deskapp" target="_blank"
						><img src="/back/vendors/images/github.svg" alt=""
					/></a>
				</div> -->
			</div>
		</div>

		<div class="right-sidebar">
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					Paramètre
					<span class="btn-block font-weight-400 font-12"
						>Utilisater interface</span
					>
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<h4 class="weight-600 font-18 pb-10">Entête couleurs</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-white active"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-dark"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu Couleur</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-light"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-dark active"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
					<div class="sidebar-radio-group pb-10 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-1"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebaricon-1"
								><i class="fa fa-angle-down"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-2"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-2"
							/>
							<label class="custom-control-label" for="sidebaricon-2"
								><i class="ion-plus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-3"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-3"
							/>
							<label class="custom-control-label" for="sidebaricon-3"
								><i class="fa fa-angle-double-right"></i
							></label>
						</div>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
					<div class="sidebar-radio-group pb-30 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-1"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-1"
								><i class="ion-minus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-2"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-2"
							/>
							<label class="custom-control-label" for="sidebariconlist-2"
								><i class="fa fa-circle-o" aria-hidden="true"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-3"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-3"
							/>
							<label class="custom-control-label" for="sidebariconlist-3"
								><i class="dw dw-check"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-4"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-4"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-4"
								><i class="icon-copy dw dw-next-2"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-5"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-5"
							/>
							<label class="custom-control-label" for="sidebariconlist-5"
								><i class="dw dw-fast-forward-1"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-6"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-6"
							/>
							<label class="custom-control-label" for="sidebariconlist-6"
								><i class="dw dw-next"></i
							></label>
						</div>
					</div>

					<div class="reset-options pt-30 text-center">
						<button class="btn btn-danger" id="reset-settings">
							Reset paramètre
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="left-side-bar">
			<div class="brand-logo">
				<a href="index.html">
					
					<img src="/back/vendors/images/deskapp-logo.svg" alt="" class="dark-logo" 
					height="70" width="70"/>
					<img
						height="70" width="70"
						src="/back/vendors/images/deskapp-logo-white.svg"
						alt=""
						class="light-logo"
					/>
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
						<li class="dropdown">
							<a href="{{route('home.home')}}" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-house"></span
								><span class="mtext">Accueil</span>
							</a>							
						</li>	

							{{-- Compte Administrateur --}}
							<li class="dropdown">
								<a href="javascript:;" class="dropdown-toggle">
									<span class="micon dw dw-user1"></span
									><span class="mtext">Compte</span>
								</a>
								<ul class="submenu">
									<li><a href="{{route('home.profilArtisan',['artisan'=>Auth::guard('artisan')->user()->id])}}">Profile</a></li>
									<li>
										<a href="advanced-components.html">Mots de Passe oublier</a>
									</li>
									<li><a href="form-wizard.html">Renitialiser le mot de passe</a></li>
									<form id="logout-form" action="{{ route('logout') }}" method="POST">
										@csrf
										<a class="dropdown-item" href="{{ route('login') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
											<i class="dw dw-logout"></i>	Se deconnecter
										</a>
									</form>							
								</ul>
							</li>
							

						
						{{-- Les Article --}}
						<li class="dropdown">
							<a href="{{ route('home.articles', ['utils'=>'articles']) }}" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-hdd-stack"></span
								><span class="mtext">Articles</span>
							</a>				
						</li>

						{{-- Les Images des artcles --}}
						<li class="dropdown">
							<a href="{{ route('home.articles', ['utils'=>'images']) }}" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-hdd-stack"></span
								><span class="mtext">Images</span>
							</a>					
						</li>

						{{-- Afficher des donnees --}}
						{{-- <li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-table"></span
								><span class="mtext">Liste des Données</span>
							</a>							
						</li> --}}
						{{-- Calendrier --}}
						{{-- <li>
							<a href="calendar.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-calendar4-week"></span
								><span class="mtext">Calendrier</span>
							</a>
						</li> --}}
						
						{{-- Les Commandes --}}
						<li class="dropdown">
							<a href="{{ route('home.articles', ['utils'=>'commandes']) }}" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-command"></span
								><span class="mtext">Commandes</span>
							</a>
						</li>

						{{-- Les livraisons --}}
						<li class="dropdown">
							<a href="{{ route('home.articles', ['utils'=>'livraisons']) }}" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-layout-text-window-reverse"></span
								><span class="mtext">Livraisons</span>
							</a>
						</li>

						<li>
							<div class="dropdown-divider"></div>
						</li>
						
						{{-- Messages --}}

						<!-- <li>
							<a href="chat.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-chat-right-dots"></span
								><span class="mtext">Message</span>
							</a>
						</li> -->

						<li>
							<a href="invoice.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-receipt-cutoff"></span
								><span class="mtext">Facture</span>
							</a>
						</li>
						
					
					</ul>
				</div>
			</div>
		</div>
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">

					
					
					<div class="mobile-menu-overlay wizard-content">			
					</div>
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>@yield('pageTitle')</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="{{ route('home.home') }}">Accueil</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											@yield('pageTitle')
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a
										class="btn btn-primary dropdown-toggle"
										href="#"
										role="button"
										data-toggle="dropdown"
									>								
										{{ date( "Y-m-d") }}
									</a>
									{{-- <div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Export List</a>
										<a class="dropdown-item" href="#">Policies</a>
										<a class="dropdown-item" href="#">View Assets</a>
									</div> --}}
								</div>
							</div>
						</div>
					</div>
						@if(Session::get('notifi'))
							<div class="alert alert-success">
								{{Session::get('notifi')}}						
								
							</div>
						@endif
					
					@yield('contentArtisan')
                      
                </div>
				
				
				<div class="footer-wrap pd-20 mb-20 card-box">
					Telnet-Africa
					<a href="https://telnet-africa.com" target="_blank"
						>copyright</a
					>
				</div>
			</div>
		</div>
	
		
		
		<!-- js -->
		<script src="/back/vendors/scripts/core.js"></script>
		<script src="/back/vendors/scripts/script.min.js"></script>
		<script src="/back/vendors/scripts/process.js"></script>
		<script src="/back/vendors/scripts/layout-settings.js"></script>
		{{-- dropzone --}}
		<script src="/back/src/plugins/dropzone/src/dropzone.js"></script>
		{{-- plugins datatables--}}
		<script src="/back/src/plugins/apexcharts/apexcharts.min.js"></script>
		<script src="/back/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="/back/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="/back/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="/back/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>

		<script src="/back/vendors/scripts/dashboard.js"></script>
		{{-- jquery --}}
		<script src="/back/src/plugins/jquery-steps/jquery.steps.js"></script>
		<script src="/back/vendors/scripts/steps-setting.js"></script>

		<script src="/back/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
		<script src="/back/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
		<script src="/back/src/plugins/datatables/js/buttons.print.min.js"></script>
		<script src="/back/src/plugins/datatables/js/buttons.html5.min.js"></script>
		<script src="/back/src/plugins/datatables/js/buttons.flash.min.js"></script>
		<script src="/back/src/plugins/datatables/js/pdfmake.min.js"></script>
		<script src="/back/src/plugins/datatables/js/vfs_fonts.js"></script>	
		
        @stack('scripts')
	</body>
</html>
