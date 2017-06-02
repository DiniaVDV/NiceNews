<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Dinia">
    <title>Nicenews</title>
    <link href="{{ asset('css/bootstrap.css') }}"  rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet"  type="text/css"/>
	<link href="{{ asset('css/style.css') }}"  rel="stylesheet" type="text/css"/>
	<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}" ></script>
	<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
		$.ajaxSetup({
			headers:{
				'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
			}
		});
    </script>
	<script>
        $( function() {
            $( "#datepicker1" ).datepicker();
            $( "#anim" ).on( "change", function() {
                $( "#datepicker1" ).datepicker( "option", "showAnim", $( this ).val() );
            });
        } );
        $( function() {
            $( "#datepicker2" ).datepicker();
            $( "#anim" ).on( "change", function() {
                $( "#datepicker2" ).datepicker( "option", "showAnim", $( this ).val() );
            });
        } );
	</script>


</head>
	<body>
{{--	<p>Date: <input type="text" id="datepicker1" size="30"></p>
	<p>Date: <input type="text" id="datepicker2" size="30"></p>--}}
		@yield('body')
		<script>
			$('div.alert').not('.alert-important').delay(3000).slideUp(300);
		</script>
		<script src="{{ asset('js/select2.min.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
		@include('layouts.footer')
	</body>
</html>