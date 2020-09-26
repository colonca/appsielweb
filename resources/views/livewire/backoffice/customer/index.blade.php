<div>
    <div>
        @php($url = ['Customer'=>route('customer.index')])

        <livewire:backoffice.breadcrumbs title="Customer" :urls="$url" description="Gestiona los clientes."/>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Listado de Clientes</h5>
                        <span>use class <code>table-hover</code> inside table element</span>
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
                                    <th>Descripción</th>
                                    <th>Imagen</th>
                                    <th>Url</th>
                                    <th>Show</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customers as $item)
                                    <tr>
                                        <th>{{$item->description}}</th>
                                        <td><a target="_blank" href="{{asset('../storage/app/docs/customer/'.$item->image)}}">{{$item->image}}</a></td>
                                        <td>{{$item->url}}</td>
                                        <td>{{$item->show == 1 ? 'SI' : 'NO'}}</td>
                                        <td>
                                            <button wire:click="edit({{$item->id}})" class="btn btn-primary btn-outline-primary btn-icon waves-effect" data-toggle="tooltip" data-placement="top" title data-original-title="Editar Categoría"><i class="ti-pencil" style="margin-left: 5px"></i></button>
                                            <button wire:click="delete({{$item->id}})" class="btn btn-danger btn-outline-danger btn-icon waves-effect" data-toggle="tooltip" data-placement="top" title data-original-title="Editar Categoría"><i class="ti-trash" style="margin-left: 5px"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                                {{$customers->links()}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <livewire:backoffice.customer.create-or-update/>
            </div>
        </div>

    </div>

</div>
