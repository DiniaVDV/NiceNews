@extends('admin.app')
@section('content')
    <h1 class="page-header">Категории</h1>
    @include('admin.partials.flash')
    <div class=bs-example data-example-id=striped-table>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Псевдоним</th>
                <th>Название</th>
                <th class="tableCenter">Позиция</th>
                <th class="tableCenter">Специальная категория</th>
                <th class="tableCenter">Действия</th>
            </tr>
            </thead>
    @foreach($categories as $category)
            <tbody>
                <tr>
                    <td><strong>{{$category->id}}</strong></td>
                    <td><strong>{{$category->name}}</strong></td>
                    <td><strong>{{$category->title}}</strong></td>
                    <td align="center"><strong>{{$category->position}}</strong></td>
                    <td align="center"><strong>{{$category->special_category}}</strong></td>
                    <td align="center">
                        <a href="{{asset('admin_panel/category')}}/{{$category->id}}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a href="{{asset('admin_panel/category')}}/{{$category->id}}/delete" onclick="return confirmDelete('категорию')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                    </td>
                </tr>
            </tbody>
    @endforeach
        </table>
    </div>

@endsection