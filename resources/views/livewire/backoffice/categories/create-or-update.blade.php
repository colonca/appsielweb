<div>
    <div class="card">
        <div class="card-header">
            <div class="card-header-left">
                <h5>Gradient</h5>
            </div>
            <div class="card-header-right">
                <ul class="list-unstyled card-option" style="width: 180px;">
                    <li><i class="fa fa-chevron-left fa-chevron-right"></i></li>
                    <li><i class="fa fa-window-maximize full-card"></i></li>
                    <li><i class="fa minimize-card fa-minus"></i></li>
                    <li><i class="fa fa-refresh reload-card"></i></li>
                    <li><i class="fa fa-times close-card"></i></li>
                </ul>
            </div>
        </div>
        <div class="card-block" style="">
            <h4 class="sub-title">{{$edit? 'Editar' : 'Nueva'}} Categoría</h4>
            <div class="col-md-12">
                <form class="form-horizontal" wire:submit.prevent="save">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Nombre</strong></label>
                                <input wire:model.lazy="name" type="text" class="form-control form-control-round" placeholder="Escriba el nombre de la categoría" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>Descripción</strong></label>
                                <input wire:model.lazy="description" type="text" class="form-control form-control-round" placeholder="Descripción de la categoría" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <button wire:click="limpiar" class="btn btn-round btn-grd-info m-r-15"><i class="icofont icofont-check-circled"></i>Limpiar</button>
                        <button type="submit" class="btn btn-round btn-grd-success"><i class="icofont icofont-check-circled"></i>Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
