<!DOCTYPE html>


@if (Config::get('app.locale') == 'ar')
                                            
<html lang="en" dir="rtl">

@elseif (Config::get('app.locale') == 'en')

<html lang="en">

@endif




<head>
	<title>Zenon App</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
	<link rel="shortcut icon" href="{{ asset('public/assets/images/logo.png') }}">

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">

<style>
    *{
        
  font-family: "Tajawal", sans-serif;
  font-weight: 300;
  font-style: normal;

    }
</style>

	@include('layouts.css')
	

	

</head>

<body class="app">
	<header class="app-header fixed-top ">
		<div class="app-header-inner">
			<div class="container-fluid py-2">
				<div class="app-header-content">
					<div class="row justify-content-between align-items-center">

						<div class="col-auto">
							<a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
									role="img">
									<title>Menu</title>
									<path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
										stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
								</svg>
							</a>
						</div><!--//col-->
						<div class="search-mobile-trigger d-sm-none col">
							<i class="search-mobile-trigger-icon fa-solid fa-magnifying-glass"></i>
						</div><!--//col-->

						@include('layouts.header')
					</div><!--//row-->
				</div><!--//app-header-content-->
			</div><!--//container-fluid-->
		</div><!--//app-header-inner-->
		<div id="app-sidepanel" class="app-sidepanel">
			<div id="sidepanel-drop" class="sidepanel-drop"></div>
			<div class="sidepanel-inner d-flex flex-column">
				<a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
				<div class="app-branding">
					<a class="app-logo" href="index.html"><img class="logo-icon me-2" src="{{ asset('public/assets/images/blacl.png') }}"></a>

				</div><!--//app-branding-->
				@include('layouts.sidebar')

			</div><!--//sidepanel-inner-->
		</div><!--//app-sidepanel-->
	</header><!--//app-header-->

	<div class="app-wrapper">

			@yield('content')
	</div>


	</div><!--//container-fluid-->
	</div><!--//app-content-->



	</div><!--//app-wrapper-->
		<footer class="app-footer" >
		<div class="container text-center py-3">
			
			<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"
					style="color: #fb866a;"></i> by <a class="app-link" href="http://zenonsoftware.com"
					target="_blank">Zenon Software</a> </small>

		</div>
	</footer><!--//app-footer-->

	@include('layouts.js')

</body>

</html>