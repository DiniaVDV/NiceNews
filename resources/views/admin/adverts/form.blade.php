<div class="form-group">
    {!! Form::label('title', 'Заголовок:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::label('price', 'Цена:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::label('content', 'Объявление:') !!}
    {!! Form::text('content', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::label('discount', 'Номер купона:') !!}
    {!! Form::text('discount', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::label('name_company', 'Название компании:') !!}
    {!! Form::text('name_company', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::label('site_company', 'Сайт компании:') !!}
    {!! Form::text('site_company', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::label('position', 'Позиция в блоке:') !!}
    {!! Form::text('position', null, ['class' => 'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::label('leftsidebar', 'Разместить в левом блоке:') !!}
    {!! Form::select('leftsidebar', ['false' => 'Нет', 'true' => 'Да'],  null, ['id' => 'leftsidebar', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('rightsidebar', 'Разместить в правом блоке:') !!}
    {!! Form::select('rightsidebar', ['false' => 'Нет', 'true' => 'Да'],  null, ['id' => 'rightsidebar', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>