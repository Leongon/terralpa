<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="author" content="Terralpa" />

  <meta name="Construtora" content="Empresa Peruana – ejecutores de proyectos de construcción ,
   infraestructura vial, edificaciones públicas y mas." />

  <meta name="Concretera" content="EMPRESA CONCRETERA Peruana.
    - especializada en proveer concreto Prefabricado
      para obras en todo el peru. Realizamos visitas a obras para cubicaje" />


  <meta name="Titulaciones e Inmobiliaria" content="Nuestro departamento de Titulaciones e  Inmobiliaria , 
    le ayuda en su gestión inmobiliaria de venta,
    alquiler de casas, departamentos,lotizaciones
    terrenos en Todo el peru." />

  <meta property="og:description" content="Terralpa Empresa Peruana – especializada en ejecutores de proyectos de construcción, 
   infraestructura vial, edificaciones públicas y mas">

  <meta property="og:url" content="https://terralpa.com/">
  <meta property="og:site_name" content="terralpa">
  <meta name="twitter:title" content="terralpa">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="es_ES" />
  <title> Terralpa - Constructora , Concretera e Inmobiliaria</title>

  <link rel="icon" href="<?= get_logo() ?>">
  <!-- Bootstrap -->
  <link href="<?= CSS ?>/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= CSS ?>/index.css">


  <script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="<?= PLUGINS ?>/owl/owl.carousel.min.css">
  <script src="<?= PLUGINS ?>/owl/owl.carousel.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Merriweather+Sans:ital,wght@1,800&family=Poppins:wght@500&display=swap');


  @media (max-width: 768px) {
    .font-arial-narrow {
      font-size: 1.5vh;
      letter-spacing: -0.5px !important;
    }
  }
</style>

<body class="bg-dark">
  <?php include "nav.php" ?>
  <!-- full page -->
  <div id="fullpage">
    <!-- seccion 1 -->
    <div class=" section incio-active ">
      <div class="position-relative w-100 h-100 contenedor-video vh-100">

        <video src="<?= ASSETS ?>/img/inicio/X2Download.app-intro.mp4" type="video/mp4" autoplay loop muted loop
          class=" position-absolute w-100 h-100 top-0 screem">
        </video>
        <div class="bg-color vh-100">
        </div>
        <div class="position-absolute  d-flex justify-content-center align-items-center w-100 h-100 top-0 ">
          <div class=" text-light p-3">
            <div class="text-center ">
              <h2 class="fonts fonts-1 fonts-title">TERRALPA</h2>
              <h2 class="fonts fonts-1 fonts-title  "> AYUDANDO A MAS DE CIEN MIL PERUANOS</h2>
            </div>
            <div class=" text-center my-2 ">
              <div class="btn-group-lg d-flex flex-wrap gap-1 justify-content-center" role="group"
                aria-label="Basic example">

                <a href="<?php echo base_url ?>/Constructora" type="button"
                  class="btn text-light btn-danger mb-1 fonts-title-1 " style="transform: skewX( -22deg );"><i
                    class="fa-solid fa-arrow-down"></i> IR A CONSTRUCTORA</a>


                <a href="<?php echo base_url ?>/Concretera" type="button"
                  class="btn text-light btn-dark  text-uppercase mb-1 fonts-title-1"
                  style="transform: skewX( -22deg );"><i class="fa-solid fa-arrow-down ">

                  </i> Ir a Concretera</a>


                <a href="<?php echo base_url ?>/Inmobiliaria" type="button"
                  class="btn text-light btn-danger text-uppercase mb-1 fonts-title-1 "
                  style="transform: skewX( -22deg );"> <i class="fa-solid fa-arrow-down"></i> Ir a Inmobiliaria</a>


                <a href="<?php echo base_url ?>/Titulacion" type="button"
                  class="btn text-light btn-dark  text-uppercase  fonts-title-1" style="transform: skewX( -22deg );"><i
                    class="fa-solid fa-arrow-down ">

                  </i> Ir a Titulaciones</a>
              </div>
            </div>


            <div class="d-flex flex-wrap align-content-center justify-content-center margen-escritorio d gap-1 ">
              <div class="col">
                <div class="card p-2 h-100 card-modificado-1 text-center">
                  <h2>
                    <div class="counter text-wrap" data-target="732"></div>
                  </h2>
                  <span class="text-wrap fonts-letra fonts-title-1">PROYECTOS REALIZADOS</span>
                </div>
              </div>
              <div class="col">
                <div class="card p-2 h-100 card-modificado-1 text-center">
                  <h2>
                    <div class="counter text-wrap" data-target="176"></div>
                  </h2>
                  <span class="text-wrap fonts-letra fonts-title-1">EDIFICACIONES CONSTRUIDAS</span>
                </div>
              </div>
              <div class="col">
                <div class="card p-2 h-100 card-modificado-1 text-center">
                  <h2>
                    <div class="counter text-wrap" data-target="39"></div>
                  </h2>
                  <span class="text-wrap fonts-letra fonts-title-1">LOTIZACIONES</span>
                </div>
              </div>
              <div class="col">
                <div class="card p-2 h-100 card-modificado-1 text-center">
                  <h2>
                    <div class="counter text-wrap" data-target="13560"></div>
                  </h2>
                  <span class="text-wrap fonts-letra fonts-title-1">LOTES ENTREGADOS</span>
                </div>
              </div>
              <div class="col">
                <div class="card p-2 h-100 card-modificado-1 text-center">
                  <h2>
                    <div class="counter text-wrap" data-target="78"></div>
                  </h2>
                  <span class="text-wrap fonts-letra fonts-title-1">ASESORÍAS LEGALES GANADAS</span>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- seccion 2 -->
    <div class=" section Nosotros ">
      <div class="position-relative w-100 h-100 contenedor-video vh-100">

        <video src="<?= ASSETS ?>/img/inicio/Nosotros.mp4" type="video/mp4" autoplay loop muted loop
          class=" position-absolute img-screen screem top-0">
        </video>
        <div class="bg-color vh-100">
        </div>
        <div class="position-absolute  d-flex justify-content-between align-items-center w-100 h-100 top-0 top">
          <div class="container-fluid">
            <h2 class="text-center text-light  text-uppercase fonts fonts-1 fonts-title text-center" type="button"
              data-bs-toggle="collapse" data-bs-target="#nosotro" aria-expanded="true" aria-controls="collapseOne">
              Nosotros</h2>

            <div class="accordion p-0" id="accordionExample">
              <div class="container-fluid ">
                <div class=" d-flex flex-wrap justify-content-center align-items-center gap-1 ">


                  <div class=" text-center text-light card-modificado-1 p-2 heigt" type="button"
                    data-bs-toggle="collapse" data-bs-target="#historia" aria-expanded="true"
                    aria-controls="collapseOne">
                    <i class="fa-solid fa-clock-rotate-left"></i>

                    <h6 class="text-uppercase fonts-letra">Historia</h6>
                    <p class="texto-tamaño-1"></p>
                  </div>


                  <div class=" text-center text-light card-modificado-1 p-2 heigt" type="button"
                    data-bs-toggle="collapse" data-bs-target="#Mision" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fa-solid fa-person-circle-question"></i>

                    <h6 class="text-uppercase fonts-letra">Misi&oacute;n</h6>
                    <p class="texto-tamaño-1"></p>
                  </div>


                  <div class="  text-center text-light card-modificado-1 p-2 heigt" type="button"
                    data-bs-toggle="collapse" data-bs-target="#Vision" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fa-solid fa-eye"></i>
                    <h6 class="text-uppercase fonts-letra">Visi&oacute;n</h6>
                    <p class="texto-tamaño-1"></p>
                  </div>


                  <div class="text-center text-light card-modificado-1 p-2 heigt" type="button"
                    data-bs-toggle="collapse" data-bs-target="#Valores" aria-expanded="true"
                    aria-controls="collapseOne">
                    <i class="fa-solid fa-heart"></i>
                    <h6 class="text-uppercase fonts-letra">Valores</h6>
                  </div>

                  <div class="text-center text-light card-modificado-1 p-2 heigt" type="button"
                    data-bs-toggle="collapse" data-bs-target="#doc" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fa-solid fa-file-pdf"></i>
                    <h6 class="text-uppercase fonts-letra ">Doc. de Gestión</h6>
                  </div>




                </div>
                <div class="body my-2">
                  <div class="card card-modificado-1 text-light">
                    <div id="nosotro" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body  ">
                        <h6 class="fonts-letra">Nosotros.</h6>

                        <p class=" texto-justificado">Somos una empresa peruana, líder en los distintos sectores en los
                          que operamos, manejándonos
                          con altos estándares en la gestión y producción de consultorías y ejecuciones de proyectos,
                          reconocidos laboralmente a nivel internacional. Nos dedicamos a nuestros clientes, entregando
                          un servicio de calidad, comprometiéndonos con sus requerimientos.
                        </p>
                      </div>
                    </div>
                    <div id="Mision" class="accordion-collapse collapse " aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body  ">
                        <h6>Misi&oacute;n.</h6>

                        <p class="texto-justificado">
                          Terralpa es una empresa dedicada a la elaboración y ejecución de proyectos de Arquitectura,
                          obras civiles y Asesoría Legal, en el ámbito público y privado, cuya misión es satisfacer
                          las necesidades de nuestros clientes antes, durante y después de finalizado el proyecto.
                          Dando cumplimiento a los estándares de calidad y plazos fijados por este, satisfaciendo a
                          nuestros clientes por medio de la exigencia en el control de calidad de nuestros productos
                          terminados.
                        </p>
                      </div>
                    </div>
                    <div id="Vision" class="accordion-collapse collapse " aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body ">
                        <h6>Visi&oacute;n</h6>
                        <p class="texto-justificado">Compromiso con la seguridad de las personas, con el cuidado del
                          medio ambiente y con el
                          desarrollo de las comunidades.

                          Arraigo local y respeto por la diversidad cultural en el marco de una visión global de los
                          negocios.

                          Desarrollo de los recursos humanos y construcción de conocimiento.

                          Transparencia y profesionalismo en la gestión.

                          Énfasis en los procesos y la previsibilidad.</p>
                      </div>

                    </div>
                    <div id="Valores" class="accordion-collapse collapse " aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body ">
                        <h6>Valores</h6>
                        <p class="texto-justificado">Compromiso con la seguridad de las personas, con el cuidado del
                          medio ambiente y con el
                          desarrollo de las comunidades.

                          Arraigo local y respeto por la diversidad cultural en el marco de una visión global de los
                          negocios.

                          Desarrollo de los recursos humanos y construcción de conocimiento.

                          Transparencia y profesionalismo en la gestión.

                          Énfasis en los procesos y la previsibilidad.</p>
                      </div>

                    </div>

                    <div id="historia" class="accordion-collapse collapse " aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body ">
                        <h6>Historia</h6>
                        <p class="texto-justificado fonts-letra">Nuestras empresas Constructora Terralpa S.A.C. -
                          Inmobiliaria Terralpa S.A.C. -
                          Constructora Terralpa S.A.C. Y CONCRETERA están constituidas formalmente al 100%, fue fundada
                          el 2009, teniendo como cede el local central en Huamanga – Ayacucho – Perú, creciendo a través
                          de los años con sucursales en diferentes partes del País y realizando consultorías
                          internacionales, apoyando a ONGs, Instituciones Sin Fines de Lucro, albergues u otros,
                          Realizando también proyectos para el estado, en consultorías, consorcios, ejecuciones y
                          supervisiones de obras, teniendo como producto bandera a la parte privada, donde realizamos
                          miles de proyectos, entre locales comerciales, locales industriales, multifamiliares,
                          unifamiliares, lotizaciones, titulaciones, representación y asesoría legal, a diversas
                          personas naturales y jurídicas, obteniendo el 100% de clientes satisfechos, y ninguna queja,
                          denuncia, demanda o proceso judicial en nuestra contra, porque entregamos un producto de
                          CALIDAD, con altos estándares internacionales y apoyados de nuestra plana de profesionales
                          altamente calificados y eficientemente creativos. </p>
                      </div>

                    </div>
                    <div id="doc" class="accordion-collapse collapse " aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body ">
                        <h5 class="text-center text-uppercase">Documentos de Gestión</h5>
                        <div class="container d-flex gap-3 align-items-center flex-wrap justify-content-center">
                          <a href="./<?= ASSETS ?>/img/inicio/MOF.pdf" class="linck text-light"
                            style="font-size: 1rem;"><i class="fas fa-file-pdf"></i> MOF</a>
                          <a href="./<?= ASSETS ?>/img/inicio/ROF.pdf" class="linck text-light"
                            style="font-size: 1rem;"><i class="fas fa-file-pdf"></i> ROF</a>
                          <a href="./<?= ASSETS ?>/img/inicio/MOF.pdf" class="linck text-light"
                            style="font-size: 1rem;"><i class="fas fa-file-pdf"></i> TUPA</a>
                          <a href="./<?= ASSETS ?>/img/inicio/ROF.pdf" class="linck text-light"
                            style="font-size: 1rem;"><i class="fas fa-file-pdf"></i> MAPRO</a>
                          <a href="<?php echo base_url; ?>/Reclamos" class="linck text-light text-uppercase"
                            style="font-size: 1rem;"><i class="fa-solid fa-book-open-reader"></i> Libro de
                            Reclamaciones</a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- seccion 3 -->
    <!--   <div class=" section  ">
      <div class="position-relative w-100 h-100 contenedor-video vh-100">
        <img src="<?= ASSETS ?>/img/inicio/obra-supervisada.jpg" alt="conttrucion"
          class=" position-absolute img-fondo top-0 screem">

        <div class="bg-color-red screem vh-100">
        </div>
        <div class="position-absolute  align-items-center w-100 h-100 top-0  ">
          <div class="bg-dark ">
            <div id="carouselExampleCaptions" class="carousel slide vh-100" data-bs-ride="carousel">

              <div class="carousel-inner">
                <div class="carousel-item active " data-bs-interval="5000">
                  <img src="<?= ASSETS ?>/img/inicio/galeria-12.png" class="   w-100 vh-100 screem" alt="...">
                  <div class="position-absolute card-modificado-1 vh-100 w-100"></div>
                  <div class="carousel-caption top-0 vh-100 ">
                    <div class="position-relative container-fluid top">
                      <div class="card-modificado-1 w-100  ">
                        <h2>CONSTRUCTORA TERRALPA</h2>
                        <h4>Contamos con la maquinaria y el equipo capacitado para brindarte un mejor servicio.</h4>
                        <a href="<?php echo base_url ?>/Constructora" type="button"
                  class="btn text-light btn-danger m-1  " style="transform: skewX( -22deg );"><i
                    class="fa-solid fa-arrow-right"></i> IR A CONSTRUCTORA</a>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="carousel-item" data-bs-interval="5000">
                  <img src="<?= ASSETS ?>/img/inicio/arton153639.jpg" class=" w-100 vh-100 screem" alt="...">
                  <div class="position-absolute card-modificado-1 vh-100 w-100"></div>
                  <div class="carousel-caption top-0 vh-100 ">
                    <div class="position-relative container top">
                      <div class="card-modificado-1 w-100 ">
                        <h2>CONSTRUCTORA TERRALPA</h2>
                        <p>Nuestro equipo de profesionales altamente capacitados y avalados por una trayectoria de más
                          de 10 años.</p>
                          <a href="<?php echo base_url ?>/Constructora" type="button"
                  class="btn text-light btn-danger m-1  " style="transform: skewX( -22deg );"><i
                    class="fa-solid fa-arrow-right"></i> IR A CONSTRUCTORA</a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>

              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>


      </div>
    </div>
    -->
    <div class=" section  ">
      <div class="position-relative w-100 h-100 contenedor-video vh-100">
        <video src="<?= ASSETS ?>/img/inicio/X2Download.app-intro.mp4" type="video/mp4" autoplay loop muted loop
          class=" position-absolute w-100 h-100 top-0 screem">
        </video>

        <div class="bg-color-3  vh-100">
        </div>

        <div
          class="position-absolute  d-flex flex-column justify-content-center align-items-center w-100 h-100 top-0 bottom-50  ">
          <div
            class="container-fluid text-light d-flex flex-column justify-content-center align-items-center w-100 h-100 top-0 marg">
            <img src="<?= get_logo_constructora() ?>" alt="" class="img-fluid" width="450">

            <h2 class="text-uppercase fonts fonts-1 fonts-title text-center">Construyendo tus sueños, edificando tu
              futuro</h2>
            <img src="<?= ASSETS ?>/img/inicio/casco.png" alt="" class="img-fluid" width="300">
            <h6 class="text-center"><i class="fa-solid fa-helmet-safety text-danger"></i> Innovación en marcha.</h6>
            <h6 class="text-center"><i class="fa-solid fa-helmet-safety text-danger"></i> Maximiza el potencial de tus
              propiedades.
            </h6>
            <h6 class="text-center"><i class="fa-solid fa-helmet-safety text-danger"></i> Confianza y compromiso.</h6>
            <h6 class="text-center"><i class="fa-solid fa-helmet-safety text-danger"></i> Asesoría gratuita
              .</h6>
            <a href="<?php echo base_url ?>/Constructora" type="button"
              class="btn text-light btn-danger mb-1 fonts-title-1 " style="transform: skewX( -22deg );"><i
                class="fa-solid fa-arrow-down"></i> IR A CONSTRUCTORA</a>
          </div>

        </div>

      </div>

    </div>


    <!-- seccion 4 -->
    <!--   <div class=" section  ">
      <div class="position-relative w-100 h-100 contenedor-video vh-100">
        <img src="<?= ASSETS ?>/img/inicio/obra-supervisada.jpg" alt="conttrucion"
          class=" position-absolute img-fondo top-0 screem">

        <div class="bg-color-red screem vh-100">
        </div>
        <div class="position-absolute  align-items-center w-100 h-100 top-0  ">
          <div class="bg-dark ">
            <div id="carouselExampleCaption" class="carousel slide vh-100" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaption" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaption" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaption" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                  <img src="<?= ASSETS ?>/img/inicio/4300-m2-de-adoquines-en-jardines-del-salado.jpg"
                    class="   w-100 vh-100 screem" alt="...">
                  <div class="position-absolute card-modificado-1 vh-100 w-100"></div>
                  <div class="carousel-caption top-0 vh-100 ">
                    <div class="position-relative container top">
                      <div class="card-modificado-1 w-100 ">
                        <h2>CONCRETERA TERRALPA</h2>
                        <p>
                          Elementos prefabricados de concreto listos para utilizar en obra, ahorrando tiempo y recursos
                          y brindando además flexibilidad y seguridad en obras como: puentes, edificios, hangares y/o
                          almacenes, estacionamientos, cercos perimétricos y mas.</p>
                        <a href="<?php echo base_url ?>/Concretera" type="button"
                          class="btn text-light btn-danger m-1 text-uppercase font-monospace fonts-letra "
                          style="transform: skewX( -22deg );"><i class="fa-solid fa-arrow-right"></i> Ir a
                          Concretera</a>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="carousel-item" data-bs-interval="5000">
                  <img src="<?= ASSETS ?>/img/inicio/arton153639.jpg" class=" w-100 vh-100 screem" alt="...">
                  <div class="position-absolute card-modificado-1 vh-100 w-100"></div>
                  <div class="carousel-caption top-0 vh-100 ">
                    <div class="position-relative container top">
                      <div class="card-modificado-1 w-100 ">
                        <h2>CONCRETERA TERRALPA</h2>
                        <div class="col-12 text-center  ">
                          <h5>Productos asequibles a tu bolsillo <i class="fa-solid fa-check text-success"></i></h5>
                          <h5>Economicos <i class="fa-solid fa-check  text-success"></i></h5>
                          <h5>De instalcion Rapida <i class="fa-solid fa-check text-success"></i></h5>
                          <h5>Seguridad garantizada <i class="fa-solid fa-check text-success"></i></h5>
                        </div>
                        <a href="<?php echo base_url ?>/Concretera" type="button"
                          class="btn text-light btn-danger m-1 text-uppercase font-monospace fonts-letra "
                          style="transform: skewX( -22deg );"><i class="fa-solid fa-arrow-right "></i> Ir a
                          Concretera</a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaption"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaption"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>


      </div>
    </div>
    -->
    <div class=" section  ">
      <div class="position-relative w-100 h-100 contenedor-video vh-100">
        <img src="<?= ASSETS ?>/img/inicio/Concretera.jpg" alt="conttrucion"
          class=" position-absolute w-100 h-100 top-0 screem">

        <div class="bg-color-3  vh-100">
        </div>

        <div
          class="position-absolute  d-flex flex-column justify-content-center align-items-center w-100 h-100 top-0 bottom-50  ">
          <div
            class="container-fluid text-light d-flex flex-column justify-content-center align-items-center w-100 h-100 top-0 marg">
            <img src="<?= get_logo_concretera() ?>" alt="" srcset="" class="img-fluid" width="450">


            <h2 class="text-uppercase fonts fonts-1 fonts-title text-center">prefabricados para sus necesidades</h2>
            <img src="<?= ASSETS ?>/img/inicio/adoquin_de_concreto_bicapa_color_solido_y_terrazo_pulido.png" alt=""
              class="img-fluid" width="300">
            <h6 class="text-center"><i class="fa-solid fa-cube text-danger"></i> La firmeza de nuestras columnas y
              plaquetas hacen que sea resistente a los cambios climáticos.</h6>

            <h6 class="text-center"><i class="fa-solid fa-cube text-danger"></i> El costo es menor al de un cerco
              perimétrico con asentado de ladrillo y la mano de obra del personal.</h6>
            <h6 class="text-center"><i class="fa-solid fa-cube text-danger"></i> Al ser un prefabricado te permite
              ahorrar tiempo en la instalación, teniéndolo listo en cuestión de días.</h6>


            <a href="<?php echo base_url ?>/Concretera" type="button"
              class="btn text-light btn-danger  text-uppercase mb-1 fonts-title-1"
              style="transform: skewX( -22deg );"><i class="fa-solid fa-arrow-down ">

              </i> Ir a Concretera</a>
          </div>

        </div>

      </div>

    </div>
    <!-- seccion 5 -->
    <div class=" section  ">
      <div class="position-relative   contenedor-video vh-100">
        <img src="<?= ASSETS ?>/img/inicio/Diseno-casa-en-ladera.jpg" alt="conttrucion"
          class=" position-absolute w-100 h-100 top-0 screem">

        <div class="bg-color-3  vh-100">
        </div>

        <div
          class="position-absolute  d-flex flex-column justify-content-center align-items-center w-100 h-100 top-0   ">
          <div
            class="container-fluid text-light d-flex flex-column justify-content-center align-items-center  top-0  w-100">
            <div class="container text-center">
              <img src="<?= get_logo_inmobiliaria() ?>" alt="" srcset="" class="img-fluid " width="450">
            </div>

            <h2 class="text-uppercase fonts fonts-1 fonts-title text-center">¡ TU PROPIEDAD TE ESPERA !</h2>

            <img src="<?= ASSETS ?>/img/inicio/klipartz.com.png" alt="" class="img-fluid" width="300">
            <h6 class="text-center"><i class="fas fa-house text-danger"></i> Encuentra el espacio adecuado para tu
              negocios.</h6>
            <h6 class="text-center"><i class="fas fa-house text-danger"></i> Maximiza el potencial de tus propiedades.
            </h6>
            <h6 class="text-center"><i class="fas fa-house text-danger"></i> Invierte por nosotros.</h6>
            <a href="<?php echo base_url ?>/Inmobiliaria" type="button"
              class="btn text-light btn-danger m-1 text-uppercase font-monospace fonts-letra "
              style="transform: skewX( -22deg );"> <i class="fa-solid fa-arrow-right"></i> Ir a Inmobiliaria</a>
          </div>

        </div>

      </div>

    </div>
    <!-- seccion 6 -->

    <div class="section">
      <div class="position-relative  contenedor-video ">
        <img src="<?= ASSETS ?>/img/inicio/44349d57c83e39bb40641985e3d8584e.jpg" alt="conttrucion"
          class=" position-absolute w-100 h-100 top-0 screem">

        <div class="bg-color-3  vh-100">
        </div>
        <div class="position-absolute  d-flex flex-column  w-100 h-100 top-0  abajo-6">

          <div class=" position-relative text-center ">
            <div class="col-lg-12">
              <h1 class="text-light">NUESTROS CLIENTES</h1>


            </div>
            <footer class=" container-fluid position-relative  text-light  h-100 my-1">
              <div class="row ">

                <div class="footer bg-dark border-3 p-0 m-0 " style="padding:0;">

                  <div class=" owl-carousel owl-theme ">

                    <div class="item">
                      <img src="<?= ASSETS ?>/img/inicio/clientes/muni-ayacucho.png" alt="">
                    </div>
                    <div class="item">
                      <img src="<?= ASSETS ?>/img/inicio/clientes/direccion-regiona-educacion.jpeg" alt="">
                    </div>
                    <div class="item">
                      <img src="<?= ASSETS ?>/img/inicio/clientes/dubai.png" alt="">
                    </div>
                    <div class="item">
                      <img src="<?= ASSETS ?>/img/inicio/clientes/Los-entuciastas.png" alt="">
                    </div>
                    <div class="item">
                      <img src="<?= ASSETS ?>/img/inicio/clientes/essalud.png" alt="">
                    </div>
                    <div class="item">
                      <img src="<?= ASSETS ?>/img/inicio/clientes/casaHogarLosGorriones.png" alt="">
                    </div>
                    <div class="item">
                      <img src="<?= ASSETS ?>/img/inicio/clientes/GobiernoRegional.png" alt="">
                    </div>
                    <div class="item">
                      <img src="<?= ASSETS ?>/img/inicio/clientes/Filo-de-oso-Francia.png" alt="">
                    </div>

                    <div class="item">
                      <img src="<?= ASSETS ?>/img/inicio/clientes/muni-carmen-alto.png" alt="">
                    </div>
                    <div class="item">
                      <img src="<?= ASSETS ?>/img/inicio/clientes/direccion-regional-ayacucho.png" alt="">
                    </div>
                    <div class="item">
                      <img src="<?= ASSETS ?>/img/inicio/clientes/iconsa-sac.png" alt="">
                    </div>
                    <div class="item">
                      <img src="<?= ASSETS ?>/img/inicio/clientes/Alba-peru.png" alt="">
                    </div>
                    <div class="item">
                      <img src="<?= ASSETS ?>/img/inicio/clientes/karaoke-doremi.jpeg" alt="">
                    </div>


                    <div class="item">
                      <img src="<?= ASSETS ?>/img/inicio/clientes/muni-huanta.png" alt="">
                    </div>
                    <div class="item">
                      <img src="<?= ASSETS ?>/img/inicio/clientes/voraz.png" alt="">
                    </div>
                    <div class="item">
                      <img src="<?= ASSETS ?>/img/inicio/clientes/muniSanjuanButista.png" alt="">
                    </div>
                    <div class="item">
                      <img src="<?= ASSETS ?>/img/inicio/clientes/wiraccocha.png" alt="">
                    </div>


                  </div>
                </div>

                <div class="footer  ">
                  <footer class=" container-fluid position-relative  text-light  h-100 mt-3">
                    <div class="row ">

                      <div class="col-lg-6 col-md-12  h-100">
                        <h1 class="telefono mb-2 text-center text-uppercase ">
                          <i class="fa-solid fa-location-dot "></i>
                          Ubicación
                        </h1>

                        <div class="position-relative d-grid gap-1  text-center text-uppercase">
                          <a class="  text-light linck w-100 font-arial-narrow"
                            href="https://goo.gl/maps/y4gxa5KaXDnbgsE89" target="_blank">
                            <i class="fas fa-map-marker-alt text-danger"></i>
                            JR. LIBERTAD N°859 – AYACUCHO </a>

                          <a class="text-light  linck font-arial-narrow" href="https://goo.gl/maps/wV2C3SdKGtwbhj86A"
                            target="_blank"><i class="fas fa-map-marker-alt text-danger"></i>
                            URB. LUIS CARRANZA MZ A LOTE 14 – AYACUCHO </a>
                          <a class="   text-light linck  font-arial-narrow" href="tel:(010) 1234 4321"
                            target="_blank"><i class="fas fa-map-marker-alt  text-danger"></i>
                            Av. Universitaria s/n C-2, Nazarenas – AYACUCHO</a>
                          <a class="   text-light  linck font-arial-narrow" href="tel:(010) 1234 4321"
                            target="_blank"><i class="fas fa-map-marker-alt text-danger"></i>
                            AV. LIBERTADORES S/N – CARMEN ALTO – AYACUCHO </a>
                          <a class="link  text-light linck font-arial-narrow" href="tel:(010) 1234 4321"
                            target="_blank"><i class="fas fa-map-marker-alt text-danger"></i>
                            AV. GARCILASO DE LA VEGA 917 – LIMA </a>
                          <a class="link  text-light linck font-arial-narrow"
                            href="https://goo.gl/maps/TMMBvRMF33T45pxW7" target="_blank"><i
                              class="fas fa-map-marker-alt text-danger"></i>
                            Jr. Bellido 620 – AYACUCHO
                          </a>

                          <a class="link  text-light linck font-arial-narrow" target="_blank"> <i
                              class="fas fa-map-marker-alt text-danger"></i>Av. Cajamarquilla – LIMA </a>
                          <a class="link  text-light linck font-arial-narrow" target="_blank"> <i
                              class="fas fa-map-marker-alt text-danger"></i>Asoc. MARÍA Magdalena Mz A Lt 18 – AYACUCHO
                          </a>
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-12   ">
                        <h1 class="telefono mb-1 text-center text-uppercase ">
                          <i class="fa-solid fa-phone"></i>TELÉFONOS
                        </h1>
                        <div class="row text-justify">
                          <div class="col-xl-6 col-md-12">
                            <div class="d-flex justify-content-center align-items-center">
                              <a href="https://wa.link/w6dc3t" class="linck text-success font-arial-narrow"><i
                                  class="fab fa-whatsapp w-100" style="font-size: 2rem;"></i></a>
                              <a class=" text-light w-100 linck m-0 p-0 text-uppercase font-arial-narrow "
                                href="tel:51951543918">
                                <p><strong>Constructora:</strong> +51 951 543 918</p>
                              </a>

                            </div>
                            <div class="d-flex justify-content-center  text-uppercase align-items-center">
                              <a href="https://wa.link/vkcoej" class="linck text-success font-arial-narrow"><i
                                  class="fab fa-whatsapp" style="font-size: 2rem;"></i></a>
                              <a class=" text-light w-100  linck font-arial-narrow " href="tel:51989488494">

                                <p> <strong>Concretera:</strong> +51 989 488 494</p>
                              </a>

                            </div>
                            <div class="d-flex justify-content-center  text-uppercase font-arial-narrow align-items-center">
                              <a href="https://wa.link/hjegpy" class="linck text-success font-arial-narrow"><i
                                  class="fab fa-whatsapp" style="font-size: 2rem;"></i></a>
                              <a class=" text-light w-100 linck font-arial-narrow " href="tel:51966006552">
                                <p><strong> Inmobiliaria :</strong> +51 966 006 552</p>
                              </a>

                            </div>


                          </div>
                          <div class="col-xl-6 col-md-12">
                            <div class="d-flex justify-content-center  text-uppercase font-arial-narrow align-items-center">
                              <a href="https://wa.link/hjegpy" class="linck text-success font-arial-narrow"><i
                                  class="fab fa-whatsapp" style="font-size: 2rem;"></i></a>
                              <a class=" text-light w-100 linck font-arial-narrow " href="tel:51993959395">
                                <p><strong> Titulaciones :</strong> +51 993 959 395</p>
                              </a>

                            </div>
                            <div class="d-flex justify-content-center align-items-center">

                              <i class="fas fa-phone  text-danger m-0 p-0 linck" style="font-size: 1.5rem;"></i>
                              <a class=" text-light w-100  linck font-arial-narrow text-uppercase" href="tel:066638675">
                                <p><strong>General:</strong> +066 638675</p>
                              </a>
                            </div>

                          </div>
                        </div>

                      </div>
                    </div>
                  </footer>
                </div>
              </div>
          </div>
        </div>
      </div>

    </div>
    <!-- end -->
  </div>

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
        <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="" width="30"> Concretera
      </a>
      </br>

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

    <a class=" icons-hover-whastapp" href="https://www.facebook.com/TERRALPA" target="_blank">
      <img src="<?= ASSETS ?>/img/inicio/face.png" alt="" width="50">
    </a>
  </div>

  <!-- scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"
    integrity="sha512-JRlcvSZAXT8+5SQQAvklXGJuxXTouyq8oIMaYERZQasB8SBDHZaUbeASsJWpk0UUrf89DP3/aefPPrlMR1h1yQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/js/bootstrap.min.js" integrity="sha512-eHx4nbBTkIr2i0m9SANm/cczPESd0DUEcfl84JpIuutE6oDxPhXvskMR08Wmvmfx5wUpVjlWdi82G5YLvqqJdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <script src="<?= ASSETS ?>/js/fullpage.js"></script>
  <script src="<?= ASSETS ?>/js/full-page-scroll.js"></script>


  <script src="<?= ASSETS ?>/js/clientes.js"></script>

  <!-- end script -->

  <!-- script contador -->
  <script>
    const counters = document.querySelectorAll(".counter");

    counters.forEach((counter) => {
      counter.innerText = "0";
      const updateCounter = () => {
        const target = +counter.getAttribute("data-target");
        const count = +counter.innerText;
        const increment = target / 390;
        if (count < target) {
          counter.innerText = `${Math.ceil(count + increment)}`;
          setTimeout(updateCounter, 1);
        } else counter.innerText = target;
      };
      updateCounter();
    });

  </script>
  <!-- ednd -->

  <!-- slider carrosel -->
  <script>
    let items = document.querySelectorAll('.carousel1 .carousel-item')

    items.forEach((el) => {
      const minPerSlide = 4
      let next = el.nextElementSibling
      for (var i = 1; i < minPerSlide; i++) {
        if (!next) {
          // wrap carousel by using first child
          next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
      }
    })
  </script>
  <!-- end -->

  <script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({

      loop: true,
      margin: 10,
      items: 6,
      autoplay: true,
      autoplayTimeout: 700,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 6
        },
        600: {
          items: 6
        },
        1000: {
          items: 9
        },

      }


    });

  </script>

</body>

</html>

<?php messenger() ?>