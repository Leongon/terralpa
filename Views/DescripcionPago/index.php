<?php
headerAdmin($data);
?>

<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="card-box mb-30">
                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-primary" type="button" @click="btnMdl('modal1')">
                        Agregar
                        <i class="icon-copy fa fa-plus-circle" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="card-box mb-30">
                <table class="table table-dark table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody v-for="(ListaDes,index) in ListarD">
                        <tr>
                            <th scope="row">{{index+1}}</th>
                            <td>
                                <span v-show="!ListaDes.show">{{ListaDes.N_descripcion}}</span>
                                <input type="text" class="form-control" v-model="ListaDes.N_descripcion"
                                        v-show="ListaDes.show">
                            </td>
                            <td class="d-flex gap-2">
                                <button v-show="!ListaDes.show" type="button" class="btn btn-success" @click="activeEdit(ListaDes)"><i class="icon-copy fa fa-pencil" aria-hidden="true"></i></button>
                                <button v-show="ListaDes.show" type="button" class="btn btn-warning" @click="DeletD(ListaDes.idDescripcion_pago)"><i class="icon-copy fa fa-trash" aria-hidden="true"></i></button>
                                <button v-show="ListaDes.show" type="button" class="btn btn-primary" @click="UpdateD(ListaDes)"><i class="icon-copy fi-save"></i></i></button>
                                <button v-show="ListaDes.show" type="button" class="btn btn-danger" @click="desactiveEdit(ListaDes)">
                                    X
                                </button>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- MODAL1 -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>

                <button type="button" class="close btn btn-danger btn-close" data-dismiss="modal"
                    aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="DescricionP" class="form-label">Descripción del pago</label>
                    <input type="text" class="form-control" id="DescricionP" v-model="DescricionP">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" @click="saveD()">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?php
footerAdmin($data);
?>