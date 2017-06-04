<div class="container finder">
    <div class="row">
        {!! Form::open(['action' => 'ArticlesController@find']) !!}
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('datepicker1', 'Дата:') !!}
                {!! Form::text('datepicker1', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('tag_list', 'Тег:') !!}
                {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('category_id', 'Категория:') !!}
                {!! Form::select('category_id[]', $categoriesList, null, ['id' => 'category_id', 'class' => 'form-control', 'multiple']) !!}
            </div>
        </div>
        <div class="col-md-3 find">
            <div class="form-group">
                <button type="submit" class="btn btn-default" class="form-control" >Submit</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>