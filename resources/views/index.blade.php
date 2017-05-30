@extends('app')

@section('content')

<div>
@foreach($categories as $category)
	<h2><a href="{{asset('/categories')}}/{{$category->name}}" style="color: black">{{$category->title}}</a></h2>
	@foreach($categoryArticles[$category->id] as $article)
		<h4><a href="{{asset('/articles')}}/{{$article->id}}" style="color: black">{{$article->title}}</a></h4>
	@endforeach
@endforeach
</div>
@endsection
