<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>@isset($title) {{ $title }} | @endisset {{ config('app.name') }}</title>
	  <meta charset="UTF-8"/>
	  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	  <meta http-equiv="Content-type" content="text/html" />
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

		<meta name="robots" content="index, follow"/>
	  <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
	  <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
	  <meta name="author" content="Jerome Avecilla" />

		<meta name="title" content="Online Registration (SHS) - Golden Minds Colleges"/>
	  <meta name="description" content="{{ $description }}" />
	  <meta name="abstract" content="Online Registration of {{ config('app.name') }}" />
	  <meta name="copyright" content="Golden Minds Colleges"  />
	  <meta name="campus" content="Golden Minds Colleges of Balagtas, Bulacan, Inc., Golden Minds Colleges of Sta.Maria, Bulacan, Inc., Golden Minds Colleges of Pandi, Bulacan, Inc., Golden Minds Academy of Guiguinto, Bulacan, Inc." />
	  <meta name="keywords" content="Golden Minds, student registration, online registration, Bulacan education, admission online, Golden Minds Colleges, Golden Minds Academy" />
	  <meta name='Classification' content='Education'/>
	  <meta name='identifier-URL' content='https://sims.goldenminds.edu.ph/auth/login'/>
	  <meta name='base-URL' content='https://sims.goldenminds.edu.ph'/>
	  <meta name="msapplication-TileName" content="iRegister - Golden Minds Colleges (Senior High School)" />
	  <meta name="msapplication-TileImage" content="https://static.goldenmindsbulacan.com/assets/images/gmc/51sz2og.png" />
	  <meta name="msapplication-TileColor" content="#f3f3f3" />
	  <meta name="theme-color" content="#b4813f" />
	  <meta name="color-scheme" content="light" />

		<meta name="app-url" content="{{ env('APP_URL') }}"/>
		<meta name="expected-hostname" content="iregister.goldenminds.edu.ph" />
	  <meta name="grecaptcha-client-key" content="{{ env('GOOGLE_RECAPTCHA_CLIENT_KEY') }}" />
	  <meta name="google-site-verification" content="yn3h_XIX46hpOTXbkr1gnJnX5jjg1Lesyv_xOJHbR9g" />
	  <meta name="csrf-token" content="{{ csrf_token() }}" />

		<meta property="og:type" content="website" />
	  <meta property="og:site_name" content="Online Registration (SHS) - Golden Minds Colleges"/>
	  <meta property="og:url" content="{{ url()->current() }}" />
	  <meta property="og:title" content="Online Registration (SHS) - Golden Minds Colleges" />
	  <meta property="og:description" content="{{ $description }}" />
	  <meta property="og:image" content="https://static.goldenmindsbulacan.com/assets/images/gmc/51sz2og.png" />
	  <meta property="og:image:width" content="550"/>
	  <meta property="og:image:height" content="225"/>
	  <meta property="og:image:alt" content="Online Registration (SHS) - Golden Minds Colleges" />
	  <meta property="og:image:secure_url" content="https://static.goldenmindsbulacan.com/assets/images/gmc/logogray.png"/>
	  <meta property="og:locale" content="en"/>
	  <meta property="article:author" content="https://www.facebook.com/gmcstamaria2015"/>
	  <meta property="article:publisher" content="https://www.facebook.com/gmcstamaria2015"/>
	  <meta property="fb:pages" content="100924508936440"/>
	  <meta property="fb:app_id" content="100924508936440"/>
		<meta property="twitter:card" content="summary" />
	  <meta property="twitter:url" content="{{ env('APP_URL') }}" />
	  <meta property="twitter:title" content="Online Registration (SHS) - Golden Minds Colleges" />
	  <meta property="twitter:description" content="{{ $description }}" />
	  <meta property="twitter:image" content="https://static.goldenmindsbulacan.com/assets/images/gmc/51sz2og.png" />

		<link crossorigin="anonymous" rel="shortcut icon" type="image/png" href="https://static.goldenmindsbulacan.com/assets/images/gmc/as2l1f.png" />
	  <link crossorigin="anonymous" rel="apple-touch-icon" type="image/png" sizes="180x180" href="https://static.goldenmindsbulacan.com/assets/images/gmc/as2l1f-180.png" loading="lazy"/>
	  <link crossorigin="anonymous" rel="apple-touch-icon" type="image/png" sizes="32x32" href="https://static.goldenmindsbulacan.com/assets/images/gmc/as2l1f-32.png" loading="lazy"/>
	  <link crossorigin="anonymous" rel="apple-touch-icon" type="image/png" sizes="16x16" href="https://static.goldenmindsbulacan.com/assets/images/gmc/as2l1f-16.png" loading="lazy"/>

		<link rel="canonical" href="{{ url()->current() }}" />
	  <link rel="alternate" type="application/rss+xml" title="Experience the comforts of a home-away-from-home at Golden Minds, a Bulacan-based private institution offering tuition-free education across three campuses in Sta. Maria, Balagtas, and Guiguinto. Our cutting-edge academic programs are driven by a commitment to research and innovation, ensuring a leading-edge educational experience." href="https://www.goldenminds.edu.ph/about/information" />
	  <link rel="alternate" type="application/rss+xml" title="Golden Minds Online Application | Enrollment - GMC Senior High School effectively equips students with above level skills. Seize your future! Enroll now at GMC Senior High. Dream big, aim higher. New students and transferees are welcome at all levels. Your journey starts here!" href="https://admission.goldenminds.edu.ph/" />
	  <link rel="sitemap" type="application/xml" href="{{ env('APP_URL') }}/sitemap.xml"/>

		<link rel='dns-prefetch' href='https://static.goldenmindsbulacan.com' />
  	<link rel='preconnect' href='https://static.goldenmindsbulacan.com' crossorigin/>
  	<link rel="dns-prefetch" href="https://goldenminds-cloud.s3.amazonaws.com"/>

		<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin/>
  	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
	  <link crossorigin="anonymous" rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:wght@500&display=swap" defer/>

		<link crossorigin="anonymous" rel="stylesheet" type="text/css" href="https://static.goldenmindsbulacan.com/assets/libs/bootstrap/css/bootstrap.min.css" />
		<link crossorigin="anonymous" rel="stylesheet" type="text/css" href="https://static.goldenmindsbulacan.com/assets/libs/bootstrap/icons-1.11.3/font/bootstrap-icons.min.css">
	  <link crossorigin="anonymous" rel="stylesheet" type="text/css" href="https://static.goldenmindsbulacan.com/assets/libs/fontawesome/css/all.min.css" />
	  <link crossorigin="anonymous" rel="stylesheet" type="text/css" href="https://static.goldenmindsbulacan.com/assets/libs/animate/css/animate.css" loading="lazy" />
	  <link crossorigin="anonymous" rel="stylesheet" type="text/css"href="https://static.goldenmindsbulacan.com/assets/libs/toastr/toastr.min.css" loading="lazy"/>
	  <link crossorigin="anonymous" rel="stylesheet" type="text/css"href="https://static.goldenmindsbulacan.com/assets/libs/sweetalert2/dist/sweetalert2.min.css" loading="lazy"/>
	  <link crossorigin="anonymous" rel="stylesheet" type="text/css" href="https://static.goldenmindsbulacan.com/assets/libs/animate/css/preloader.css" loading="lazy"/>
		<link crossorigin="anonymous" rel="stylesheet" type="text/css"href="https://static.goldenmindsbulacan.com/assets/libs/animate/css/wow.min.css" loading="lazy"/>
	  <link media="all" rel="stylesheet" href="{{ asset('/global/assets/custom/stylesheets/common.css?v=1.0.2') }}" defer="defer"/>
	  <link media="all" rel="stylesheet" href="{{ asset('/global/assets/custom/stylesheets/app.css?v=1.0.2') }}" defer="defer"/>

		<!-- Google Recaptcha (api.js) -->
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<!-- Google Analytics tag (gtag.js) -->
		<!-- Google Tag Manager -->
  </head>
  <body>
	  {{-- Header --}}
		<x-header id="header">
{{-- 			<div class="h_box px-3 py-2 border-bottom">
	      <x-app-container class="h_container_top">
	        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
	        	<span class="h_sub_title">Golden Minds Colleges</span>
	          <a href="/" class="h_title_link d-flex align-items-center my-2 my-lg-0 me-lg-auto">
	            iRegister(Senior High School)
	          </a>
	          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
	            <li>
	              <a href="#" class="h_menu_link nav-link ">
									<i class="icon bi bi-house-door d-block mx-auto "></i>
	                Main
	              </a>
	            </li>
	            <li>
	              <a href="#" class="h_menu_link nav-link text-white">
	                <i class="icon bi bi-person-circle d-block mx-auto"></i>
	                Portal
	              </a>
	            </li>
	          </ul>
	        </div>
	      </x-app-container>
	    </div> --}}
{{-- 	    <div class="px-3 py-2 border-bottom mb-3">
	      <x-app-container class="h_container_bottom d-flex flex-wrap justify-content-center">
	        <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
	          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
	        </form>

	        <div class="text-end">
	          <button type="button" class="btn btn-light text-dark me-2">Login</button>
	          <button type="button" class="btn btn-primary">Sign-up</button>
	        </div>
	      </x-app-container>
	    </div> --}}
	  </x-header>

		{{-- Main --}}
	  <x-main>
	    {{ $slot }}
	  </x-main>

	  {{-- Footer --}}
	  <x-footer class="mt-auto text-center mb-4">
    	<small>
    		<span>&copy; {{ __('2024') }} <a href="https://www.goldenminds.edu.ph/" target="_blank" class="text-dark text-decoration-none">{{ config('app.name') }} (Senior High School)</a></span><br/>
    		<span>{{ __('Maintain and Manage by IT Department') }}</span>
    	</small>
  	</x-footer>
	  <script crossorigin="anonymous" type="application/javascript" src="https://static.goldenmindsbulacan.com/assets/libs/jquery/jquery-3.7.1.min.js"></script>
	  <script crossorigin="anonymous" type="application/javascript" src="https://static.goldenmindsbulacan.com/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	  <script crossorigin="anonymous" type="application/javascript" src="https://static.goldenmindsbulacan.com/assets/libs/animate/js/preloader.js"></script>
	  <script crossorigin="anonymous" type="application/javascript" src="https://static.goldenmindsbulacan.com/assets/libs/sweetalert2/sweetalert2@11.min.js"></script>
	  <script crossorigin="anonymous" type="application/javascript" src="https://static.goldenmindsbulacan.com/assets/libs/toastr/toastr.min.js"></script>
	  <script crossorigin="anonymous" type="application/javascript" src="https://static.goldenmindsbulacan.com/assets/libs/animate/js/wow.min.js"></script>

		<script type="text/javascript" src="{{ asset('/global/assets/custom/scripts/global.js?v=0.8.2') }}" defer></script>
  	<script type="text/javascript" src="{{ asset('/global/assets/custom/scripts/shs.js?v=0.8.2') }}" async defer></script>
  	<script type="text/javascript" src="{{ asset('/global/assets/custom/scripts/registration.js?v=0.8.2') }}" defer></script>
  </body>
</html>
<!-- Last Modified: Sun Nov 28 2024 07:36:22 GMT+0000 (Coordinated Universal Time) -->
<!-- https://github.com/javecilla/readme -->