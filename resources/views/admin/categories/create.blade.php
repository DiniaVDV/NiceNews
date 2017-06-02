@extends('admin.app')
@section('content')
    <h3> категории</h3><br/>
    <br/>

    {!! Form::open(['action' => 'Admin\CategoryController@store']) !!}

    <div class="form-group">
        <label for="name">Псевдоним</label>
        <input type="text" id="name" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="title">Название</label>
        <input type="text" id="title" name="title" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="position">Позиция</label>
        <input type="text" id="position" name="position" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="special_category">Специальная категория</label>
        <input type="text" id="special_category" name="special_category" class="form-control"/>
    </div>
    <input type="submit" class="btn btn-success" value="Ok"/>

    {!! Form::close() !!}
    @include('errors.list')
@endsection