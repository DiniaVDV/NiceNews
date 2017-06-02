@extends('admin.app')
@section('content')
    <h3>Разместить рекламу</h3><br/>
    <br/>

    {!! Form::open(['action' => 'Admin\AdvertsController@store']) !!}
        @include('admin.adverts.form')
    {!! Form::close() !!}
    @include('errors.list')
@endsection