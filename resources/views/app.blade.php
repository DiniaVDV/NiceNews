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
	<script src="{{ asset('js/jquery.cookie.js') }}" type="text/javascript" ></script>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="SHORTCUT ICON" href="{{ asset('/favicon.png') }}" type="image/png">
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
        var backgroundList = <?=json_encode($backgroundList)?>;
	</script>


</head>
	<body>
		@include('partials.rosinger')
		@yield('body')
		<script>

			$('div.alert').not('.alert-important').delay(3000).slideUp(300);
			/*********change color header and body********************/
            $('body').css("background-color", backgroundList[0].body_color );
            $('.main_navbar').css("background-color", backgroundList[0].header_color );
            /***********************************************************/
		</script>
		<script src="{{ asset('js/select2.min.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
		@include('layouts.footer')
	</body>
</html>