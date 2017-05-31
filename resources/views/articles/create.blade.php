@extends('pages.index')

@section('content')

    <h1>Write a New Article</h1>

    <hr/>

    {!! Form::open(['action' => 'ArticlesController@show']) !!}
        @include('articles.form', ['submitButtonText' => 'Add Article'])
    {!! Form::close() !!}

    @include('errors.list')
@stop