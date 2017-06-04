    <script>
        $('#tag_list').select2({
            placeholder: 'Choose a tag',

        });
        window.onbeforeunload = function() {return "really leave now?"};
        $(document).ready(function() {
            $('a[rel!=ext]').click(function() { window.onbeforeunload = null; });
            $('form').submit(function() { window.onbeforeunload = null; });
        });
    </script>
<footer>
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-inverse main_navbar" style=" margin-bottom: 0px;">
				<div class="container">
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="https://www.facebook.com/"> <i class="fa fa-facebook-official"> </i>Facebook</a></li>
							<li><a href="http://twitter.com/"> <i class="fa fa-twitter"> </i>Twitter</a></li>
							<li><a href="https://instagram.com//"> <i class="fa fa-instagram"> </i>Instagram</a></li>
							<li><a href="http://youtube.com/"> <i class="fa fa-youtube"> </i>YouTube</a></li>
							<li><a href="https://plus.google.com/u/4/communities/114887594051316779576"> <i class="fa fa-google-plus"> </i>Google+	</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
			<div class="pull-right" style=" margin-top: 0px;">
				<h5>&copy 2017. Dinia</h5>
			</div>

		</div>
	</div>
</footer>	
