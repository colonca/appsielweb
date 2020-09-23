<div>
    @php($url = ['Inicio'=>url('/home')])
    <livewire:backoffice.breadcrumbs title="Categories" :urls="$url" description="Gestiona las categorías del blog"/>

    <livewire:backoffice.categories.create-or-update/>
    <div class="card">
        <div class="card-header">
            <h5>Listado de Categorías</h5>
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
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $item)
                        <tr>
                            <th>{{$item->id}}</th>
                            <td>{{$item->name}}</td>
                            <td>--</td>
                            <td>
                                <button wire:click="edit({{$item->id}})" class="btn btn-primary btn-outline-primary btn-icon waves-effect" data-toggle="tooltip" data-placement="top" title data-original-title="Editar Categoría""><i class="ti-pencil" style="margin-left: 5px"></i></button>
                                <button wire:click="delete({{$item->id}})" class="btn btn-danger btn-outline-primary btn-icon waves-effect" data-toggle="tooltip" data-placement="top" title data-original-title="Editar Categoría""><i class="ti-pencil" style="margin-left: 5px"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    {{$categories->links()}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {

        });
    </script>
@endsection
