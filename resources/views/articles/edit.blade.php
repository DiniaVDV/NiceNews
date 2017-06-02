@extends('pages.index')

@section('content')
    <h1>Редактировать: {!! $article->title !!}</h1>

    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
        @include('articles.form', ['submitButtonText' => 'Update Article'])
    {!! Form::close() !!}

    @include('errors.list')
@stop