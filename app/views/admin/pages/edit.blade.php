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
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Страница - {{ $page->nameru }}</h2>
            </div>
            <div class="box-content">
                {{ Form::model($page, ['route' => ['admin/page/update', $page->id], 'method' => 'post']) }}
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">Названия </label>
                            <div class="controls">
                                <input type="text" class="span6" name="nameru" value="{{ $page->nameru }}"/>
                                {{ $errors->first('nameru', '<p class="error">:message</p>') }}
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Позиция </label>
                            <div class="controls">
                                <input type="text" class="span6" name="position" value="{{ $page->position }}"/>
                                {{ $errors->first('position', '<p class="error">:message</p>') }}
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Опубликован </label>
                            <div class="controls">
                                <select class="span6" name="publish">
                                    @if($page->publish == 1)
                                    <option value="1" selected>1</option>
                                    <option value="0">0</option>
                                    @else
                                    <option value="1">1</option>
                                    <option value="0" selected>0</option>
                                    @endif
                                </select>
                                {{ $errors->first('publish', '<p class="error">:message</p>') }}
                            </div>
                        </div>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Текст</label>
                            <div class="controls">
                                <textarea class="cleditor" id="textarea2" rows="3" name="body">
                                    {{ $page->body }}
                                </textarea>
                                {{ $errors->first('body', '<p class="error">:message</p>') }}
                            </div>
                        </div>
						<div class="control-group">
                            <label class="control-label">Алиас </label>
                            <div class="controls">
                                <input type="text" class="span6" name="alias" value="{{ $page->alias }}"/>
                                {{ $errors->first('alias', '<p class="error">:message</p>') }}
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Сохранить изменение</button>
                            <button type="reset" class="btn">Отменить изменение</button>
                        </div>
                    </fieldset>
                {{ Form::close() }}

            </div>
        </div><!--/span-->

    </div><!--/row-->
@stop