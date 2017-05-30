@extends('app')

@section('content')
	<h2>Новости по тегу "{{lcfirst($tag->title)}}":</h2>
    @foreach($articles as $article)
    <article>
        <h4>
            <a href="{{action('ArticlesController@show', [$article->id])}}">
				{{$article->title}}
			</a>
        </h4>
    </article>
    @endforeach
@endsection
