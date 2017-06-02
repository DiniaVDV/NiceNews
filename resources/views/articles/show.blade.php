@extends('pages.index')

@section('content')
	<h1>{{$categoryName[0]['title']}}</h1>

	@if(is_null($catedArticle))
		<h2>{{$article->title}}</h2>
		<div class="row">
			<div style="float:left;">
				<h6>Total <i class="fa fa-eye" aria-hidden="true">123</i> </h6>
			</div>
			<div class="pull-right">
				<h6>today <i class="fa fa-eye" aria-hidden="true">123</i></h6>
			</div>
		</div>
			<img class="img" src="{{asset('/img')}}/{{$article->img}}" alt="Generic placeholder image" width="340" height="340">

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
					<h6>today <i class="fa fa-eye" aria-hidden="true">123</i></h6>
				</div>
			</div>
				<img class="img" src="{{asset('/img')}}/{{$article->img}}" alt="Generic placeholder image" width="340" height="340">

			<article>
			   {{$article->body}}
			</article>	
		@else
			<h2>{{$article->title}}</h2>
			<div class="row">
				<div style="float:left;">
					<h6>Total <i class="fa fa-eye" aria-hidden="true">123</i> </h6>
				</div>
				<div class="pull-right">
					<h6>today <i class="fa fa-eye" aria-hidden="true">123</i></h6>
				</div>
			</div>
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
@stop