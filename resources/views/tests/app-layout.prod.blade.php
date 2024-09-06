<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="robots" content="index, follow"/>
		<meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
	  <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
	  <meta name="csrf-token" content="{{ csrf_token() }}"/>
	  <meta name="grecaptcha-key" content="{{ env('GOOGLE_RECAPTCHA_CLIENT_KEY') }}"/>
	 	<meta name="description" content="{{ $description }}" />
		<meta name="abstract" content="Online Admission of {{ config('app.name') }}"  />
	  <meta name="copyright" content="{{ config('app.name') }}"  />
	  <meta name='Classification' content='Education'/>
	  <meta name='identifier-URL' content='{{ url()->current() }}'/>
	  <meta name="msapplication-TileImage" content="{{ asset('/favicon.png') }}" />

	  <meta property="og:image" content="{{ asset('/ogimage.png') }}" />
	  <meta property="og:image:width" content="608"/>
	  <meta property="og:image:height" content="260"/>
	  <meta property="og:image:alt" content="{{ config('app.name') }} - {{ $title }}" />
	  <meta property="og:image:secure_url" content="{{ asset('/favicon.png') }}"/>
	  <meta property="og:locale" content="en_US"/>
	  <meta property="og:type" content="website"/>
	 	<meta property="og:title" content="@isset($title) {{ $title }} | @endisset Golden Minds Bulacan" />
	  <meta property="og:description" content="{{ $description }}" />
	  <meta property="og:url" content="{{ url()->current() }}" />
	  <meta property="og:site_name" content="Online Admission - {{ config('app.name') }}"/>
		<meta property="fb:app_id" content="100924508936440"/>
		<meta property="article:author" content="https://www.facebook.com/gmcstamaria2015"/>
	  <meta property="article:publisher" content="https://www.facebook.com/gmcstamaria2015"/>
	  <title>@isset($title) {{ $title }} | @endisset {{ config('app.name') }}</title>
	  {{-- Favicon --}}
		<link rel="shortcut icon" type="image/png" sizes="16x16" href="{{ asset('/favicon.png') }}" />
		<link rel="apple-touch-icon" type="image/png" sizes="16x16"  href="{{ asset('/favicon.png') }}" />
		<link rel="alternate" type="application/rss+xml" title="{{ config('app.name') }} Colleges and Academy - Is a distinguished private school providing tuition-free education. Our institution is committed to nurturing graduates who excel in the ever-evolving global landscape." href="https://www.goldenmindsbulacan.com/" />
		<link rel="alternate" type="application/rss+xml" title="{{ config('app.name') }} - News" href="https://www.goldenmindsbulacan.com/news" />
		<link rel="canonical" href="{{ url()->current() }}"/>
		{{-- Google Fonts --}}
		<link rel='dns-prefetch' href='https://fonts.googleapis.com' />
		<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin/>
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:wght@500&display=swap" defer/>
	  {{-- Library and plugin css and js links --}}
	  <link rel="stylesheet" href="{{ asset('/global/assets/libs/bootstrap@5.3.2/css/bootstrap.min.css') }}"/>
	  <link rel="stylesheet" href="{{ asset('/global/assets/libs/fontawesome@6.0/css/all.min.css') }}"/>
	  <link rel="stylesheet" href="{{ asset('/global/assets/libs/sweetalert2@11/dist/sweetalert2.min.css') }}"/>
	  <link rel="stylesheet" href="{{ asset('/global/assets/libs/toastr/toastr.min.css') }}"/>
	  <link rel="stylesheet" href="{{ asset('/global/assets/libs/preloader/preloader.css') }}"/>
	  <link rel="stylesheet" href="{{ asset('/global/assets/libs/wow/wow.min.css') }}"/>
	  <script src="{{ asset('/global/assets/libs/jquery@3.7.1/jquery.min.js') }}" type="text/javascript"></script>
	  {{-- Custom css links --}}
	  <link rel="stylesheet" href="{{ asset('/global/assets/custom/stylesheets/app.css?v=1.0') }}"/>
	  {{-- reCaptcha API Library --}}
	  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	  <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N6FHZWQ3');</script>
     <!-- End Google Tag Manager -->
  </head>
  <body onbeforeunload="return leavePageConfirm()">
      <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6FHZWQ3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	  {{-- Header --}}
		<x-header id="header">
	  	<div class="h_container">
	    	<x-app-container>
	      	<div class="row">
		        {{-- Contact --}}
		        <div class="col-md-6 d-none d-lg-inline ">
		          <div class="d-flex">
		            <a href="tel:+639394499844" class="d-none d-lg-inline h_links">
		              <small><i class="fa-solid fa-phone"></i>&nbsp;
		              	{{ __('(+63) 939 449 9844')}}
		              </small>
		            </a>&nbsp;&nbsp;&nbsp;
		            <a href="mailto:admission@goldenminds.edu.ph" class="ml-10 d-none d-lg-inline h_links">
		              <small><i class="fa-solid fa-envelope"></i>&nbsp;
		              	{{ __('admission@goldenminds.edu.ph')}}
		              </small>
		            </a>
		          </div>
		        </div>
		        {{-- Social --}}
		        <div class="col-md-6 d-flex justify-content-center justify-content-md-end align-items-center">
		          <div class="d-flex">
		            <a href="https://www.facebook.com/gmcstamaria2015" target="_blank"
		            	class="h_links">
		              <small><i class="fa-brands fa-facebook-f"></i></small>
		            </a>&nbsp;&nbsp;
		            <a href="https://www.youtube.com/@goldenmindscolleges7588" target="_blank"
		            	class="ml-10 h_links">
		              <small><i class="fa-brands fa-youtube"></i></small>
		            </a>&nbsp;&nbsp;
		            <span class="ml-10">
		              <small><i class="fa-brands fa-linkedin-in"></i></small>
		            </span>&nbsp;&nbsp;
		            <a href="mailto:info@goldenminds.edu.ph"
		            	class="d-lg-none ml-10 h_links">
		              <small><i class="fa-solid fa-envelope"></i></small>
		            </a>&nbsp;&nbsp;
		            <a href="tel:+639394499844"
		            	class="d-lg-none ml-10 h_links">
		              <small><i class="fa-solid fa-phone"></i></small>
		            </a>
		          </div>
		        </div>
	      	</div>
	    	</x-app-container>
	  	</div>
		</x-header>
		{{-- Main --}}
	  <x-main>
	    {{ $slot }}
	  </x-main>
	  {{-- Footer --}}
	  <x-footer class="mt-auto text-center mb-4">
    	<small class="text-muted">
    		<span>&copy; {{ __('2023') }} <a href="https://www.goldenmindsbulacan.com/" target="_blank"
    			class="text-muted text-decoration-none">{{ config('app.name') }}</a>
    		</span><br/>
    		<span>{{ __('Maintain and Manage by Information System') }}</span>
    	</small>
  	</x-footer>
	  {{-- Library and plugin js links --}}
	  <script src="{{ asset('/global/assets/libs/bootstrap@5.3.2/js/bootstrap.bundle.min.js') }}"></script>
	  <script src="{{ asset('/global/assets/libs/fontawesome@6.0/js/all.min.js') }}"></script>
	  <script src="{{ asset('/global/assets/libs/sweetalert2@11/dist/sweetalert2.all.min.js') }}"></script>
	  <script src="{{ asset('/global/assets/libs/toastr/toastr.min.js') }}"></script>
	  <script src="{{ asset('/global/assets/libs/preloader/preloader.js') }}"></script>
	  <script src="{{ asset('/global/assets/libs/wow/wow.min.js') }}"></script>
  </body>
</html>