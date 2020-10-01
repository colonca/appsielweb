<div>
    <div>
        @php($url = ['Team'=>route('team.index')])

        <livewire:backoffice.breadcrumbs title="Team" :urls="$url" description="Gestiona el equipo de trabajo."/>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Equipo de Trabajo</h5>
                        {{--                        <span>use class <code>table-hover</code> inside table element</span>--}}
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
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table id="tabla" class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Profesión</th>
                                    <th>Frase</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($teams as $item)
                                    <tr>
                                        <td><a target="_blank" href="{{asset('../storage/app/docs/team/'.$item->photo)}}"><img src="{{asset('../storage/app/docs/team/'.$item->photo)}}" alt="prod img" class="img-fluid" width="40px"></a></td>
                                        <th>{{$item->name}}</th>
                                        <td>{{$item->profession}}</td>
                                        <td>{{$item->phrase}}</td>
                                        <td>
                                            <button wire:click="edit({{$item->id}})" class="btn btn-primary btn-outline-primary btn-icon waves-effect" data-toggle="tooltip" data-placement="top" title data-original-title="Editar"><i class="ti-pencil" style="margin-left: 5px"></i></button>
                                            <button wire:click="delete({{$item->id}})" class="btn btn-danger btn-outline-danger btn-icon waves-effect" data-toggle="tooltip" data-placement="top" title data-original-title="Eliminar"><i class="ti-trash" style="margin-left: 5px"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                                {{$teams->links()}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <livewire:backoffice.team.create-or-update/>
            </div>
        </div>
    </div>
</div>

