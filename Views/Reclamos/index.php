<style>
    .ubicacion {
        background-color: #6B000D !important;

    }

    .h-card {
        height: 6.5rem !important;
    }

    @media (max-width: 768px) {

        .h-card {
            height: 100% !important;
        }
    }

    .a {
        fill: #631704;
    }
</style>
<?php nav() ?>

<script src="https://unpkg.com/vue@next/dist/vue.global.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<!-- end-->
<main id="app">
    <div class="hero4 ">
        <div class="px-4 pt-4 pt-md-10 pb-5  text-center card-modificado-1">
            <h1 class=" fonts  text-light" style="margin-top:5rem;">LIBRO DE RECLAMACIONES </h1>
            <img src="<?= get_logo() ?>" alt="Logo" class="img-fluid my-3">

            <div class="col-lg-6 mx-auto">

                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="https://api.whatsapp.com/send?phone=51989488494&text=Hola,%20quisiera%20cotizar%20algunos%20productos."
                        type="button" class="btn btn-danger btn-lg px-4 gap-3"><i class="fab fa-whatsapp"></i>
                        Contáctanos</a>
                    <h3 class="text-light"> o </h3>
                    <a href="tel:51989488494" type="button" class="btn btn-outline-light btn-lg px-4">Llámanos: +51
                        989488494</a>
                </div>
            </div>
        </div>
    </div><!-- /.hero -->


    <section class="container">
        <div class="row">
            <div class="col-lg-12 my-1">
                <div class="card " style="border-radius: 0; border: 0;">
                    <div class="container text-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="103.064" height="81.761"
                            viewBox="0 0 53.064 31.761">



                            <path class="a"
                                d="M-721.713-420.843h50.551v-2.281h-50.551Zm51.548-4.072-6.185-26.767-1.124.75a9.66,9.66,0,0,1-1.316.7,7.206,7.206,0,0,1-2.792.7,3.191,3.191,0,0,1-1.107-.18,23.141,23.141,0,0,1-3.079-1.617,11.176,11.176,0,0,0-4.82-1.248c-.273-.017-.538-.024-.791-.024a9.034,9.034,0,0,0-5.443,1.594,9.544,9.544,0,0,0-4.54-1.479c-.357-.033-.7-.046-1.032-.046-2.87.007-4.8,1.055-7.707,2.119a5.576,5.576,0,0,1-1.932.338,7.2,7.2,0,0,1-2.61-.527,7.656,7.656,0,0,1-.778-.361c-.179-.1-.249-.146-.25-.146l-1.135-.744-6.157,28.085H-669.9Zm-27.589-2.92a15.482,15.482,0,0,0-8.131-.467c-5.335,1.053-6.122,2.282-9.708,2.458-2.18.107-3.967.149-5.037.164l5.1-23.268a9.134,9.134,0,0,0,3.5.738,7.475,7.475,0,0,0,2.578-.452c3.062-1.136,4.714-2.01,7.061-2,.28,0,.568.011.871.037a8.157,8.157,0,0,1,3.156.871,5.177,5.177,0,0,1,.613.379Zm20.1,1.991c-3.6-.176-4.389-1.4-9.742-2.458a15.546,15.546,0,0,0-8.249.5v-21.748a7.21,7.21,0,0,1,4.268-1.183c.219,0,.441.006.671.021a9.239,9.239,0,0,1,4.071,1.035,23.678,23.678,0,0,0,3.3,1.717,5.085,5.085,0,0,0,1.752.3,9.492,9.492,0,0,0,4-1.063l5.328,23.054C-673.265-425.687-675.217-425.726-677.656-425.844Z"
                                transform="translate(722.963 452.604)" />
                        </svg>
                    </div>
                    <div class="card-body">
                        <div class="card-title text-center">PRESENTACIÓN DE RECLAMO/QUEJA</div>
                        <div class="card-text">
                            En cumplimiento de lo dispuesto en la Ley N° 29571 (Código de Defensa y Protección al
                            Consumidor),
                            así como en el Decreto Supremo N° 0011-2011-PCM y sus modificatorias, este establecimiento
                            cuenta
                            con un Libro de Reclamaciones
                            Virtual a su disposición.
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 my-1">
                <div class="card  h-card">
                    <div class="card-body h-100">
                        <div class="card-title text-center">
                            QUEJA
                        </div>
                        <div class="card-text">
                            Disconformidad no relacionada a los productos o servicios; o, malestar o descontento
                            respecto a la
                            atención al público.

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 my-1">
                <div class="card h-card">
                    <div class="card-body ">
                        <div class="card-title text-center">
                            RECLAMO

                        </div>
                        <div class="card-text">
                            Disconformidad relacionada a los productos o servicios.

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 my-1">
                <div class="card ">

                    <div class="card-body">
                        <div class="card-title text-center">LIBRO DE RECLAMACIONES</div>
                        <div class="card-text">
                            <p>
                            <ol>
                                <li>Registre su reclamo/queja en el formulario visualizado, es necesario ingresar toda
                                    la información solicitada.</li>
                                <li> El reclamo/queja registrado será atendido por la oficina de tramite documentario,
                                    para ello deberá contar con toda la información solicitada.</li>
                                <li> RECLAMO: Disconformidad relacionada a los productos o servicios.</li>
                                <li> QUEJA: Disconformidad no relacionada a los productos o servicios; o malestar o
                                    descontento respecto a la atención al público.</li>
                                <li> La formulación del reclamo no impide acudir a otras vías de solución de
                                    controversias ni es requisito previo para interponer una denuncia ante Indecopi.
                                </li>
                                <li> El proveedor deberá dar respuesta al reclamo en un plazo no mayor a treinta días
                                    calendario, pudiendo ampliar el plazo hasta 30 días más previa comunicación al
                                    consumidor.</li>
                            </ol>
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="container my-3 text-center">
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@mdo">Iniciar Regitro</button>


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
            style="text-align: left;">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header d-flex btn-danger text-light">
                        <h1 class="modal-title fs-5 p-2 m-3" id="exampleModalLabel">REGISTRAR | LIBRO DE RECLAMACIONES
                            VIRTUAL
                        </h1>
                        <button type="button" class="btn btn-light " data-bs-dismiss="modal"
                            aria-label="Close">X</button>
                    </div>
                    <div class="modal-body">
                        <h5>IDENTIFICACIÓN DEL CONSUMIDOR RECLAMANTE</h5>
                        <form class="formReclamos">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6  mb-3">
                                        <div class=" ">
                                            <label for="tipDoc" class="form-label">Tipo de documento</label>
                                            <select class="form-select form-select-sm "
                                                aria-label="Default select example" id="tipDoc" name="tipDoc">
                                                <option value="" selected="">Seleccione</option>
                                                <option value="1">DNI Perú</option>
                                                <option value="2">Carné de extranjería</option>
                                                <option value="3">Pasaporte</option>
                                                <option value="4">RUC</option>
                                            </select>


                                        </div>
                                    </div>
                                    <div class="col-xl-6  mb-3">
                                        <div class=" ">
                                            <label for="Dni" class="form-label">Número de documento</label>
                                            <input type="text" class="form-control form-control-sm" id="Dni" name="Dni"
                                                placeholder="Número de documento">

                                        </div>
                                    </div>
                                    <div class="col-xl-12 ">
                                        <div class=" ">
                                            <label for="name" class="form-label">Nombre/Razón Social</label>
                                            <input type="text" class="form-control form-control-sm" id="name" name="name"
                                                placeholder="Nombre/Razon Social">

                                        </div>
                                    </div>
                                    <div class="col-xl-12 ">
                                        <div class=" mb-3">
                                            <label for="domicilio" class="form-label">Domicilio </label>
                                            <input type="text" class="form-control form-control-sm" id="domicilio" name="domicilio"
                                                placeholder="Ingrese Domicilio">

                                        </div>
                                    </div>
                                    <div class="col-xl-12 ">
                                        <div class=" mb-3">
                                            <label for="tel" class="form-label">Número de Teléfono/Celular </label>
                                            <input type="tel" class="form-control form-control-sm" id="tel" name="tel"
                                                placeholder="000000000">

                                        </div>
                                    </div>
                                    <div class="col-xl-6 ">
                                        <div class="  mb-3">
                                            <label for="email" class="form-label">Correo </label>
                                            <input type="tel" class="form-control form-control-sm" id="email" name="email"
                                                placeholder="******@dominio.com">

                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class=" mb-3">
                                            <label for="email" class="form-label">Repetir Correo </label>
                                            <input type="tel" class="form-control form-control-sm" id="email2" name="email2"
                                                placeholder="******@dominio.com">

                                        </div>
                                    </div>
                                </div>
                                <h5>IDENTIFICACIÓN DEL BIEN CONTRATADO
                                </h5>
                                <div class="row">
                                    <div class="col-xl-6  mb-3">
                                        <div class="">
                                            <label for="tipservicio" class="form-label">seleccione Tipo</label>
                                            <select class="form-select form-select-sm "
                                                aria-label="Default select example" id="tipservicio" name="tipservicio">
                                                <option value="">Seleccione</option>
                                                <option value="1">Producto</option>
                                                <option value="2">Servicio</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-xl-6  mb-3">
                                        <div class=" ">
                                            <label for="descripcion" class="form-label">Ingrese descripción </label>
                                            <input type="text" class="form-control form-control-sm" id="descripcion" name="descripcion">

                                        </div>
                                    </div>

                                </div>
                                <h5>DETALLE DE LA RECLAMACIÓN Y PEDIDO DEL CONSUMIDOR</h5>
                                <div class="row">
                                    <div class="col-xl-6  mb-3">
                                        <div class=" ">
                                            <label for="tipqueja" class="form-label">seleccione Tipo</label>
                                            <select class="form-select form-select-sm "
                                                aria-label="Default select example" id="tipqueja" name="tipqueja">

                                                <option value="">Seleccione</option>
                                                <option value="1">Queja</option>
                                                <option value="2">Reclamo</option>
                                            </select>


                                        </div>
                                    </div>
                                    <div class="col-xl-12  mb-3">
                                        <div class=" ">
                                            <label for="Detalle" class="form-label">Detalle ( max 500 caracteres )</label>
                                            <textarea id="Detalle" name="Detalle" class="w-100"
                                                placeholder="Ingrese Detalle"></textarea>

                                        </div>
                                    </div>
                                    <div class="col-xl-12  mb-3">
                                        <div class=" ">
                                            <label for="inputFile" class="form-label">Adjunte documento sólo de ser
                                                necesario</label>

                                            <input class="form-control form-control-sm" type="file"  ref="file" name="archivo" id="inputFile" />


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" @click="guardareclamo">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<div class=" btn-group dropup position-fixed fixed-bottom d-flex gap-2 p-3 w-10">

    <a class=" icons-hover-whastapp " data-bs-toggle="dropdown" aria-expanded="false"
        href="https://api.whatsapp.com/send?phone=51989488494&text=Hola Terrralpa , Con la Constructora ?, Quisiera saber mas sobre sus productos."
        target="_blank">
        <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="" width="50">
    </a>

    <ul class="dropdown-menu">

        <a class=" linck w-100 p-1 "
            href="https://api.whatsapp.com/send?phone=51989488494&text=Hola Terrralpa , Con la Constructora ?, Quisiera saber mas sobre sus productos."
            target="_blank">
            <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="" width="30"> Constructora
        </a></br>

        <a class="  linck w-100 p-1 "
            href="https://api.whatsapp.com/send?phone=51989488494&text=Hola%20%2C%20Con%20la%20Concretera%20Terrralpa%3F%2C%20Quisiera%20saber%20mas%20sobre%20sus%20productos"
            target="_blank">
            <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="" width="30"> Concretara
        </a></br>

        <a class="  linck w-100 p-1 "
            href="https://api.whatsapp.com/send?phone=51993959395&text=Hola%20%2C%20Con%20el%20%C3%81rea%20Legal%20Terrralpa%3F%2C%20Quisiera%20saber%20mas%20sobre%20sus%20productos%0A%0A"
            target="_blank">
            <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="" width="30"> Area Legal
        </a></br>

        <a class=" linck w-100 p-1 "
            href="https://api.whatsapp.com/send?phone=51951543918&text=Hola%20%2C%20Terrralpa%3F%2C%20Quisiera%20saber%20mas%20sobre%20sus%20productos%0A%0A"
            target="_blank">
            <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="" width="30"> General
        </a>

    </ul>

    <a class=" icons-hover-whastapp   " href="https://www.facebook.com/TERRALPA" target="_blank">
        <img src="<?= ASSETS ?>/img/inicio/face.png" alt="" width="50">
    </a>


</div>

<script src="<?= ASSETS ?>/app/js/<?= $data['function_js']; ?>"></script>
<?php footer() ?>