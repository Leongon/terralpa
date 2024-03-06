<style>
  .nav-concretera {
    background-color: #6B000D !important;
  }
  .Concretera{
    color: #6B000D;
  }

  .whos-speaking-area .speakers .spk-img {
    position: relative;
  }

  .whos-speaking-area .speakers .spk-img:before {
    background: rgb(255 255 255 / 80%);
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;

    -webkit-transform: scale(0);
    -ms-transform: scale(0);
    transform: scale(0);
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
    z-index: 5;
  }

  .whos-speaking-area .speakers .spk-img:hover:before {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
  }

  .whos-speaking-area .speakers .spk-img img {
    width: 100%;

  }

  .whos-speaking-area .speakers .spk-img ul {
    position: absolute;

    top: 15%;

    width: 100%;

    opacity: 0;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
  }

  .whos-speaking-area .speakers .spk-img ul img {
    position: relative;
    right: 20px;

  }

  .whos-speaking-area .speakers .spk-img:hover ul {

    opacity: 1;
    z-index: 9;
  }
</style>
<?php nav() ?>
<script>

    document.querySelector(".imgLogo").src="<?= get_logo_concretera()?>";
 
</script> 
<main class=" text-white vh-100">

  <video autoplay="" muted="" loop="" id="bg-video" class="w-100 h-100" style="min-width: 100%;
      min-height: 100vh;
      max-width: 100%;
      max-height: 100vh;
      object-fit: cover;">
    <source src="<?= ASSETS ?>\img\Concretera\proyecto-2.mp4" type="video/mp4">
  </video>
  <div class="card-img-overlay p-0  ">

    <div class="  d-flex p-4 w-100 h-100 text-center align-items-center card-modificado-1">
      <div class="row text-center d-flex align-items-center  justify-content-center">
        <div class="col-md-12 flex-column wletras  p-3 ">
          
          <img src="<?= get_logo_concretera() ?>" alt="" class="img-fluid w-75">
          <div class="container card-modificado-1 p-3">
          <p class=" mt-4"> "Nuestra Pasión es Construir, Nuestro Compromiso es Solucionar"</p>
          <p class=" text-light texto-justificado position-relative d-none d-md-block  ">
            La "Cultura Terralpa" es fomentada y fundamental en cada empleado, su filosofía de trabajo,
            ofrece calidad y eficiencia en cada proyecto.
            Como fabricantes de materiales prefabricados, aseguran una construcción sin complicaciones
            y con alta calidad.
            Su compromiso con la cultura laboral y calidad en materiales hace de ellos una opción confiable
            para construir tu hogar. Solución prefabricada para construcción sin complicaciones.
          </p>
          </div>
          <div class="d-md-flex gap-4 justify-content-center">

            <a href="tel:51 989 488 494" type="button" class="btn btn-outline-light  text-center my-2">
              Llámanos: +51 989 488 494</a>
          </div>
        </div>

      </div>
    </div>
  </div>

</main>

<section class="mb-1">

  <div class="container cards  my-4">
    <h2 class="mb-4 text-center">
      NUESTROS PRODUCTOS </h2>
    <div class="container-fluid  ">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

      <div class="whos-speaking-area speakers pad100">
        <div class="container">

          <div class="row mb-5">
            <!-- image-1 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
              <div class="speakers xs-mb30 border-3 border-dark mb-3">
                <a class="Card-click " href="<?php echo base_url; ?>/Concretera/Detalles" style="text-decoration:none;">
                  <div class="spk-img ">
                    <img class="img-fluid" src="<?= ASSETS ?>\img\Concretera\portada\1.png" alt="trainer-img" />
                    <ul>
                      <img src="<?= ASSETS ?>\img\icono\cerco.png" class="text-light" alt="">
                      <p class="text-center text-dark"> Ver mas...</p>
                    </ul>
                  </div>
                </a>

              </div>
            </div>
            <!-- image-2 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 ">
              <div class="speakers xs-mb30 border-3 border-dark mb-3">
                <a class="Card-click " href="<?php echo base_url; ?>/Concretera/Detalles1"
                  style="text-decoration:none;">
                  <div class="spk-img ">
                    <img class="img-fluid" src="<?= ASSETS ?>\img\Concretera\portada\2.png" alt="trainer-img" />
                    <ul>
                      <img src="<?= ASSETS ?>\img\icono\cerco-1.png" class="text-light" alt="">
                      <p class="text-center text-dark"> Ver mas...</p>
                    </ul>
                  </div>
                </a>

              </div>
            </div>
            <!-- image-3 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
              <div class="speakers xs-mb30 border-3 border-dark mb-3">
                <a class="Card-click " href="<?php echo base_url; ?>/Concretera/Detalles2"
                  style="text-decoration:none;">
                  <div class="spk-img ">
                    <img class="img-fluid" src="<?= ASSETS ?>\img\Concretera\portada\3.png" alt="trainer-img" />
                    <ul>
                      <img src="<?= ASSETS ?>\img\icono\cerco-2.png" class="text-light" alt="">
                      <p class="text-center text-dark"> Ver mas...</p>
                    </ul>
                  </div>
                </a>

              </div>
            </div>
            <!-- image-4 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 ">
              <div class="speakers xs-mb30 border-3 border-dark mb-3">
                <a class="Card-click " href="<?php echo base_url; ?>/Concretera/Detalles3"
                  style="text-decoration:none;">
                  <div class="spk-img ">
                    <img class="img-fluid" src="<?= ASSETS ?>\img\Concretera\portada\4.png" alt="trainer-img" />
                    <ul>
                      <img src="<?= ASSETS ?>\img\icono\cerco-3.png" class="text-light" alt="">
                      <p class="text-center text-dark"> Ver mas...</p>
                    </ul>
                  </div>
                </a>

              </div>
            </div>
            <!-- image-12-->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 ">
              <div class="speakers xs-mb30 border-3 border-dark mb-3">
                <a class="Card-click " href="<?php echo base_url; ?>/Concretera/Detalles11"
                  style="text-decoration:none;">
                  <div class="spk-img ">
                    <img class="img-fluid" src="<?= ASSETS ?>\img\Concretera\portada\12.png" alt="trainer-img" />
                    <ul>
                      <img src="<?= ASSETS ?>\img\icono\image-13.png" class="text-light" alt="">
                      <p class="text-center text-dark"> Ver mas...</p>
                    </ul>
                  </div>
                </a>

              </div>
            </div>

            <!-- image-5 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
              <div class="speakers xs-mb30 border-3 border-dark mb-3">
                <a class="Card-click " href="<?php echo base_url; ?>/Concretera/Detalles4"
                  style="text-decoration:none;">
                  <div class="spk-img ">
                    <img class="img-fluid" src="<?= ASSETS ?>\img\Concretera\portada\5.png" alt="trainer-img" />
                    <ul>
                      <img src="<?= ASSETS ?>\img\icono\image-5.png" class="text-light" alt="">
                      <p class="text-center text-dark"> Ver mas...</p>
                    </ul>
                  </div>
                </a>

              </div>
            </div>

            <!-- image-6 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 ">
              <div class="speakers xs-mb30 border-3 border-dark mb-3">
                <a class="Card-click " href="<?php echo base_url; ?>/Concretera/Detalles5"
                  style="text-decoration:none;">
                  <div class="spk-img ">
                    <img class="img-fluid" src="<?= ASSETS ?>\img\Concretera\portada\6.png" alt="trainer-img" />
                    <ul>
                      <img src="<?= ASSETS ?>\img\icono\image-6.png" class="text-light" alt="">
                      <p class="text-center text-dark"> Ver mas...</p>
                    </ul>
                  </div>
                </a>

              </div>
            </div>
            <!-- image-7 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
              <div class="speakers xs-mb30 border-3 border-dark mb-3">
                <a class="Card-click " href="<?php echo base_url; ?>/Concretera/Detalles6"
                  style="text-decoration:none;">
                  <div class="spk-img ">
                    <img class="img-fluid" src="<?= ASSETS ?>\img\Concretera\portada\7.png" alt="trainer-img" />
                    <ul>
                      <img src="<?= ASSETS ?>\img\icono\image-7.png" class="text-light" alt="">
                      <p class="text-center text-dark"> Ver mas...</p>
                    </ul>
                  </div>
                </a>

              </div>
            </div>
            <!-- image-8 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 ">
              <div class="speakers xs-mb30 border-3 border-dark mb-3">
                <a class="Card-click " href="<?php echo base_url; ?>/Concretera/Detalles7"
                  style="text-decoration:none;">
                  <div class="spk-img ">
                    <img class="img-fluid" src="<?= ASSETS ?>\img\Concretera\portada\8.png" alt="trainer-img" />
                    <ul>
                      <img src="<?= ASSETS ?>\img\icono\image-8.png" class="text-light" alt="">
                      <p class="text-center text-dark"> Ver mas...</p>
                    </ul>
                  </div>
                </a>

              </div>
            </div>
            <!-- image-9 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
              <div class="speakers xs-mb30 border-3 border-dark mb-3">
                <a class="Card-click " href="<?php echo base_url; ?>/Concretera/Detalles8"
                  style="text-decoration:none;">
                  <div class="spk-img ">
                    <img class="img-fluid" src="<?= ASSETS ?>\img\Concretera\portada\9.png" alt="trainer-img" />
                    <ul>
                      <img src="<?= ASSETS ?>\img\icono\image-9.png" class="text-light" alt="">
                      <p class="text-center text-dark"> Ver mas...</p>
                    </ul>
                  </div>
                </a>

              </div>
            </div>
            <!-- image-10 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 ">
              <div class="speakers xs-mb30 border-3 border-dark mb-3">
                <a class="Card-click " href="<?php echo base_url; ?>/Concretera/Detalles9"
                  style="text-decoration:none;">
                  <div class="spk-img ">
                    <img class="img-fluid" src="<?= ASSETS ?>\img\Concretera\portada\10.png" alt="trainer-img" />
                    <ul>
                      <img src="<?= ASSETS ?>\img\icono\image-10.png" class="text-light" alt="">
                      <p class="text-center text-dark"> Ver mas...</p>
                    </ul>
                  </div>
                </a>

              </div>
            </div>
            <!-- image-11 -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
              <div class="speakers xs-mb30 border-3 border-dark mb-3">
                <a class="Card-click " href="<?php echo base_url; ?>/Concretera/Detalles10"
                  style="text-decoration:none;">
                  <div class="spk-img ">
                    <img class="img-fluid" src="<?= ASSETS ?>\img\Concretera\portada\11.png" alt="trainer-img" />
                    <ul>
                      <img src="<?= ASSETS ?>\img\icono\image-11.png" class="text-light" alt="">
                      <p class="text-center text-dark"> Ver mas...</p>
                    </ul>
                  </div>
                </a>

              </div>
            </div>

          </div>

        </div>
        <!-- /container end-->
      </div>
    </div>

  </div>
  <!-- 2 -->

</section>

<?php footer() ?>

<div class=" btn-group dropup position-fixed fixed-bottom d-flex gap-2 p-3  w-10">



  <a class=" icons-hover-whastapp linck w-100 p-1 "
    href="https://api.whatsapp.com/send?phone=51989488494&text=Hola%20%2C%20Con%20la%20Concretera%20Terrralpa%3F%2C%20Quisiera%20saber%20mas%20sobre%20sus%20productos"
    target="_blank">
    <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="" width="50">
  </a>
  </br>



  <a class=" icons-hover-whastapp   " href="https://www.facebook.com/TERRALPA" target="_blank">
    <img src="<?= ASSETS ?>/img/inicio/face.png" alt="" width="50">
  </a>
</div>

