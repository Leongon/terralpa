<?php
headerAdmin($data);
?>

<body>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="pd-ltr-20 xs-pd-20-10">
                    <div class="min-height-200px">
                        <div class="card-box mb-30">
                            <div class="pb-20 ">
                                <div class="container p-2">
                                    <button id="btn-modal" class="btn btn-dark" @click="btnMoodalProducto()">Ingresar
                                        Nuevo producto
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Simple Datatable start -->
                        <div class="card-box mb-30 p-1">

                            <div class="row mb-3 ">
                                <div class="col-6">
                                    <label for="dni-cliente" class="form-label fw-bold fw-bolder">Precios para :</label>
                                    <select class="form-control form-control-sm w-100" id="a-select"
                                        style="width: 100%;" v-model="selecLugares"
                                        @change="onChangelugar(selecLugares)">

                                        <option v-for="lugar in lugares" v-bind:value="lugar.id_lugar">
                                            {{ lugar.descripcion}}
                                        </option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="buscar" class="form-label fw-bold fw-bolder">Precios para :</label>
                                    <input class="form-control form-control-sm" v-model="searchterm" type="text"
                                        placeholder=".buscar" aria-label=".form-control-sm example">

                                </div>
                            </div>
                            <table class="table table table-striped">
                                <thead>
                                    <tr>

                                        <th scope="col"># </th>
                                        <th scope="col">Código</th>
                                        <th scope="col">Nombre del producto</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">peso</th>
                                        <th scope="col">Undad de Medida</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr v-for="(listproducto,index) in filteredList">

                                        <td>
                                            <img v-show="!listproducto.show" :src="listproducto.img" alt="" width="200" height="200">
                                            <input v-show="listproducto.show" class="form-control form-control-sm ng-hide"  id="input-file-id" type="file" accept="image/*" @change="renderIMgBase64($event)"  />
                                        </td>

                                        <td>
                                            <span v-show="!listproducto.show">{{listproducto.codigo}}</span>
                                            <input type="text" class="form-control"
                                                v-model="listproducto.codigo_producto" v-show="listproducto.show">
                                        </td>

                                        <td>
                                            <span v-show="!listproducto.show">{{listproducto.descripcion}}</span>
                                            <input type="text" class="form-control" v-model="listproducto.descripcion"
                                                v-show="listproducto.show">
                                        </td>

                                        <td>
                                            <span v-show="!listproducto.show">{{listproducto.precio}}</span>
                                            <input type="text" class="form-control" v-model="listproducto.precio"
                                                v-show="listproducto.show">
                                        </td>

                                        <td>
                                            <span v-show="!listproducto.show">{{listproducto.cantidad}}</span>
                                            <input type="text" class="form-control" v-model="listproducto.cantidad"
                                                v-show="listproducto.show">
                                        </td>

                                        <td>
                                            <span v-show="!listproducto.show">{{listproducto.peso}}</span>
                                            <input type="text" class="form-control" v-model="listproducto.peso"
                                                v-show="listproducto.show">

                                        </td>

                                        <td>
                                            <span v-show="!listproducto.show">{{listproducto.Unid}}</span>
                                            <input type="text" class="form-control" v-model="listproducto.Unid"
                                                v-show="listproducto.show">
                                        </td>



                                        <td>
                                            <button v-show="!listproducto.show" class="btn btn-success"
                                                @click="editarPerson(listproducto,index)">edit</button>
                                            <button v-show="listproducto.show " class="btn btn-success"
                                                @click="guardarPerson(listproducto,index)">Guardar</button>
                                            <button v-show="listproducto.show " class="btn btn-dark"
                                                @click="cancelarPerson(listproducto,index)">cancel</button>
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
            <div class="modal fade" id="Modal_productos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                    <label for="codigo">Codigo</label>
                                    <input type="text" class=" form-control codigo" id="codigo" name="codigo" v-model='codigoProducto'
                                        aria-describedby="emailHelp" @input="B_producto(codigoProducto)" placeholder="ingrese codigo">
                                </div>
                                <div class="form-group"> 
                                    <label for="descripcion">Descripcion</label>
                                    <input type="text" class=" form-control descripcion" id="descripcion" v-model="descripcion"
                                        name="descripcion" aria-describedby="emailHelp"
                                        placeholder="ingrese Descripcion">
                                </div>
                                <div class="form-group">
                                    <label for="Unid">Unidad de Medida</label>
                                    <input type="text" class=" form-control  Unid" id="Unid" name=" Unid" v-model="Unid"
                                        aria-describedby="emailHelp" placeholder="ingrese Unidad de Medida">
                                </div>

                                <div class="form-group">
                                    <label for="peso">Peso</label>
                                    <input type="text" class=" form-control peso " id="peso" name="peso" v-model="peso"
                                        aria-describedby="emailHelp" placeholder="ingrese Peso">
                                </div>

                                <div class="form-group">
                                    <label for="cantidad">cantidad</label>
                                    <input type="text" class=" form-control cantidad" id="cantidad" name="cantidad" v-model="cantidad"
                                        aria-describedby="emailHelp" placeholder="ingrese cantidad">
                                </div>

                                <div class="form-group">
                                    <label for="cantidad">Precio</label>
                                    <input type="text" class=" form-control cantidad" id="cantidad" name="cantidad" v-model="precio"
                                        aria-describedby="emailHelp" placeholder="ingrese cantidad">
                                </div>
                              
                                <div class="form-group">
                                 <label for="cantidad"> imagen producto</label>
                                    <input class="form-control form-control-sm ng-hide"  id="input-file-id" type="file" accept="image/*" @change="renderIMgBase64($event)"  />
                                 </div>
                                </div>

                                <img :src="img" id="previewImage">

                                <button type="submit" class="btn btn-primary btn_guardar" @click='saveproducto()'>Guardar</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal Fin -->
            <!-- Modal save productos -->
            <div class="modal fade" id="Modal_precios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title titulo2" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-precio-Save">
                                <div class="form-group">
                                    <label for="rol">Lugar</label>

                                    <select class="form-control form-control-sm lugar" id="lugar" name="lugar"
                                        placeholder="Roles">

                                    </select>
                                </div>


                                <input type="hidden" class="cod" id="cod" name="cod">
                                <input type="hidden" class="idprecio" id="idprecio" name="idprecio">
                                <div class="form-group">
                                    <label for="Precio">Precio</label>
                                    <input type="text" class=" form-control Precio " id="Precio" name="Precio"
                                        aria-describedby="emailHelp" placeholder="ingrese Precio">
                                </div>

                                <button type="submit" class="btn btn-primary btn_guardar_precio" >Guardar</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Fin -->
    <?php
    footerAdmin($data);
    ?>