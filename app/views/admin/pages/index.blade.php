@extends('../../layouts/admin')
@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="/admin">Главная</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Страницы</a></li>
    </ul>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                        <tr>
                            <th>Наименование</th>
                            <th>Статус</th>
                            <th>Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach(app('menu_for_admin') as $m)
                    <tr>
                        <td>{{ $m->nameru }}</td>
                        <td class="center">
                            @if($m->publish != '0')
                            <span class="label label-success">
                                Опубликован
                            </span>
                            @else
                            <span class="label label-important">Не опубликован</span>
                            @endif
                        </td>
                        <td class="center">
                            <a class="btn btn-info" href="{{ URL::to('admin/pages/edit/' . $m->id) }}">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop