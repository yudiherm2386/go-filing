<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>@yield('title') | {{ env('APP_NAME')}}</title>
		<link rel="stylesheet" href="{{ asset('assets/css/output.css') }}" />
		<link
			rel="shortcut icon"
			href="{{ asset('assets/img/logo pertamina.svg') }}"
			type="image/x-icon"
		/>
        @stack('css_vendor')
        @stack('css')
        @stack('dynamic_form_css')
		@include('_partials.scripts')
	</head>
	<body class="flex">
		@include('_partials.sidebar')
        @yield('content')
		@stack('js_page')
	</body>
</html>