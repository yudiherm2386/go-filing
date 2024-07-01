<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="_token" content="{{ csrf_token() }}">
		<title>@yield('title') | {{ env('APP_NAME')}}</title>
		<link rel="stylesheet" href="{{ asset('assets-login/css/output.css') }}" />
		<link
			rel="shortcut icon"
			href="{{ asset('assets/img/logo pertamina.svg') }}"
			type="image/x-icon"
		/>
        @stack('css_vendor')
        @stack('css')
        @stack('dynamic_form_css')
	</head>
	<body class="bg-[#F9F9FA]">
        @yield('content')

		@include('_partials.scripts')
	</body>
</html>