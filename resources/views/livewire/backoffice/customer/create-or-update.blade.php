<div>
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
                <h4 class="sub-title">{{$edit? 'Editar' : 'Nueva'}} Cliente</h4>
                <div class="col-md-12">
                    <form class="form-horizontal" wire:submit.prevent="save" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><strong>Imagen</strong></label>
                                    <input wire:model.lazy="image" type="file" class="form-control form-control-round">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><strong>Descripción</strong></label>
                                    <input wire:model.lazy="description" type="text"
                                           class="form-control form-control-round"
                                           placeholder="Escriba el nombre del cliente" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><strong>Url</strong></label>
                                    <input wire:model.lazy="url" type="url" class="form-control form-control-round"
                                           placeholder="Escriba la url del cliente" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label for="show"><strong>Show</strong></label>
                                        <input wire:model.lazy="show" type="checkbox" id="show"
                                               class="form-control form-control-round" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <button wire:click="limpiar" class="btn btn-round btn-grd-info m-r-15"><i
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

</div>
