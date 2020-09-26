<div>
    <div>
        <div class="card">
            <div class="card-header">
                <div class="card-header-left">
                    <h5>Gestión</h5>
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
                <h4 class="sub-title">{{$edit? 'Editar' : 'Nuevo'}} Miembro</h4>
                <div class="col-md-12">
                    <form class="form-horizontal" wire:submit.prevent="save" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><strong>Foto</strong></label>
                                    <input wire:model.lazy="photo" type="file" class="form-control form-control-round">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><strong>Nombre</strong></label>
                                    <input wire:model.lazy="name" type="text"
                                           class="form-control form-control-round"
                                           placeholder="Escriba el nombre del miembro" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><strong>Frase</strong></label>
                                    <input wire:model.lazy="phrase" type="text" class="form-control form-control-round"
                                           placeholder="Escriba una frase caracteristica" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><strong>Profesión</strong></label>
                                    <input wire:model.lazy="profession" type="text" placeholder="Escriba la profesión"
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
