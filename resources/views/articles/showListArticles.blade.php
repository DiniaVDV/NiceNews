@extends('pages.index')

@section('content')
    <h1>{{$category->title}}</h1>

    <hr/>

    @foreach($articles as $article)
    <article>
        <h2>
            <a href="{{action('ArticlesController@show', [$article->id])}}">{{$article->title}} </a>
        </h2>
    </article>


    @endforeach
    @if($category->name != 'analitics')
    	@include('partials.pagination', ['paginate' => $articles])
    @endif
@endsection
