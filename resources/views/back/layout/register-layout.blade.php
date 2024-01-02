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
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/style.css" />

		@stack('stylesheets')
	</head>

	<body class="login-page">
		<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
				
					<a href="{{route('login')}}">
						<img src="/back/vendors/images/deskapp-logo.svg" alt="" 
						height="50" width="50"/>
					</a>
				</div>
				<div class="login-menu">
					<ul>
						<li><a href="{{route('login')}}">connexion</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						@if(Session::get('type'))
							<div class="alert alert-info">
								{{Session::get('type')}}
								
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						@endif
						<img src="/back/vendors/images/register-page-img.png" alt="" />
					</div>
					
					<div class="col-md-6 col-lg-5">
						<div class="register-box bg-white box-shadow border-radius-10">
							<div class="wizard-content">
							
								@yield('content')
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	
		
		<!-- js -->
		<script src="/back/vendors/scripts/core.js"></script>
		<script src="/back/vendors/scripts/script.min.js"></script>
		<script src="/back/vendors/scripts/process.js"></script>
		<script src="/back/vendors/scripts/layout-settings.js"></script>
		<script src="/back/src/plugins/jquery-steps/jquery.steps.js"></script>
		<script src="/back/vendors/scripts/steps-setting.js"></script>
		@stack('scripts')
	</body>
</html>
