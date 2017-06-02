@extends('admin.app')
@section('content')

<h3>Редактирование {{strtolower($category->title)}} категории</h3><br/>
<br/>
    {!! Form::model($category, ['method' => 'PATCH', 'action' => ['Admin\CategoryController@update', $category->id]]) !!}

    <div class="form-group">
        <label for="name">Псевдоним</label>
        <input type="text" id="name" name="name" value="{{$category->name}}" class="form-control">
    </div>
    <div class="form-group">
        <label for="title">Название</label>
        <input type="text" id="title" name="title" class="form-control" value="{{$category->title}}"/>
    </div>
    <div class="form-group">
        <label for="position">Позиция</label>
        <input type="text" id="position" name="position" class="form-control" value="{{$category->position}}"/>
    </div>
    <div class="form-group">
        <label for="special_category">Специальная категория</label>
        <input type="text" id="special_category" name="special_category" class="form-control" value="{{$category->special_category}}"/>
    </div>
    <input type="submit" class="btn btn-success" value="Ok"/>

    {!! Form::close() !!}
@include('errors.list')
@endsection