@extends('pages.index')

@section('content')

<div>
	<h1>ТОП НОВОСТЕЙ</h1>
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
<div class="topComments">
	<h2 class="title">ТОП-5 КОМЕНТАТОРОВ:</h2>
	<div >
		@foreach($topUsersComments as $topUsersComment)
			<h4><a href="{{asset('user')}}/{{$topUsersComment->id}}/comments" style="color: black;">{{$topUsersComment->name}}</a></h4>
		@endforeach
	</div>
</div>
<div class="topComments">
	<h2 class="title">ТОП-3 АКТИВНЫХ ТЕМ:</h2>
	<div >
		@foreach($topArticles as $topArticle)
			<h4><a href="{{asset('articles')}}/{{$topArticle->id}}/comments" style="color: black;">{{$topArticle->title}}</a></h4>
		@endforeach
	</div>
</div>
@endsection
