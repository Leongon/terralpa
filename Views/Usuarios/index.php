<?php
headerAdmin($data);
?>

<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="card-box mb-30">
                <div class="pb-20 ">
                    <div class="container p-2">
                        <button id="btn-modal" class="btn btn-dark" @click="btn_modal('Modal_usuario')">Ingresar
                            Nuevo usuario</button>
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
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Contraseña</th>
                                <th>rol</th>
                                <th>Firma</th>
                                <th class="datatable-nosort">estado</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-productos" v-for="(ListUsuario , index ) in ListUsuarios">
                            <tr>
                                <th scope="row">{{index +1}}</th>
                                <td>
                                    <span>{{ListUsuario.id_usuario}}</span>
                                    <input type="hidden" class="form-control" v-model="ListUsuario.id_usuario"
                                        v-show="ListUsuario.show">
                                </td>
                                <td>
                                    <span v-show="!ListUsuario.show">{{ListUsuario.nombre}}</span>
                                    <input type="text" class="form-control" v-model="ListUsuario.nombre"
                                        v-show="ListUsuario.show">
                                </td>
                                <td>
                                    <span v-show="!ListUsuario.show">{{ListUsuario.nombre_rol}}</span>
                                    <input type="text" class="form-control" v-model="ListUsuario.nombre_rol"
                                        v-show="ListUsuario.show">
                                </td>
                                <td>
                                    <span v-show="!ListUsuario.show">{{ListUsuario.password}}</span>
                                    <input type="text" class="form-control" v-model="ListUsuario.password"
                                        v-show="ListUsuario.show">
                                </td>
                                <td>
                                    <input v-show="ListUsuario.show" class=" ng-hide" id="input-file-id" type="file"
                                        accept="image/*" @change="renderIMgBase64($event)" />
                                    <img v-show="!ListUsuario.show" :src="ListUsuario.firma" alt="" height="100"
                                        width="100" srcset="">
                                </td>
                                <td>
                                    <span v-show="!ListUsuario.show" v-if="ListUsuario.is_activo=='1'" class="bg-success p-3 text-light">Activo</span>

                                    <span v-show="!ListUsuario.show" v-else class="bg-danger p-3 text-light">Desactivado</span>

                                    <button v-show="ListUsuario.show" v-if="ListUsuario.is_activo=='1'"  class="btn btn-success" @click="Update_estado(ListUsuario,ListUsuario.id_usuario,0)"> <span  >Activo</span></button>

                                    <button v-show="ListUsuario.show" v-else class="btn btn-danger" @click="Update_estado(ListUsuario,ListUsuario.id_usuario,1)" > <span >Desactivado</span></button>

                                </td>
                                <td>
                                    <button v-show="!ListUsuario.show" class="btn btn-success"
                                        @click="editarPerson(ListUsuario,index)">edit</button>
                                    <button v-show="ListUsuario.show " class="btn btn-success"
                                        @click="updatePerson(ListUsuario,index)">Guardar</button>
                                    <button v-show="ListUsuario.show " class="btn btn-dark"
                                        @click="cancelarPerson(ListUsuario,index)">cancel</button>
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
    <div class="modal fade" id="Modal_usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <form class="form-productos-Save">
                        <div class="form-group">
                            <label for="codigo">DNI</label>
                            <input type="text" class=" form-control codigo" id="codigo" name="codigo"
                                v-model="id_usuario" aria-describedby="emailHelp" placeholder="ingrese codigo">
                        </div>
                        <div class="form-group">
                            <label for="Nombre">Nombre</label>
                            <input type="text" class=" form-control nombre" id="nombre" name="nombre" v-model="nombre"
                                aria-describedby="emailHelp" placeholder="ingrese Nombre">
                        </div>
                        <div class="form-group">
                            <label for="rol">Rol</label>
                            <v-select class="text-dark" :options="listrol" label="nombre_rol" :reduce="id=>id.id_rol"
                                v-model="id_rol" v-model="lblrol"></v-select>
                        </div>

                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" class=" form-control Email " id="Email" name="Email" v-model="email"
                                aria-describedby="emailHelp" placeholder="ingrese Email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Contraseña</label>
                            <input type="password" class=" form-control pwd " id="pwd" name="pwd" v-model="password"
                                aria-describedby="emailHelp" placeholder="ingrese Contraseña">
                        </div>

                        <div class="form-group">
                            <label for="cantidad"> imagen producto</label>
                            <input class="form-control form-control-sm ng-hide" id="input-file-id" type="file"
                                accept="image/*" @change="renderIMgBase64($event)" />
                        </div>
                </div>

                <img :src="img" id="previewImage">


                <button type="button" class="btn btn-primary btn_guardar" @click='saveproducto()'>Guardar</button>
                </form>
            </div>

        </div>
    </div>
</div>
</div>

<!-- Modal Fin -->
<?php
footerAdmin($data);
?>