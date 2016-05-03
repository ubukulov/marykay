@extends('../../layouts/admin')
@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="/admin">Главная</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="#">Редактировать</a>
        </li>
    </ul>
    <h1>Редактировать - {{ $page->nameru }}</h1>
    {{ Form::model(array('route' => array('admin/page/update', $page->id), 'method' => 'put')) }}
        {{ Form::label('nameru', 'Названия') }}
        {{ Form::text('nameru') }}
        {{ $errors->first('nameru', '<p class="error">:message</p>') }}

        {{ Form::label('position', 'Позиция') }}
        {{ Form::text('position') }}
        {{ $errors->first('position', '<p class="error">:message</p>') }}

        {{ Form::label('publish', 'Состояние') }}
        {{ Form::select('publish', ['1' => '1', '0' => '0']) }}
        {{ $errors->first('publish', '<p class="error">:message</p>') }}

        {{ Form::label('alias', 'Алиас') }}
        {{ Form::text('alias') }}
        {{ $errors->first('alias', '<p class="error">:message</p>') }}

        {{ Form::label('body', 'Текст') }}
        {{ Form::textarea('body') }}
        {{ $errors->first('body', '<p class="error">:message</p>') }}

        {{ Form::submit('Сохранит') }}
    {{ Form::close() }}
@stop