@extends('admin.app')
@section('content')
    <h1 class="page-header">Категории</h1>
    <div class=bs-example data-example-id=striped-table>
        <table class="table table-striped">
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
                        <a href="{{asset('admin_panel/category')}}/{{$category->id}}/edit"><button class='btn btn-sm btn-primary'>edit</button></a>
                        <a href="{{asset('admin_panel/category')}}/{{$category->id}}/delete" onclick="return confirmDelete('категорию')"><button class='btn btn-sm btn-warning'>delete</button></a>
                    </td>
                </tr>
            </tbody>
    @endforeach
        </table>
    </div>

@endsection