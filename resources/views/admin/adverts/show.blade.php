@extends('admin.app')
@section('content')

    <h1 class="page-header">Статьи</h1>
    @include('admin.partials.flash')
    <div class=bs-example data-example-id=striped-table>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Заголовок</th>
                <th class="tableCenter">Объявление</th>
                <th class="tableCenter">Цена</th>
                <th class="tableCenter">Левый блок:</th>
                <th class="tableCenter">Правый блок:</th>
                <th class="tableCenter">Действия</th>
            </tr>
            </thead>
    @foreach($adverts as $advert)
            <tbody>
                <tr>
                    <td><strong>{{$advert->id}}</strong></td>
                    <td><strong>{{$advert->title}}</strong></td>
                    <td align="center"><strong>{{$advert->content}}</strong></td>
                    <td align="center"><strong>{{$advert->price}}</strong></td>
                    <td align="center"><strong><?php $res = ( $advert->leftsidebar == 'true') ? 'Да' : 'Нет'; echo $res; ?></strong></td>
                    <td align="center"><strong><?php $res2 = ( $advert->rightsidebar == 'true') ? 'Да' : 'Нет'; echo $res2; ?></strong></td>
                    <td align="center">
                        <a href="{{asset('admin_panel/adverts')}}/{{$advert->id}}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a href="{{asset('admin_panel/adverts')}}/{{$advert->id}}/delete" onclick="return confirmDelete('рекламу')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                    </td>
                </tr>
            </tbody>
    @endforeach
        </table>
    </div>
    @include('partials.pagination', ['paginate' => $adverts])
@endsection