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
		<link rel="stylesheet" type="text/css" href="/back/css/style.css" />
		
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
        <div class="main-container">
            @yield('contentVide')
        </div>


        <!-- js -->
		<script src="/back/vendors/scripts/core.js"></script>
		<script src="/back/vendors/scripts/script.min.js"></script>
		<script src="/back/vendors/scripts/process.js"></script>
		<script src="/back/vendors/scripts/layout-settings.js"></script>
		<script src="/back/src/plugins/apexcharts/apexcharts.min.js"></script>
		<script src="/back/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="/back/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="/back/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="/back/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<script src="/back/vendors/scripts/dashboard.js"></script>
		<script src="/back/src/plugins/jquery-steps/jquery.steps.js"></script>
		<script src="/back/vendors/scripts/steps-setting.js"></script>		
        @stack('scripts')
    </body>
</html>