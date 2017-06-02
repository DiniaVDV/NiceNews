<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		@foreach($lastArticles as $lastArticle)
			@if($lastArticle == $lastArticles[0])
				<div class="item active">
					<img class="first-slide" src="{{asset('/img/articlesPhoto')}}/{{$lastArticle->img}}" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>{{$lastArticle->title}}</h1>
							<a class="btn btn-lg btn-primary" href="{{asset('/articles')}}/{{$lastArticle->id}}" role="button">Подробнее</a></p>
						</div>
					</div>
				</div>
			@else
				<div class="item">
					<img class="second-slide" src="{{asset('/img/articlesPhoto')}}/{{$lastArticle->img}}" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>{{$lastArticle->title}}</h1>
							<a class="btn btn-lg btn-primary" href="{{asset('/articles')}}/{{$lastArticle->id}}" role="button">Подробнее</a></p>
						</div>
					</div>
				</div>				
			@endif
		@endforeach
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div><!-- /.carousel -->
