@extends('pages.index')
@section('content')
    <h1>Комментарии пользователя {{$user->name}}</h1>
    <div class="comments">
        @foreach($comments as $comment)
            <div id="comm_{{$comment->id}}">
                <button onclick="count(this)" class="btn btn-default btn-xs btn-danger" id="min_{{$comment->id}}">
                    <i class="fa fa-minus" aria-hidden="true"></i>
                </button>
                <span class="badge like_{{$comment->id}}">{{$comment->like}}</span>
                <button onclick="count(this)" class="btn btn-default btn-xs btn-success"
                        id="plus_{{$comment->id}}">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
                {{$user->name}}. Дата: {{$comment->created_at}}
                <p><strong>{{$comment->message}}</strong></p>
            </div>
        @endforeach
        @include('partials.pagination', ['paginate' => $comments])
    </div>
@endsection