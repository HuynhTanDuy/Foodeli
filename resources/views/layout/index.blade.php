<!doctype html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Foodeli || Food Delivery </title>
		<base href="{{asset('')}}">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Favicons -->
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="apple-touch-icon" href="images/icon.png">
		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/plugins.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet"  href="customstyle.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


		<!-- Custom css -->
		<link rel="stylesheet" href="css/custom.css">
		<!-- Modernizer js -->
		
		<script src="js/vendor/modernizr-3.5.0.min.js"></script>
	</head>
	<body>
		
		<!-- Main wrapper -->
		<div class="wrapper" id="wrapper">
			
			@include('layout.header')
						
			@yield('content')
			
			@include('layout.footer')
           
            

			@include('layout.cartbox')

		</div><!-- //Main wrapper -->

							<!-- JS Files -->
							<script
							src="https://code.jquery.com/jquery-3.3.1.js"
							integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
							crossorigin="anonymous">
							</script>
							<script src="js/vendor/jquery-3.2.1.min.js"></script>
							<script src="js/popper.min.js"></script>
							<script src="js/bootstrap.min.js"></script>
							<script src="js/plugins.js"></script>
							<script src="js/active.js"></script>
							@yield('scripts')
	</body>
</html>