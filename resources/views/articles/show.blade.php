@extends('app')

@section('content')

    <h1>{{$article->title}}</h1>

		<img class="img" src="{{asset('/img')}}/{{$article->img}}" alt="Generic placeholder image" width="340" height="340">

        <article>
           {{$article->body}}
        </article>
    @unless($article->tags->isEmpty())
        <h5>Tags:</h5>
        <ul class='nav navbar-nav'>
            @foreach($article->tags as $tag)
                <li><a href="{{asset('/tags')}}/{{$tag->name}}">{{$tag->name}}</a></li>
            @endforeach
        </ul>
    @endunless


@stop