@extends('backoffice.layouts.admin')
@section('content')
    @php($url = ['Post'=>route('post.index')])
    <livewire:backoffice.breadcrumbs title="Post" :urls="$url" description="Gestiona los Post pertenecientes a una categoría."/>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Listado de Posts</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><i class="fa fa-window-maximize full-card"></i></li>
                            <li><i class="fa fa-minus minimize-card"></i></li>
                            <li><i class="fa fa-refresh reload-card"></i></li>
                            <li><a href="{{route('post.create')}}" data-toggle="tooltip" data-placement="top" title data-original-title="Agregar Nuevo Post"><i class="fa fa-plus-circle"></i></a></li>
                            <li><i class="fa fa-times close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block table-border-style">
                    <div class="table-responsive">
                        <table id="tabla" class="table table-hover">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Categoría</th>
                                <th>Estado</th>
                                <th>Archivo</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->category->name}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>{{$item->file}}</td>
                                    <td>{{$item->body}}</td>
                                    <td>{{$item->except}}</td>
                                    <td>--</td>
                                    <td>
                                        <button class="btn btn-primary btn-outline-primary btn-icon waves-effect" data-toggle="tooltip" data-placement="top" title data-original-title="Editar Post"><i class="ti-pencil" style="margin-left: 5px"></i></button>
                                        <button class="btn btn-danger btn-outline-primary btn-icon waves-effect" data-toggle="tooltip" data-placement="top" title data-original-title="Eliminar Post"><i class="ti-pencil" style="margin-left: 5px"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
