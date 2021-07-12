<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/color-01.css')}}">
    @livewireStyles
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Phone: " href="#" ><span class="icon label-before fa fa-mobile">Phone: 0112444444</span></a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>

								<li class="menu-item lang-menu menu-item-has-children parent">
									<ul class="submenu lang" >

									</ul>
								</li>
								<li class="menu-item menu-item-has-children parent" >

								</li>
								@if(Route::has('login'))
								 @auth
								 @if(Auth::user()->utype ==='ADM')

								<li class="menu-item menu-item-has-children parent" >
									<a title="My Account" href="#">My Account({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
										</li>

										<li class ="menu-item">
                                                    <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                </li>
                                                <form id="logout-form" method="post" action="{{route('logout')}}">
                                                    @csrf
                                                </form>

									</ul>
								</li>
								@else
								<li class="menu-item menu-item-has-children parent" >
									<a title="My Account" href="#">My Account({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="Dashboard" href="{{route('user.dashboard')}}">Dashboard</a>
										</li>
										<li class ="menu-item">
                                                    <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                </li>
                                                <form id="logout-form" method="post" action="{{route('logout')}}">
                                                    @csrf
                                                </form>
									</ul>
								</li>

								@endif

								@else
								  <li class="menu-item" ><a title="Register or Login" href="{{route('login')}}">Login</a></li>
								  <li class="menu-item" ><a title="Register or Login" href="{{route('register')}}">Register</a></li>
								@endif

								@endif
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

					<!-- LOGO -->
						<div class="wrap-logo-top left-section">
							<a href="index.html" class="link-to-home"><img src="{{asset ('assets/images/logo1.png')}}" alt="mercado"></a>
						</div>

						<div class="wrap-search center-section">
						<div class="text" >
		                     <h1>WELCOME TO EMS SOLUTION</h1>
	                                </div>
						</div>

						<div class="wrap-icon right-section">



                        <div class="wrap-icon-section wishlist">
								<a href="/" class="link-direction">
									<!-- <i class="bi bi-emoji-sunglasses" aria-hidden="true"></i> -->
									<div class="left-info">
										<span class="index">Work Smart</span>
										<span class="title">Not Hard</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section minicart">
								<a href="/" class="link-direction">
									<!-- <i class="" aria-hidden="true"></i> -->
									<div class="left-info">
										<span class="index">Discipline &</span>
										<span class="title">Consistency</span>
									</div>
								</a>
</div>

							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					<div class="header-nav-section">
						<div class="container">
							<ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >

							</ul>
						</div>
					</div>

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="/task" class="link-term mercado-item-title">Daily Task</a>
								</li>
								<li class="menu-item">
									<a href="/hr" class="link-term mercado-item-title">HR</a>
								</li>
								<li class="menu-item">
									<a href="/productivity" class="link-term mercado-item-title">Productivity</a>
								</li>
                                <li class="menu-item">
                                    <a href="{{route('user.employeeleavetable')}}" class="link-term mercado-item-title">Apply Leave</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('user.attendent')}}" class="link-term mercado-item-title">Employee Attendent</a>
                                </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	{{$slot}}

	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<!-- <i class="fa fa-truck" aria-hidden="true"></i> -->
							<div class="wrap-left-info">
								<h4 class="fc-name">Respect People's</h4>
								<p class="fc-desc">Space</p>

							</div>

						</li>
						<li class="fc-info-item">
							<!-- <i class="fa fa-recycle" aria-hidden="true"></i> -->
							<div class="wrap-left-info">
								<h4 class="fc-name">Respect People's</h4>
								<p class="fc-desc"> Property</p>

							</div>

						</li>
						<li class="fc-info-item">
							<!-- <i class="fa fa-credit-card-alt" aria-hidden="true"></i> -->
							<div class="wrap-left-info">
								<h4 class="fc-name">Don't Be Part Of</h4>
								<p class="fc-desc">the Rumour Mill</p>
							</div>

						</li>
						<li class="fc-info-item">
							<!-- <i class="fa fa-life-ring" aria-hidden="true"></i> -->
							<div class="wrap-left-info">
								<h4 class="fc-name">Do Small</h4>
								<p class="fc-desc">Tasks Well</p>

							</div>

						</li>
					</ul>
				</div>
			</div>
			<!--End function info-->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Contact Details</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">Address - Colombo Sri Lanka</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">Phone Number - 0112444444</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">Email - ems@gmail.com</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

							<div class="wrap-footer-item">
								<h3 class="item-header">Hot Line - 0112444444</h3>
								<div class="item-content">
									<div class="wrap-hotline-footer">
										<span class="desc">Call Us On the Hotline</span>
										<!-- <b class="phone-number">Emergency Contatct Number</b> -->
									</div>
								</div>
							</div>

							<div class="wrap-footer-item footer-item-second">
								<!-- <h3 class="item-header">Sign up for newsletter</h3> -->
								<div class="item-content">
									<div class="wrap-newletter-footer">
										<!-- <form action="#" class="frm-newletter" id="frm-newletter">
											<input type="email" class="input-email" name="email" value="" placeholder="Enter your email address">
											<button class="btn-submit">Subscribe</button>
										</form> -->
									</div>
								</div>
							</div>

						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
							<div class="row">
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">About</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
											We Work as a team and We Each other in every manner and Every Situation. Respect and loyalty is the key factor of working together and help to build a great working Environment
											</ul>
										</div>
									</div>
								</div>
								<div class="wrap-footer-item twin-item">
									<!-- <h3 class="item-header">Infomation</h3> -->
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>

											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<!-- <h3 class="item-header">Social network</h3> -->
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<!-- <li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li> -->
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<!-- <h3 class="item-header">Dowload App(Coming Soon)</h3> -->
								<div class="item-content">
									<div class="wrap-list-item apps-list">
										<ul>
											<!-- <li><a href="#" class="link-to-item" title="our application on apple store"><figure><img src="assets/images/brands/apple-store.png" alt="apple store" width="128" height="36"></figure></a></li> -->
											<!-- <li><a href="#" class="link-to-item" title="our application on google play store"><figure><img src="assets/images/brands/google-play-store.png" alt="google play store" width="128" height="36"></figure></a></li> -->
										</ul>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				 <div class="wrap-back-link">


			</div>

			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Powered Employee Managment System</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<!-- <li class="menu-item"><a href="about-us.html" class="link-term">Mobile - 0770720813</a></li>
								<li class="menu-item"><a href="https://www.bitdottechnologies.com" class="link-term">Visit Us On BitDot Technologies </a></li>
								<li class="menu-item"><a href="https://www.instagram.com/bitdot_technologies/" class="link-term">Instagram</a></li>
								<li class="menu-item"><a href="https://www.facebook.com/BitDot-Technologies-106190478173788" class="link-term">FaceBook</a></li>								 -->
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
        </div>
	</footer>

    <script src="{{asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
    <script src="{{asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
    {{--	<script src="{{asset('assets/js/chosen.jquery.min.js')}}"></script>--}}
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('assets/js/functions.js')}}"></script>
    @livewireScripts
</body>
</html>
