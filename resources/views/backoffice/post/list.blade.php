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
                                <th>Body</th>
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
                                    <td><a target="_blank" href="{{asset('docs/post/'.$item->file)}}">{{$item->file}}</a></td>
                                    <td>{{$item->body}}</td>
                                    <td>{{$item->except}}</td>
                                    <td>
                                        <a href="{{route('post.edit',$item->id)}}" class="btn btn-primary btn-outline-primary btn-icon waves-effect" data-toggle="tooltip" data-placement="top" title data-original-title="Editar Post"><i class="ti-pencil" style="margin-left: 5px"></i></a>
                                        <a href="#" onclick="eliminar(event,{{$item->id}})" class="btn btn-danger btn-outline-danger btn-icon waves-effect" data-toggle="tooltip" data-placement="top" title data-original-title="Eliminar Post"><i class="ti-trash" style="margin-left: 5px"></i></a>
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
@section('script')
    <script src=""></script>
    <script type="text/javascript">
        function eliminar(event,id){
            event.preventDefault();
            Swal.fire({
                title: 'Estas seguro(a)?',
                text: "no podras revertilo!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminarlo!',
                cancelButtonText:'cancelar'
            }).then((result) => {
                if (result.value) {
                    let url = 'post/'+id;
                    axios.delete(url).then(result => {
                        let data = result.data;
                        if(data.status == 'ok'){
                            Swal.fire(
                                'Eliminado!',
                                data.message,
                                'success'
                            ).then(result => {
                                location.reload();
                            });
                        }else{
                            Swal.fire(
                                'Error!',
                                data.message,
                                'danger'
                            ).then(result => {
                                location.reload();
                            });
                        }
                    });
                }
            })
        }
    </script>
@endsection

