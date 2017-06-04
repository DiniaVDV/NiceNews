@extends('pages.index')

@section('content')

    <div>
        <h1>Вы искали:</h1>
        @if(isset($artilcles))
            @foreach($articles as $article)
                        <h4><a href="{{asset('/articles')}}/{{$article->id}}" style="color: black">{{$article->title}}</a></h4>
            @endforeach
        @else
            <h4>По результатам Вашего запроса ничего не найдено!</h4>
        @endif
    </div>
@endsection