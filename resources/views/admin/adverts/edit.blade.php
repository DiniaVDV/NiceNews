@extends('admin.app')
@section('content')

<h3>Редактирование {{strtolower($article->title)}} категории</h3><br/>
<br/>
    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['Admin\ArticlesController@update', $article->id],  'files'=>true]) !!}

    <div class="form-group">
        <label for="title">Название:</label>
        <input type="text" id="title" name="title" class="form-control" value="{{$article->title}}"/>
    </div>
    <div class="form-group">
        {!! Form::label('body', 'Текст:') !!}
        {!! Form::textarea('body', $article->body, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('image', 'Фото:')!!}
        {!! Form::file('img',['class' => 'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('category_id', 'Категория:') !!}
        {!! Form::select('category_id', $categories, isset($article) ? $article->category_id : null, ['id' => 'category_name', 'class' => 'form-control']) !!}

    </div>
    <div class="form-group">
        <label for="special_category">Ограниченый доступ:</label>
        <input type="text" id="special_category" name="special_category" class="form-control" value="{{$article->special_section}}"/>
    </div>
    <div class="form-group">
        {!! Form::label('published_at', 'Опубликовано:') !!}
        {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tag_list', 'Теги:') !!}
        {!! Form::select('tag_list[]', $tags, isset($article) ? $article->tag_list : null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
    </div>
    <input type="submit" class="btn btn-success" value="Ok"/>

    {!! Form::close() !!}
@include('errors.list')

@endsection