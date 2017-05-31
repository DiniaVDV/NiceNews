@extends('pages.index')

@section('content')

<div>
@foreach($categories as $category)
	@if($category->special_category == 0)
	<h2><a href="{{asset('/categories')}}/{{$category->name}}" style="color: black">{{$category->title}}</a></h2>
		@foreach($categoryArticles[$category->id] as $article)
			<h4><a href="{{asset('/articles')}}/{{$article->id}}" style="color: black">{{$article->title}}</a></h4>
		@endforeach
	@else
		<h2><a href="{{asset('/categories')}}/{{$category->name}}" style="color: black">{{$category->title}}</a></h2>
		<?php $i = 1;?>
		@foreach($specCategoryArticles as $article)
			@if($i <=5)
				<h4><a href="{{asset('/articles')}}/{{$article->id}}" style="color: black">{{$article->title}}</a></h4>
				<?php $i++;?>
			@endif
		@endforeach
	@endif
@endforeach
</div>
@endsection
