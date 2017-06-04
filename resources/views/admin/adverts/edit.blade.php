@extends('admin.app')
@section('content')

<h3>Редактирование рекламы {{strtolower($advert->name_company)}}</h3><br/>
    {!! Form::model($advert, ['method' => 'PATCH', 'action' => ['Admin\AdvertsController@update', $advert->id]]) !!}
    @include('admin.adverts.form', ['submitButtonText' => 'Обновить рекламу'])
    {!! Form::close() !!}
    @include('errors.list')

@endsection