@extends('pages.index')

@section('content')
	@if(is_null($catedArticle))
		<h1>{{$article->title}}</h1>
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
			<h1>{{$article->title}}</h1>
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
			<h1>{{$article->title}}</h1>
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
	<div class="comments row">
		<div class="col-md-12">
			<hr>
			
			<h3> Комментарии:</h3>
			
			<hr>
			@if(Auth::user())
	      {!! Form::open( ['action' => ['CommentsController@addComment', $article->id]]) !!}
					<div class="form-group">
						{!! Form::label('message', 'Ваше мнение:') !!}
						{!! Form::textarea('body', null, ['class' => 'form-control']) !!}

					</div>

					<div class="form-group">
						{!! Form::hidden('invisible', date('Y-m-d h:i:s'), ['class' => 'form-control']) !!}

					</div>

					<div class="form-group">
						{!! Form::submit('ОК', ['class' => 'btn btn-primary form-control']) !!}

					</div>
	    {!! Form::close() !!}
			@else
				<h4> Вы не зарегистрированы. Зарегистируйтесь, чтобы выразить свое мнение. </h4>
				<ul class='nav navbar-nav'>
					<li>
						<a href="{{asset('login')}}">Войти</a>
					</li>	
					<li>
						<a href="register">Регистрация</a>
					</li>	
				<ul/>
					
			@endif
		</div>
	</div>
@stop