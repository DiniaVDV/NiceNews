<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Nicenews</title>
    <link href="{{ asset('css/style.css') }}"  rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}"  rel="stylesheet">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
	<body>
		@include('partials.nav')
		<div class="container">
			@include('adverts.leftsidebar')
			@include('partials.flash')
			@yield('content')
			@include('adverts.rightsidebar')	
		</div>
		<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}" ></script>
		<script>
			$('div.alert').not('.alert-important').delay(3000).slideUp(300);
		</script>
		<script src="{{ asset('js/select2.min.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
		@include('layouts.footer')
	</body>
</html>