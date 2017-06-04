<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Dinia">

    <title>{{$title}}</title>
    <link href="{{ asset('css/bootstrap.css') }}"  rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet"  type="text/css"/>
    <link href="{{ asset('css/style.css') }}"  rel="stylesheet" type="text/css"/>
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.cookie.js') }}" type="text/javascript" ></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="SHORTCUT ICON" href="{{ asset('/logo.png') }}" type="image/png">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
            }
        });
        var backgroundList = <?=json_encode($backgroundList)?>;
    </script>

