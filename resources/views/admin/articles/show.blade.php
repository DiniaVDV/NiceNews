@extends('admin.app')
@section('content')

    <h1 class="page-header">Статьи</h1>
    <div class=bs-example data-example-id=striped-table>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Название</th>
                <th class="tableCenter">Автор</th>
                <th class="tableCenter">Дата написания</th>
                <th class="tableCenter">Категория</th>
                <th class="tableCenter">Действия</th>
            </tr>
            </thead>
    @foreach($articles as $article)
            <tbody>
                <tr>
                    <td><strong>{{$article->id}}</strong></td>
                    <td><strong>{{$article->title}}</strong></td>
                    <td align="center"><strong>{{$users[$article->id][0]->name}}</strong></td>
                    <td align="center"><strong>{{$article->category_id}}</strong></td>
                    <td align="center"><strong>{{$categories[$article->id][0]->title}}</strong></td>
                    <td align="center">
                        <a href="{{asset('admin_panel/articles')}}/{{$article->id}}/edit"><button class='btn btn-sm btn-primary'>edit</button></a>
                        <a href="{{asset('admin_panel/articles')}}/{{$article->id}}/delete" onclick="return confirmDelete('статью')"><button class='btn btn-sm btn-warning'>delete</button></a>
                    </td>
                </tr>
            </tbody>
    @endforeach
        </table>
    </div>
    @include('partials.pagination', ['paginate' => $articles])
@endsection