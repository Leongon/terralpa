<?php
headerAdmin($data);
?>


<div class="main-container">
  <div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
      
        <form action="">
          <div class="card p-2 rounded">
       
            <div class="card-body bg-secondary rounded">
            <h5 class="text-center">DATOS</h5>
                <div class="row">
                  <div class="col-xl-12">
                    <label for="id-lugar" class="form-label fw-bold fw-bolder">Lugar de cotización:</label>
                    <v-select class="text-dark" :options="lugares" :reduce="id=> id.id_lugar" id="id-lugar"
                      label="descripcion" v-model="selecLugares"></v-select>
                  </div>

                  <div class="col-xl-4 my-1">
                    <label for="dni_cliente" class="form-label fw-bold fw-bolder">DNI / RUC:</label>

                    <div class="input-group ">


                      <input type="text" class="form-control form-control-sm dni-cliente" placeholder="DNI/RUC"
                        aria-label="btn-Buscarproforma" id="dni_cliente" name="dni_cliente"
                        aria-describedby="btn-Buscarproforma" placeholder="Dni / Ruc" v-model="dni">

                      <button class="btn btn-success btn-Buscarproforma btn-sm" type="button" id="btn-Buscarproforma"
                        name="btn-Buscarproforma" @click="BPAcliente(dni)">
                        <i class="icon-copy bi bi-search"></i> </button>
                    </div>
                  </div>

                  <div class="col-xl-4  mb-1">

                    <label for="nombre" class="form-label fw-bold fw-bolder">Nombre / Razón social:</label>

                    <input type="text" class="form-control nombre form-control-sm" id="nombre" name="nombre"
                      v-model="nombres" aria-describedby="emailHelp" placeholder="Nombre / Razón social">
                  </div>

                  <div class="col-xl-4 mb-1">

                    <label for="telefono" class="form-label fw-bold fw-bolder">Nombre / Razón social:</label>
                    <input type="text" class="form-control telefono form-control-sm" id="telefono" name="telefono"
                      v-model="telefono" aria-describedby="emailHelp" placeholder="Telefono">
                  </div>

                  <div class="col-xl-4 mb-1">
                    <label for="departametos" class="form-label fw-bold fw-bolder">Departamento:</label>

                    <v-select class="text-dark" :options="departametos" id="departametos" :reduce="id=>id.id_ubigeo"
                      label="nombre_ubigeo" v-model="selecDepartamento"></v-select>



                  </div>

                  <div class="col-xl-4 mb-1">
                    <label for="provincias" class="form-label fw-bold fw-bolder">Provincia</label>

                    <v-select class="text-dark" :options="provincias" id="provincias" :reduce="id=>id.id_ubigeo"
                      label="nombre_ubigeo" v-model="selecProvincia"></v-select>



                  </div>

                  <div class="col-xl-4 mb-1">
                    <label for="distritos" class="form-label fw-bold fw-bolder">Distritos:</label>

                    <v-select class="text-dark" :options="distritos" :reduce="id=>id.id_ubigeo" label="nombre_ubigeo"
                      v-model="selecDistrito"></v-select>



                  </div>

                  <div class="col-xl-12 col-md-12">
                    <label for="direccion" class="form-label fw-bold fw-bolder">Dirección:</label>

                    <input type="text" class="form-control form-control-sm dni-cliente " id="direccion" name="direccion"
                      aria-describedby="emailHelp" placeholder="Dirección / Referencia" v-model="direccion">
                  </div>

                </div>


            </div>
           
            
            <div class="card-body bg-secondary mt-2 rounded">
            <h5 class="text-uppercase text-center">Productos /Servicios</h1>

                <div class="row">
                  <div class="col-xl-8 mb-3 ">
                    <label for="descripcion" class="form-label fw-bold fw-bolder">Productos /Servicios</label>

                    <v-select class="text-dark" :options="listarProductos" label="descripcion" id="descripcion"
                      v-model="productos"></v-select>

                  </div>
                  <div class=" col-xl-4 mb-3 ">
                    <label for="Cantidad" class="form-label fw-bold fw-bolder">Cantidad:</label>

                    <input type="number" class="form-control form-control-sm Cantidad" id="exampleInputEmail1"
                      aria-describedby="emailHelp" placeholder="Cantidad" id="Cantidad" v-model="cantidad_Productos">
                  </div>

                  <div class="col-xl-4 mb-3">
                    <button type="button" class="btn btn-success boton-agregar my-2 w-100 " id="boton-agregar"
                      name="boton-agregar" @click="agregarProducto(productos,cantidad_Productos)">
                      Agregar
                    </button>
                  </div>
                  <div class="col-xl-4 mb-3">
                    <button type="button" class="remove-all btn btn-success boton-limpiar my-2 w-100" id="boton-limpiar"
                      name="boton-limpiar" @click="btnLimpiarProdutos">Limpiar
                      Todo</button>
                  </div>

                  <div class="col-xl-4 mb-3">
                    <div class="alert alert-dark" role="alert">Precio Total: <span class="htmlPrecio"> S/
                        {{Number.parseFloat(TotalPrecio).toFixed(2)}} </span>
                    </div>
                  </div>

                  <div class="col-xl-12">
                    <div class="card ">
                      <ul class="list-group lista-tareas" v-for="(items,index) of productoAgregado">

                      <li class="list-group-item " v-for="item of items">

                        <div class="card bg-dark text-light  p-1">
                          <div class="row ">
                            <div class="col-md-3 col-lg-2">

                              <strong> {{index+1}}</strong>
                              <span> </span> <strong>Codigo:</strong> <span>{{item.codigo}}</span>
                            </div>
                            <div class="col-md-9 col-lg-9">
                              <strong>Producto:</strong> <span>{{item.descripcion}}</span>
                            </div>
                            <div class="col-lg-1 d-flex flex-row-reverse">
                              <input type="submit" class="btn btn-success" value="X"
                                @click="eliminarProducto(index,(item.cantidad_Producto*item.precio))" id="${tarea.id}">
                            </div>
                          </div>
                          <div class="row m-2 ">
                            <div class="col-md-12 col-lg-2 ">
                              <strong class="mb-3">Precio: S/ </strong> <span>{{item.precio}}</span>
                            </div>
                            <div class="col-md-12 col-lg-2">

                              <strong>Cantidad:</strong> <span>{{item.cantidad_Producto}} </span> <span>
                                {{item.und}}</span>
                              <span hidden></span>
                              <span hidden></span>
                            </div>
                            <div class="col-md-12 col-lg-2">
                              <div class="d-flex ">
                                <strong>Total:</strong> S/
                                {{Number.parseFloat(item.Total-item.Descuento).toFixed(2)}}<span>
                                </span>
                              </div>
                            </div>
                            <div class="col-md-6 col-lg-2 ">

                              <strong class="mb-3">Descuento: S/ </strong>

                            </div>
                            <div class="col-md-6 col-lg-4 ">
                              <input type="text" class="form-control form-control-sm input-tarea w-100"
                                :value="descuento=item.Descuento" @input="editar(index,$event)">
                            </div>
                          </div>
                        </div>

                      </li>

                    </ul>
                    </div>
                  </div>

                  <div class="col-xl-6 ">
                    <div class="form-group">
                      <label for="">Observaciones Para :</label>
                      <select class=" form-control selectCategoria" id="selectCategoria" name="selectCategoria"
                        v-model="selec_categoria" @change="onChangeCategoria(selec_categoria) " style="width: 100%">
                        <option v-for="listacategorias in listacategoria" v-bind:value="listacategorias.idcategoria">
                          {{ listacategorias.nombreCategoria}}
                        </option>
                      </select>
                    </div>
                  </div>

                  <div class="col-xl-6 ">
                    <div class="form-group">
                      <button type="button" class="btn btn-success btn_observaciones  " @click="btnMdlObs">mas
                        Observaciones</button>
                    </div>
                  </div>

                  <div class="col-xl-3 col-md-12 ">

                   
                      <label for="Pagos">Pago S/</label>
                      
                        <input type="number" class="form-control form-control-sm dni-cliente" id="direccion" name="direccion"
                          aria-describedby="emailHelp" placeholder="Pagos" id="Pagos" v-model="pago">

                      
                   
                  </div>
                
                  <div class="col-xl-3 col-md-12">
                    <div class="form-group">
                      <label for="">Descripcion</label>

                  
                        <v-select class="text-dark" :options="ListarD" :reduce="id=>id.N_descripcion"
                          label="N_descripcion" v-model="pagosObs">
                        </v-select>

                     
                    </div>
                  </div>
           
                  <div class="col-xl-3 col-md-12 ">
                    <div class="form-group">
                      <button type="button" class="btn btn-success btn_observaciones mt-md-0 "
                        @click="btnpago(pago,pagosObs)">Agregar</button>
                    </div>
                  </div>
            
                  <div class="col-xl-3 col-md-12 ">
                    <div class="alert alert-secondary" role="alert">
                      Queda : S/ {{(TotalPrecio-Totalpago).toFixed(2)}}
                    </div>
                  </div>


                  <div class="col-xl-12 col-md-12 ">
                    <ul class="list-group my-4">

                    </ul>
                    <ol class="list-group " v-for="(items,index) of montopago">
                      <li class="list-group-item d-flex justify-content-between align-items-start mb-3">

                        <div class="ms-2 me-auto">
                          <div class="fw-bold">Cuota Nro {{index+1}}</div>
                          Monto a pagar: S/ {{(items.Cuota).toFixed(2)}} {{items.observacionPago}}
                        </div>
                        <button class="btn badge bg-primary rounded-pill"
                          @click="btneliminarmontopagado(index,)">x</button>
                      </li>
                    </ol>
                  </div>
               
                </div>

                

            </div>
            
            
            <div class="row mt-5">
              
                  <div class="col text-center">
                    <button id="boton-agregar" type="button" class="btn btn-success boton-agregar"
                      @click="btnGuardarProductos() ">generar cotización
                    </button>
                  </div>
                  <div class="col text-center">
                    <button id="boton-agregar" type="button" class="btn btn-success boton-agregar"
                      @click="btnGuardarcontrata()">
                      generar Contrata
                    </button>
                  </div>
                </div>
          
         </div>
        </form>
     
    </div>

  </div>
</div>



<!-- welcome modal start -->
<!-- Modal save productos -->
<div class="modal fade" id="Modal_pdf_cotizacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title titulo" id="exampleModalLabel">Cotizaciones activas</h5>
        <button type="button" class="close btn btn-success" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="user-list">
          <input type="text" v-model="searchterm" class="form-control " placeholder="Search term">
          <ul class="lista_encotrada_proformas" v-for="listaProFormas in filteredList">
            <li class="d-flex align-items-center justify-content-between">
              <div class="name-avatar d-flex align-items-center pr-2">

                <div class="txt">
                  <div class="font-14 weight-600">{{listaProFormas.id_cliente}} -
                    <span><strong>Nro:</strong>{{listaProFormas.id}} </span>
                  </div>
                  <div class="font-12 weight-500" data-color="#b2b1b6">
                    <p><span><strong>Fecha Emisión :</strong>{{listaProFormas.fechaInicial}} </span></p>
                    <p><span><strong> Fecha Vencimiento :</strong>{{listaProFormas.fechav}} </span> </p>
                  </div>
                </div>
              </div>
              <div class="cta flex-shrink-0">
                <a href="#" class="btn btn-sm btn-outline-primary" @click="btnBP(listaProFormas.id)">Editar</a>
                <a href="#" class="btn btn-sm btn-outline-primary">ver</a>
                <a href="#" class="btn btn-sm btn-outline-primary">Generar Contrata</a>

              </div>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Fin -->
<!-- Modal save productos -->
<div class="modal fade" id="Modal_pdf_observaciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
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
          <div class="col-md-12 col-sm-12 listaObservaciones" v-for="listaObservacion in listaObservaciones">

            <div class="form-check">
              <input type="checkbox" :value="listaObservacion.codigo" class="form-check-input chkobservacion"
                :id="listaObservacion.codigo" name="chkobservacion[]" v-model="ChkObeservaciones" />
              <label class="form-check-label" :for="listaObservacion.codigo">{{listaObservacion.observaciones}}</label>
            </div>


          </div>

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