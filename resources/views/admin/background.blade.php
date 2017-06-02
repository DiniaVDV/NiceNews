@extends('admin.app')
@section('content')
    <form style="margin-top: 115px">
        <div class="form-group">
            <label for="body_background">Выберите фон сайта</label>
            <p><input type="text" id="body_background" class="form-control" style="width: 20%"></p>
        </div>
        <div class="form-group">
            <label for="head_background">Выберите фон шапки</label>
            <p><input type="text" id="head_background" class="form-control" style="width: 20%"></p>
        </div>
        <input type="submit" class="btn btn-success" value="Ok"/>
    </form>
    <script src="{{ asset('/js/color-picker.min.js') }}"></script>
    <script>

        var picker = new CP(document.querySelector('#body_background'));
        var picker2 = new CP(document.querySelector('#head_background'));
        picker.on("change", function(color) {
            this.target.value = '#' + color;
        });
        picker2.on("change", function(color) {
            this.target.value = '#' + color;
        });
    </script>
@endsection