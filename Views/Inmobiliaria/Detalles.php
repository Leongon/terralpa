<?php

$host = $_SERVER["HTTP_HOST"];
$url = $_SERVER["REQUEST_URI"];
$urlcapturado = "http://" . $host . $url;

$id = $_GET['id'];
?>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<?php nav() ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
<script>document.querySelector(".imgLogo").src = "<?= get_logo_inmobiliaria() ?>";
</script>
<!-- Demo styles -->

<style>
    #map {
        height: 50vh;
    }

    .inmobiliaria {
        color: #6B000D !important;

    }

    .nav-inmobiliaria {
        background-color: #6B000D !important;

    }


    .top {
        margin-top: 8% !important;
    }

    .top-2 {
        margin-top: 15% !important;
    }

    .vh-75 {
        height: 60vh;
    }

    figure.goOnZoom {
        position: relative;
        width: 500px;
        overflow: hidden;
        cursor: zoom-in;
    }

    figure.goOnZoom img {
        transition: opacity .5s;
        display: block;
        width: 100%;
    }

    figure.goOnZoom img:hover {
        opacity: 0;
    }

    .card-modificado-3 {
        background-color: #2a2626 !important;
    }

    .img-tumb {
        object-fit: contain;
        height: 100%;
    }

    .top-img {
        top: 9.3%;
    }

    .mt-md {
        margin-top: 4% !important;
    }
    .font-pc {
        font-size: 2vh !important;
    }

    @media (max-width: 600px) {


        .vh-75 {
            height: 50vh;

        }

        .vh-10 {
            height: 5px !important;

        }

        .top {
            margin-top: 15% !important;
        }

        .vh-60 {

            height: 85vh;
        }


        .thumbnails {

            grid-template-columns: repeat(auto-fill, minmax(10%, 1fr));
        }

        .vh-60 {

            height: 60vh;
        }

        .top-img {
            top: 4.5%;
        }

        .font-pc {
            font-size: 1.5vh !important;
        }

        .mt-md {
            margin-top: 10% !important;
        }

    }

    @media (min-width: 600px) {
        .vh-60 {

            height: 75vh;
        }


    }

    .swipers {
        width: 240px;
        height: 320px;
    }


    .swiper-slide {
        background-color: #fff;
    }

    .swiper-slide {

        align-items: center;
        justify-content: center;
        border-radius: 18px;
        font-size: 22px;
        font-weight: bold;
        color: #fff;
    }


    .opacidad-img {
        opacity: 0.5;

        cursor: pointer;

    }

    .swiper-slide-thumb-active {
        opacity: 1;
    }
</style>



<!-- Swiper -->
<div id="app">
    <div class=" section incio-active vh-100 ">

        <vue-gallery1 :photos="imagen" :video="video" class="d-md-none"></vue-gallery1>

        <div class="swiper mySwiper d-none d-xl-block d-lg-block vh-100">
            <div class="vh-100 container-fluid swiper-wrapper">
                <div class="swiper-slide" v-for="(imgPortadas, index) in imgPortada" :key="index">
                    <img :src="imgPortadas" class=" w-100 h-100 object-fit-cover" loading='lazy' />

                    <div class="card-img-overlay ">
                        <div class="container vh-100">
                            <a :href="imgPortadas" data-fancybox="portada-galeria" class="vh-100">
                                <p class="card-text vh-100"></p>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class=" section incio-active vh-100 ">
        <div class="container-fluid  vh-100 position-relative">
            <div class="row  vh-100  position-absolute position-absolute top-img">

                <div class="col-lg-8 p-0 m-0  d-none d-xl-block d-lg-block">
                    <div class="d-flex flex-column w-100   position-relative  ">
                        <div class=" w-100 p-0 m-0">
                            <h6 class="card-title  text-center w-100   text-uppercase  p-0    m-0"><u><small>
                                        {{Tipo_inmuebl}}
                                        {{ distrito}}
                                        {{Terreno_venta}}
                                    </small>
                                </u>
                            </h6>

                        </div>
                        <div class="container">
                            <vue-gallery :photos="imagen"></vue-gallery>
                        </div>
                    </div>
                    <div>

                    </div>
                </div>

                <div class="col-lg-4  m-0 p-0 text-center card-modificado-1 " style="font-size: 9px;">
                    <div class="container-fluid mt-md p-0 m-0 text-light ">
                        <div
                            class="container-fluid  d-flex flex-column justify-content-center  position-relative p-0 m-0 ">
                            <a :href="video" data-fancybox="gallery"></a>
                            <a :href="video" data-fancybox="galleryss"></a>
                            <a :href="video" data-fancybox="portada-galeria"></a>

                            <p class="border-bottom text-center text-uppercase h-100 " style="font-size: 14px;">
                                Información
                                del
                                proyecto
                            </p>

                            <div class="container-fluid table-responsive text-align  Card-modificado-1 ">

                                <table class="table  text-light p-0 m-0 ">

                                    <tbody class="  p-0 m-0 font-pc" style="font-size: 10px;">
                                        <tr class="" style="font-size: 12px;">
                                            <td class="text-uppercase">Precio :</td>
                                            <td class="d-flex flex-column">
                                                <div class="col-12 text-uppercase"><span> S/ {{precio}} </span>
                                                    <span>{{estado}}</span>
                                                </div>

                                                <div class="col-12 text-uppercase d-flex gap-2">
                                                    {{Etapa_proyecto}}
                                                    <a href="https://api.whatsapp.com/send?phone=51966006552&text= Hola Magaly, quisiera saber más sobre las propiedades, <?php echo $urlcapturado ?>"
                                                        target="_blank" type="button"
                                                        class="btn btn-danger  text-uppercase w-100 font-pc">
                                                        <i class="fab fa-whatsapp"></i>
                                                        Contactar
                                                    </a>
                                                </div>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-uppercase">Dirección :</td>
                                            <td> {{direccion}}, {{Terreno_venta}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-uppercase">Tipo de inmueble:</td>
                                            <td>{{Tipo_inmuebl}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-uppercase">Área total:</td>
                                            <td>{{area_total}}</td>
                                        </tr>

                                        <tr>
                                            <td class="text-uppercase">Documentación:</td>
                                            <td>{{documnentacion}}</td>
                                        </tr>

                                        <tr>
                                            <td class="text-uppercase">Servicios:</td>
                                            <td>{{servicios}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-uppercase">Detalles :</td>
                                            <td>{{descripcion}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-uppercase">Beneficios :</td>
                                            <td>{{Beneficios}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <h5 class="card-title" style="font-size: 14px;">Descripción</h5>
                                                <p class="card-text  " style="font-size: 11px;">
                                                    {{floro}}
                                                </p>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>



                        </div>
                    </div>






                </div>
            </div>
        </div>
    </div>

    <div class=" section incio-active vh-100 ">
        <div class="container-fluid  vh-100 position-relative">
            <div class="row  vh-100 w-100  position-absolute position-absolute top-img ">
                <div class="col-lg-8">
                    <div class="d-flex flex-column w-100  position-relative  ">
                        <div class=" w-100 p-0 m-0">
                            <h6
                                class="card-title  text-center w-100  text-uppercase  p-0 m-0 d-none d-xl-block d-lg-block">
                                <u><small>
                                        {{Tipo_inmuebl}}
                                        {{ distrito}}
                                        {{Terreno_venta}}</small></u>
                            </h6>

                        </div>


                        <div class="mt-1">
                            <div class="container">
                                <div class="row ">
                                    <div class="col-lg-6  ">
                                        <div class="container mt-3  text-center d-none d-xl-block d-lg-block">
                                            <!--  <video preload="none" muted loop playsinline
                                                src="https://drive.google.com/uc?id=15bKcZSnyeKc9lCwcSJNK6bVbEPcLRfBA"
                                                width="300" height="400" controls>
                                                <p>Su navegador no soporta vídeos HTML5.</p>
                                            </video> -->
                                            <iframe height="315" :src="video" title="YouTube video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
                                        </div>

                                    </div>
                                    <div class="col-lg-6  ">
                                        <div class="container position-relative my-3">
                                            <H4 class="Card-modificado-2 text-center text-light">Ubicación del terreno
                                            </H4>
                                            <div id="map"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>

                    </div>
                </div>
                <div class="col-lg-4  m-0 p-0 text-center card-modificado-1 d-none d-xl-block d-lg-block"
                    style="font-size: 10px;">
                    <div class="container-fluid  mt-4  text-light ">
                        <div class="container-fluid w-100 position-relative p-0 m-0 ">


                            <a href="<?php echo base_url ?>/Inmobiliaria" type="button"
                                class="btn btn-danger btn-lg w-75   ">
                                Ver más proyectos
                            </a>

                            <div class="container-fluid  text-align   w-100 p-0 m-0  ">

                                <div class="swiper swipers  mySwipers">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" v-for="itemcard in Vender">
                                            <a :href="'<?php echo base_url; ?>/Inmobiliaria/Detalles?id='+ itemcard.id"
                                                style=" text-decoration: none;">
                                                <div class="card   p-0 m-0">
                                                    <img :src="itemcard.imgPortada[0] " class="card-img " alt="..."
                                                        style="height: 10rem;">
                                                    <div class="card-img-overlay p-0 m-0" style="font-size: 10px;">
                                                        <p
                                                            class="card-title  bg-danger w-50 text-center text-light m-0">
                                                            S/ {{
                                                            itemcard.precio}}
                                                        </p>
                                                        <p
                                                            class="card-title  bg-secondary w-50 text-center text-light ">
                                                            {{
                                                            itemcard.Etapa_proyecto
                                                            }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card-body text-dark p-1  w-100" style="font-size: 10px;">
                                                    <p class="card-title text-danger fw-bolder">{{
                                                        itemcard.Tipo_inmuebl}} {{
                                                        itemcard.Terreno_venta}}</p>
                                                    <p class="text-center">
                                                        <i class="fa-solid fa-location-dot text-danger "
                                                            style="font-size: 25px;"></i>
                                                        <span>{{itemcard.direccion}}</span>
                                                    </p>
                                                    <p
                                                        class="d-flex p-0 m-0  gap-2 text-center justify-content-center flex-column">
                                                        <span><i class="fa-solid fa-ruler-vertical text-danger"
                                                                style="margin-top:8px;"></i>
                                                            {{ itemcard.area_total}}</span>

                                                        <span> <i class="fa-solid fa-bed text-danger"
                                                                style="margin-top:8px;"></i>
                                                            {{itemcard.part_terreno}}
                                                        </span>
                                                    </p>
                                                </div>
                                            </a>

                                        </div>

                                    </div>
                                </div>


                            </div>



                        </div>
                    </div>






                </div>
                <div class="col-lg-12 p-0 m-0">
                    <section id="contact" style="background-color: black;">

                        <div class="container-fluid footer">
                            <div class="row">
                                <div class="col-lg-2 col-md-12 d-none d-xl-block d-lg-block">
                                    <p class="text-light text-center ">NUESTROS CLIENTES </p>
                                </div>
                                <div class="col-lg-10 col-md-12">
                                    <div class=" owl-carousel owl-theme">
                                        <div class="item">
                                            <img src="https://drive.google.com/uc?id=1KsYz1SdIWE3TWa-xJO0lh8RYhfitpdnh"
                                                alt="">
                                        </div>
                                        <div class="item">
                                            <img src="https://drive.google.com/uc?id=16sp2xN_fFldvX2x1zfrNqIX7YixUGSsO"
                                                alt="">
                                        </div>
                                        <div class="item">
                                            <img src="https://drive.google.com/uc?id=1xqS7iP9o7XuhFcdE2pQeqaovlDbG7igf"
                                                alt="">
                                        </div>
                                        <div class="item">
                                            <img src="https://drive.google.com/uc?id=1PHQtsLHL-hcUCmXg__jrFoKxx8yRSvtH"
                                                alt="">
                                        </div>
                                        <div class="item">
                                            <img src="https://drive.google.com/uc?id=1B-O7b_LeThWwBYmkEgIe83egxwYGDzdi"
                                                alt="">
                                        </div>
                                        <div class="item">
                                            <img src="https://drive.google.com/uc?id=1km53NXFQcsb982by0C9rV1yseohJVzsk"
                                                alt="">
                                        </div>
                                        <div class="item">
                                            <img src="https://drive.google.com/uc?id=1b585H7Pi0SIs_giZG1NrQTWXbtNZRrXX"
                                                alt="">
                                        </div>
                                        <div class="item">
                                            <img src="https://drive.google.com/uc?id=1XgZrGpS0WkI5ngkhGKOIBgdr0paqyIDd"
                                                alt="">
                                        </div>
                                        <div class="item">
                                            <img src="https://drive.google.com/uc?id=1ugF3E50K7i7QzLLLaRe2cidYztxn1Jed"
                                                alt="">
                                        </div>
                                        <div class="item">
                                            <img src="https://drive.google.com/uc?id=1VvCCrT5DxTvkC5M8c3Qoc_oawSCbyfLL"
                                                alt="">
                                        </div>
                                        <div class="item">
                                            <img src="https://drive.google.com/uc?id=1n-8M8MQLbjvSqW9iHHFC-LxZ0aR-yKkO"
                                                alt="">
                                        </div>
                                        <div class="item">
                                            <img src="https://drive.google.com/uc?id=1yMQwnaizss9ot7GrXdmXyCKiDgDDl0PE"
                                                alt="">
                                        </div>
                                        <div class="item">
                                            <img src="https://drive.google.com/uc?id=1KG2_RJEH6ctwGfEteTjLseZ0PSBHnP2D"
                                                alt="">
                                        </div>
                                        <div class="item">
                                            <img src="https://drive.google.com/uc?id=1D3NNoUq2gTLTfm3CQIe8pZ3TAXHZ2hLT"
                                                alt="">
                                        </div>
                                        <div class="item">
                                            <img src="https://drive.google.com/uc?id=1y2rzDZIN5rbpXAnUWPEkHoOuHLMxoS1N"
                                                alt="">
                                        </div>
                                        <div class="item">
                                            <img src="https://drive.google.com/uc?id=1kCmXsDdFpuT1frI-HTLvxWi_ur2LYyFr"
                                                alt="">
                                        </div>
                                        <div class="item">
                                            <img src="https://drive.google.com/uc?id=1T8Rm29abLySIWezyUiubN-kDKNq2FH0Z"
                                                alt="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="footer mt-3 mx-auto   vh-100 w-100 ">
                            <div class="d-flex justify-content-center text-center ">
                                <h1 class="telefono  text-center justify-content-center font-pc"><i
                                        class="fa-solid fa-phone font-pc"></i> TELÉFONOS </h1>
                            </div>
                            <footer class=" d-flex  justify-content-evenly  align-items-center  flex-wrap ">
                               
                                <div class="d-flex   justify-content-center text-right m-0 p-0">
                                    <a href="https://wa.link/w6dc3t" class="linck text-success text-center font-pc ">
                                        <i class="fab fa-whatsapp"></i></a>
                                    <a class=" text-light w-100 linck m-0 p-0 font-pc " href="tel:51951543918">
                                        <p class=" constructora">
                                            <strong class="text-uppercase">Constructora:</strong>+51 951 543 918</p>
                                    </a>
                                </div>
                                
                                <div class="d-flex m-0 p-0">
                                    <a href="https://wa.link/vkcoej" class="linck text-success font-pc"><i
                                            class="fab fa-whatsapp"></i></a>
                                    <a class=" text-light w-100  linck font-pc" href="tel:51989488494">

                                        <p class=" Concretera font-pc"> <strong>CONCRETERA:</strong> +51 989 488 494</p>
                                    </a>

                                </div>

                                <div class="d-flex    m-0 p-0">
                                    <a href="https://wa.link/hjegpy" class="linck text-success font-pc"><i
                                            class="fab fa-whatsapp font-pc"></i></a>
                                    <a class=" text-light w-100 linck  " href="tel:51966006552">
                                        <p class=" inmobiliaria font-pc"><strong> INMOBILIARIA :</strong> +51 966 006
                                            552</p>
                                    </a>
                                </div>

                                <div class="d-flex m-0 p-0">
                                    <a href="https://wa.link/hjegpy" class="linck text-success"><i
                                            class="fab fa-whatsapp"></i></a>
                                    <a class=" text-light w-100 linck  " href="tel:51993959395">
                                        <p class=" Titulaciones font-pc"><strong> TITULACIONES :</strong> +51 993 959
                                            395</p>
                                    </a>

                                </div>
                                
                                <div class="d-flex m-0 p-0">
                                    <i class="fas fa-phone  m-0 p-0 linck text-success">
                                    </i>
                                    <a class=" text-light w-100  linck " href="tel:066638675">
                                        <p><strong class="text-uppercase font-pc">GENERAL :</strong> +066 638675</p>
                                    </a>

                                </div>
                            </footer>
                        </div>
                    </section>




                </div>
            </div>

        </div>
    </div>

</div>
</div>
<!-- Swiper JS -->
<script src="<?= ASSETS ?>/js/fullpage.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>


    const ids = <?php echo $id ?>;
</script>

<script src="<?= ASSETS ?>/js/BD_inmo_detalles.js"></script>

<div class=" btn-group dropup position-fixed fixed-bottom d-flex gap-1 w-10">


    <a class=" icons-hover-whastapp  "
        href="https://api.whatsapp.com/send?phone=51966006552&text= Hola, me Interesa este terreno, <?php echo $urlcapturado ?>"
        target="_blank">
        <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="" width="50">
    </a></br>

    <a class=" icons-hover-whastapp   " href="https://www.facebook.com/TERRALPA" target="_blank">
        <img src="<?= ASSETS ?>/img/inicio/face.png" alt="" width="50">
    </a>
</div>

<script>
    fullpage.initialize('#app', {
        autoScrolling: true, // Se activa el scroll.
        scrollHorizontally: true,
        fitToSection: false, // Acomoda el scroll automaticamente para que la seccion se muestre en pantalla.
        fitToSectionDelay: 300, // Delay antes de acomodar la seccion automaticamente.
        easing: 'easeInOutCubic', // Funcion de tiempo de la animacion.
        scrollingSpeed: 700, // Velocidad del scroll. Valores: en milisegundos.
        css3: true, // Si usara CSS3 o javascript.
        easingcss3: 'ease-out', // Curva de velocidad del efecto.
        loopBottom: false, // Regresa a la primera seccion siempre y cuando se ya haya llegado a la ultima sección y el ususario siga scrolleando.


        navigation: false, // Muesta la barra de navegación.
        menu: '#menu', // Menu de navegación.
        anchors: ['inicio', 'cuerpo', "final"], // Anclas, las usamos para identificar cada seccion y poder acceder a ellas con el menu.
        slidesNavigation: true

    });
</script>


<script src="<?= ASSETS ?>/js/clientes.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({

        loop: true,
        margin: 10,
        items: 6,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 7
            },
            600: {
                items: 6
            },
            1000: {
                items: 16
            },
        }


    });
    owl.on('mousewheel', '.owl-stage', function (e) {
        if (e.deltaY > 0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });
</script>

<?php messenger() ?>