<!-- Модальное Окно  -->
<div id="overlay">
    <div class="popup">
        <h2>Подписаться на новостную рассылку:</h2>
        {!! Form::open(['action' => 'UserController@rosinger']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Введите имя:') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => "Евгений"]) !!}

            </div>

            <div class="form-group">
                {!! Form::label('email', 'Введите свой e-mail:') !!}
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => "example@ex.com"]) !!}

            </div>
            <div class="form-group">
                {!! Form::submit('Подписатся!', ['class' => 'btn btn-primary form-control']) !!}
            </div>
        {!! Form::close() !!}
        @include('errors.list')
        <button class="close" title="Закрыть" onclick="$('#overlay').css('display','none')"></button>
    </div>
</div>