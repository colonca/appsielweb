@extends('backoffice.layouts.admin')
@section('content')
    @php($url = ['Post'=>route('post.index'),'Editar'=>''])
    <livewire:backoffice.breadcrumbs title="Post" :urls="$url"
                                     description="Gestiona los Post pertenecientes a una categoría."/>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Modificar Datos del Post: {{$post->name}}</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><i class="fa fa-window-maximize full-card"></i></li>
                            <li><i class="fa fa-minus minimize-card"></i></li>
                            <li><i class="fa fa-refresh reload-card"></i></li>
                            <li><i class="fa fa-times close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <form class="form-horizontal" method="POST" action="{{route('post.update',$post->id)}}"
                          enctype="multipart/form-data">
                        @csrf
                        <input name="_method" type="hidden" value="PUT"/>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label><strong>Nombre</strong></label>
                                    <input type="text" class="form-control form-control-round" name="name"
                                           placeholder="Escriba el nombre del post" value="{{$post->name}}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label><strong>Categoria</strong></label>
                                    <select class="form-control form-control-round" name="category_id" required>
                                        <option value="">--Seleccione una Opcción--</option>
                                        @foreach($categories as $key => $value)
                                            @if($post->category_id == $key)
                                                <option value="{{$key}}" selected>{{$value}}</option>
                                            @else
                                                <option value="{{$key}}">{{$value}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p><strong>Estado</strong></p>
                                    @if($post->status == 'PUBLISHED')
                                    <input type="radio" name="status" id="PUBLISHED" value="PUBLISHED" checked>
                                    <label for="PUBLISHED">PUBLICAR</label>
                                    <input type="radio" name="status" id="DRAFT" value="DRAFT">
                                    <label for="DRAFT">DRAFT</label>
                                    @else
                                        <input type="radio" name="status" id="PUBLISHED" value="PUBLISHED">
                                        <label for="PUBLISHED">PUBLICAR</label>
                                        <input type="radio" name="status" id="DRAFT" value="DRAFT" checked>
                                        <label for="DRAFT">DRAFT</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label><strong>Imagen</strong></label>
                                    <input type="file" class="form-control form-control-round" name="file">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label><strong>Descripción</strong></label>
                                    <input type="text" class="form-control form-control-round" name="except" value="{{$post->except}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><strong>Body</strong></label>
                                    <textarea class="form-control" name="body" rows="5" placeholder="Cuerpo del post"
                                              required>{{$post->body}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <a href="{{route('post.index')}}" class="btn btn-round btn-grd-danger m-r-15"><i
                                    class="icofont icofont-check-circled"></i>Cancelar
                            </a>
                            <button type="reset" class="btn btn-round btn-grd-info m-r-15"><i
                                    class="icofont icofont-check-circled"></i>Limpiar
                            </button>
                            <button type="submit" class="btn btn-round btn-grd-success"><i
                                    class="icofont icofont-check-circled"></i>Guardar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
