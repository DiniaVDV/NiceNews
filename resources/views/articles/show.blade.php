@extends('pages.index')

@section('content')
	<h1>{{$categoryName[0]['title']}}</h1>


	@if(is_null($catedArticle))
		<h2>{{$article->title}}</h2>
		<div class="row">
			<div style="float:left;">
				<h6>Total <i class="fa fa-eye" aria-hidden="true"> <span class="badge totalViewers">123</span></i> </h6>
			</div>
			<div class="pull-right">
				<h6>now <i class="fa fa-eye" aria-hidden="true"> <span class="badge nowViewers">1</span></i></h6>
			</div>
		</div>
			<img class="img" src="{{asset('/img/articlesPhoto')}}/{{$article->img}}" alt="" width="340" height="340">

		<article>
		   {{$article->body}}
		</article>
	@else
		@if(Auth::user())
			<h2>{{$article->title}}</h2>
			<div class="row">
				<div style="float:left;">
					<h6>Total <i class="fa fa-eye" aria-hidden="true">123</i> </h6>
				</div>
				<div class="pull-right">
					<h6>now <i class="fa fa-eye" aria-hidden="true">123</i></h6>
				</div>
			</div>
				<img class="img" src="{{asset('/img/articlesPhoto')}}/{{$article->img}}" alt="" width="340" height="340">

			<article>
			   {{$article->body}}
			</article>	
		@else
			<h2>{{$article->title}}</h2>
			<article style="margin-top:50px;">
			   {{$catedArticle[$article->id]}}
			   <h4> Вы не зарегистрированы. Зарегистируйтесь, чтобы прочитать статью полностью. </h4>
			</article>				
		@endif
	@endif
   
    @unless($article->tags->isEmpty())
		<div class="tags row">
			<div class="col-md-12">
				<h5>Tags:</h5>
				<ul class='nav navbar-nav'>
					@foreach($article->tags as $tag)
						<li><a href="{{asset('/tags')}}/{{$tag->name}}">{{$tag->name}}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
    @endunless
	@include('partials.comments')
	<script>

        /**
         * Returns a random integer between min (inclusive) and max (inclusive)
         * Using Math.round() will give you a non-uniform distribution!
         */
        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
        function showViewers() {
            var nowViewers= getRandomInt(1, 5);
            console.log(nowViewers);
            var totalViewers = parseInt($('.totalViewers').text());
            $('.nowViewers').text(nowViewers);
            totalViewers += nowViewers;
            $('.totalViewers').text(totalViewers);
        }
        function uplodaTotalViewrs(){
            var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
            var time = today.getHours() + ':' + today.getMinutes() + ':' + today.getSeconds()
            var currentDate = date + ' ' + time;
		}
        setInterval(showViewers, 5000);

//		console.log(getRandomInt(1, 5));
	</script>
@stop