<?php
headerAdmin($data);
?>


    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="pd-ltr-20 xs-pd-20-10">
                    <div class="min-height-200px">
                        <div class="card-box mb-30">
                            <div class="pb-20 ">
                                <div class="container p-2">
                                    <button type="button"  class="btn btn-dark" @click="btnmdlinsertcategoria()">
                                        Ingresar
                                        Nuevo producto</button>
                                </div>
                            </div>
                        </div>
                        <!-- Simple Datatable start -->
                        <div class="card-box mb-30">
                            <div class="pb-20 ">
                                <table class="data-table table stripe hover nowrap">
                                    <thead>
                                        <tr>
                                            <th class="table-plus datatable-nosort">#</th>

                                            <th>Descripcion</th>


                                            <th class="datatable-nosort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tablesdata" v-for="Listcategoria in Listcategorias">

                                        <tr>
                                            <th scope="row">{{Listcategoria.idcategoria}}</th>
                                            <td>{{Listcategoria.nombreCategoria}}</td>

                                            <td>
                                                <button type="button" class="btn btn-success"
                                                    @click='btnMdl(Listcategoria.idcategoria)'>agregar</button>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Simple Datatable End -->

                        </div>

                    </div>
                </div>
                <!-- welcome modal start -->

                <!-- Modal save productos -->
                <div class="modal fade" id="modalinsertCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title titulo" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form-Save">
                                    <div class="form-group">
                                        <label for="codigo">Nombre Categoría</label>
                                        <input type="text" class="form-control txtObservaciones" id="txtObservaciones" v-model="nomCategoria"
                                            name="txtObservaciones"></textarea>
                                    </div>

                                    
                                    <button type="button" @click="guardarcategoria(nomCategoria)" class="btn btn-primary">Guardar</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Modal Fin -->
                <!-- Modal save observaciones -->
                <div class="modal fade" id="Modal_pdf_observaciones" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title titulo" id="exampleModalLabel">Observaciones</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 listaObservaciones"
                                        v-for="listaObservacion in listaObservaciones">

                                        <div class="form-check">
                                            <input type="checkbox" :value="listaObservacion.codigo"
                                                class="form-check-input chkobservacion" :id="listaObservacion.codigo"
                                                v-model="ChkObeservaciones"   @click="guardarchk(listaObservacion.codigo)"   />
                                            <label class="form-check-label"
                                                :for="listaObservacion.codigo">{{listaObservacion.observaciones}}</label>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Fin -->
            </div>
        </div>
    </div>

    <?php
    footerAdmin($data);
    ?>