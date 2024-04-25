<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--================= Meta tag =================-->
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <!--================= Responsive Tag =================-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--================= Favicon =================-->
    <link rel="apple-touch-icon" href="{{ url('assetsdepan/images/sulut2.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assetsdepan/images/sulut2.png')}}">
    <!--================= Bootstrap V5 css =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assetsdepan/css/bootstrap.min.css')}}">
    <!--================= Menus css =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assetsdepan/css/menus.css')}}">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assetsdepan/css/animate.css')}}">
    <!--================= Owl Carousel css =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assetsdepan/css/owl.carousel.css')}}">
    <!--================= Owl Carousel css =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assetsdepan/css/swiper.min.css')}}">
    <!--================= Elegant icon css  =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assetsdepan/fonts/elegant-icon.css')}}">
    <!--================= Fontawesome icon css  =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assetsdepan/css/all.min.css')}}">
    <!--================= Magnific Popup css =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assetsdepan/css/magnific-popup.css')}}">
    <!--================= Animations css =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assetsdepan/css/animations.css')}}">
    <!--================= style css =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assetsdepan/style.css')}}">
    <!--================= Custom Spacing css =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assetsdepan/css/custom-spacing.css')}}">
    <!--================= Responsive css =================-->
    <link rel="stylesheet" type="text/css" href="{{ url('assetsdepan/css/responsive.css')}}">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
		 integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
		 crossorigin=""/>
 <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>

	  <!-- Load Esri Leaflet from CDN -->
	<script src="https://unpkg.com/esri-leaflet@3.0.2/dist/esri-leaflet.js"
		integrity="sha512-myckXhaJsP7Q7MZva03Tfme/MSF5a6HC2xryjAM4FxPLHGqlh5VALCbywHnzs2uPoF/4G/QVXyYDDSkp5nPfig=="
		crossorigin=""></script>

	  <!-- Load Esri Leaflet Geocoder from CDN -->
	<link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@3.0.0/dist/esri-leaflet-geocoder.css"
		integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g=="
		crossorigin="">
	<script src="https://unpkg.com/esri-leaflet-geocoder@3.0.0/dist/esri-leaflet-geocoder.js"
		integrity="sha512-vZbMwAf1/rpBExyV27ey3zAEwxelsO4Nf+mfT7s6VTJPUbYmD2KSuTRXTxOFhIYqhajaBU+X5PuFK1QJ1U9Myg=="
		crossorigin=""></script>	
		<script src='https://unpkg.com/wicg-inert@latest/dist/inert.min.js'></script>
		<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
		<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

	  <style>
		#map { height:500px;, width:100%;, top:0; bottom:0; right:0; left:0; }
	  </style>
	  <style>
		#mapke2 { height:500px;, width:100%;, top:0; bottom:0; right:0; left:0; }
	  </style>      

</head>

<body>
    <!--================= Preloader Section Start Here =================-->
    <div id="react__preloader">
        <div id="react__circle_loader"></div>
        <div class="react__loader_logo"><img src="{{ url('assetsdepan/images/sulut2.png')}}" alt="Preload"></div>
    </div>
    <!--================= Preloader Section End Here =================-->

    <!--================= Header Section Start Here =================-->
    <header id="react-header" class="react-header react-header-three">
        <div class="topbar-area style1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="topbar-contact">
                            <ul>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-phone">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg>
                                    <a href="#"> +62 812-6370-7401</a>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-mail">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                        </path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                    <a href="mailto:admin@gmaill.com">admin@gmaill.com</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="toolbar-sl-share">
                            <ul class="social-links">
                                <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                                <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                                <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-part">
            <div class="container">
                <!--================= Menu Start Here =================-->
                <div class="react-main-menu">
                    <nav>
                        <!--================= Menu Toggle btn =================-->
                        <div class="menu-toggle">
                            <div class="logo"><a href="#" class="logo-text"> <img src="{{ url('assetsdepan/images/sulut2.png')}}"
                                        alt="logo"> </a></div>
                            <button type="button" id="menu-btn">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!--================= Menu Structure =================-->
                        <div class="react-inner-menus">
                            <ul id="backmenu" class="react-menus react-menus-six home react-sub-shadow">
                                <li> <a href="{{route('homepage.home')}}">Home</a></li>
                                <li> <a href="{{route('homepage.artikel')}}">Artikel</a></li>
                                <li> <a href="{{route('homepage.job')}}">Pencarian Tenaga Kerja</a></li>
                                <li> <a href="{{route('homepage.sekolah')}}">Sekolah</a></li>
                                
                            </ul>
                            <div class="searchbar-part">
                            @if (Auth::guest())
                                <div class="react-login">
                                    <a href="{{ route ('login')}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>Log In</a>
                                </div>
                                @elseif (Auth::user()->level =='admin')
                                <div class="react-login">
                                    <a href="{{ route ('admin.home')}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>Dashboard</a>
                                </div>                                
                                @endif
                                <form class="search-form" action="{{ route('homepage.cariartikel') }}" method="get">
                                    <input type="text" class="form-input" name="cari" placeholder="Cari Artikel">
                                    <button type="submit" class="form-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-search">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
                <!--=================  Menu End Here  =================-->
            </div>
        </div>
    </header>
    <!--================= Header Section End Here =================-->