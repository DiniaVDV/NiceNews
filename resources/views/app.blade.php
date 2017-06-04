@include('layouts.head', ['title' => 'NiceNews'])
<script>
    $( function() {
        $( "#datepicker1" ).datepicker();
        $( "#anim" ).on( "change", function() {
            $( "#datepicker1" ).datepicker( "option", "showAnim", $( this ).val() );
        });
    } );

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
		<script>
            /************writting user cookie***************************/

            $(function() {
                // Проверяем запись в куках о посещении
                // Если запись есть - ничего не происходит
                if (!$.cookie('Rosinger')) {
                    // если cookie не установлено появится окно
                    // с задержкой 15 секунд
                    var delay_popup = 15000;
                    setTimeout($('#overlay').css("display", "block"), delay_popup);
                }
                $.cookie('Rosinger', true, {
                    // Время хранения cookie в днях
                    expires: 7,
                    path: '/'
                });
            });
			/*****************************************************************************************************/
//            window.onbeforeunload = function() {return "really leave now?"};
//            $(document).ready(function() {
//                $('a[rel!=ext]').click(function() { window.onbeforeunload = null; });
//                $('form').submit(function() { window.onbeforeunload = null; });
//            });



		</script>
	</body>
</html>