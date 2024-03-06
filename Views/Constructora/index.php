<style>
  .nav-constructora {
    background-color: #6B000D !important;
  }

  .constructora {
    color: #6B000D !important;

  }

  .texto-justificado {
    font-size: 2vh !important;
  }

  .text-light {
    text-decoration: none;
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
  .shadows{
   
  }
  .card-body{
    margin-top: 15px;
 

  }
</style>
<?php nav() ?>
<script>

  document.querySelector(".imgLogo").src = "<?= get_logo_constructora() ?>";

</script>
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
  integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
  async></script>


<!-- end-->


<main class=" text-white vh-100">

  <video autoplay="" muted="" loop="" id="bg-video" class="w-100 h-100" style="min-width: 100%;
    min-height: 100vh;
    max-width: 100%;
    max-height: 100vh;
    object-fit: cover;">
    <source src="<?= ASSETS ?>/img/inicio/X2Download.app-intro.mp4" type="video/mp4">
  </video>
  <div class="card-img-overlay p-0  card-modificado-1">

    <div class="  d-flex p-4 w-100 h-100 text-center align-items-center ">
      <div class="row text-center d-flex align-items-center  justify-content-center">
        <div class="col-md-12 flex-column wletras  p-3 ">

          <img src="<?= get_logo_constructora() ?>" alt="" class="img-fluid w-75">
          <div class="container card-modificado-1">
            <p class=" mt-4"> "Nuestra Pasión es Construir, Nuestro Compromiso es Solucionar"</p>
            <p class=" text-light  position-relative d-none d-md-block p-2 ">
               La "Cultura Terralpa" es fomentada y fundamental en cada empleado, su filosofía de trabajo,
              ofrece calidad y eficiencia en cada proyecto.
              Como fabricantes de materiales prefabricados, aseguran una construcción sin complicaciones
              y con alta calidad.
              Su compromiso con la cultura laboral y calidad en materiales hace de ellos una opción confiable
              para construir tu hogar. Solución prefabricada para construcción sin complicaciones.
            </p>

          </div>
          <div class="d-md-flex  justify-content-center">

            <a href="tel:51951543918" type="button" class="btn btn-outline-light  text-center my-2">
              Llámanos: +51 951 543 918</a>
          </div>
        </div>

      </div>
    </div>
  </div>

</main>
<div class="container text-center my-4">
  <img src="<?= ASSETS ?>/img/Constructora/Portada/pasos-construccion.png" class="img-fluid" alt="" srcset="" width="700">
</div>
<div class="container cards my-4">
  <h2 class="mb-4 text-center fonts_google  p-2"> DISEÑAMOS Y CONSTRUIMOS </h2>
  <div class="row text-light text-center">

    <div class="whos-speaking-area speakers pad100">
      <div class="container ">

        <div class="row mb-5" data-masonry="{&quot;percentPosition&quot;: true }">
          <!-- image-1 -->
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
            <div class="speakers xs-mb30 border-3 border-dark mb-3 shadows bg-transparent border-0">
              <a class="Card-click text-light " href="<?php echo base_url; ?>/Constructora/Condominios"
                style="text-decoration:none;">
                <div class="spk-img ">

                  <img src="<?= ASSETS ?>/img/Constructora/Portada/CONDOMINIOS.png" alt="" width="100%"
                    height="200">


                  <div class="card-body">
                    <h5 class="card-title text-center">CONDOMINIOS</h5>
               
                    <p class="btn btn-danger">Ver Modelos</p>


                  </div>

                  <ul>
                    <img src="<?= ASSETS ?>\img\icono\icono-constructora.png" class="text-light" alt="">
                    <p class="text-center text-dark"> Ver mas...</p>
                  </ul>
                </div>
              </a>

            </div>
          </div>
          <!-- image-2 -->
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
            <div class="speakers xs-mb30 border-3 border-dark mb-3 shadows bg-transparent border-0">
              <a class="Card-click text-light " href="<?php echo base_url; ?>/Constructora/Multifamiliares"
                style="text-decoration:none;">
                <div class="spk-img ">

                  <img src="<?= ASSETS ?>/img/Constructora/Portada/CASAS-MULTIFAMILIARES.jpeg" alt="" width="100%"
                    height="200">



                  <div class="card-body">
                    <h5 class="card-title text-center">CASAS MULTIFAMILIARES</h5>
                 
                    <p class="btn btn-danger">Ver Modelos</p>


                  </div>

                  <ul>
                    <img src="<?= ASSETS ?>\img\icono\icono-constructora.png" class="text-light" alt="">
                    <p class="text-center text-dark"> Ver mas...</p>
                  </ul>
                </div>
              </a>

            </div>
          </div>
          <!-- image-3 -->
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
            <div class="speakers xs-mb30 border-3 border-dark mb-3 shadows bg-transparent border-0">
              <a class="Card-click text-light " href="<?php echo base_url; ?>/Constructora/Unifamiliares"
                style="text-decoration:none;">
                <div class="spk-img ">

                  <img src="<?= ASSETS ?>/img/Constructora/Portada/UNIFAMILIARES.jpeg" alt="" width="100%"
                    height="200">


                  <div class="card-body">
                    <h5 class="card-title text-center ">CASAS UNIFAMILIARES</h5>
        
                    <p class="btn btn-danger">Ver Modelos</p>


                  </div>

                  <ul>
                    <img src="<?= ASSETS ?>\img\icono\icono-constructora.png" class="text-light" alt="">
                    <p class="text-center text-dark"> Ver mas...</p>
                  </ul>
                </div>
              </a>

            </div>
          </div>
          <!-- image-4 -->
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
            <div class="speakers xs-mb30 border-3 border-dark mb-3 shadows bg-transparent border-0">
              <a class="Card-click text-light " href="<?php echo base_url; ?>/Constructora/Campo"
                style="text-decoration:none;">
                <div class="spk-img ">

                  <img src="<?= ASSETS ?>/img/Constructora/Portada/CAMPO.jpeg" alt="" width="100%"
                    height="200">



                  <div class="card-body">
                    <h5 class="card-title text-center">CASAS DE CAMPO</h5>
                
                    <p class="btn btn-danger">Ver Modelos</p>


                  </div>

                  <ul>
                    <img src="<?= ASSETS ?>\img\icono\icono-constructora.png" class="text-light" alt="">
                    <p class="text-center text-dark"> Ver mas...</p>
                  </ul>
                </div>
              </a>

            </div>
          </div>
          <!-- image-12-->
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
            <div class="speakers xs-mb30 border-3 border-dark mb-3 shadows bg-transparent border-0">
              <a class="Card-click text-light " href="<?php echo base_url; ?>/Constructora/Instituciones"
                style="text-decoration:none;">
                <div class="spk-img ">

                  <img src="<?= ASSETS ?>/img/Constructora/Portada/instituciones.jpeg" alt="" width="100%"
                    height="200">


                  <div class="card-body">
                    <h5 class="card-title text-center">INSTITUCIONES </h5>
               
                    <p class="btn btn-danger">Ver Modelos</p>


                  </div>

                  <ul>
                    <img src="<?= ASSETS ?>\img\icono\icono-constructora.png" class="text-light" alt="">
                    <p class="text-center text-dark"> Ver mas...</p>
                  </ul>
                </div>
              </a>

            </div>
          </div>

          <!-- image-5 -->
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
            <div class="speakers xs-mb30 border-3 border-dark mb-3 shadows bg-transparent border-0">
              <a class="Card-click text-light " href="<?php echo base_url; ?>/Constructora/Comerciales"
                style="text-decoration:none;">
                <div class="spk-img ">

                  <img src="<?= ASSETS ?>/img/Constructora/Portada/COMERCIALES.jpeg" alt="" width="100%"
                    height="200">


                  <div class="card-body">
                    <h5 class="card-title text-center">EDIFICIOS COMERCIALES</h5>
                   
                    <p class="btn btn-danger">Ver Modelos</p>

                  </div>

                  <ul>
                    <img src="<?= ASSETS ?>\img\icono\icono-constructora.png" class="text-light" alt="">
                    <p class="text-center text-dark"> Ver mas...</p>
                  </ul>
                </div>
              </a>

            </div>
          </div>

          <!-- image-6 -->
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
            <div class="speakers xs-mb30 border-3 border-dark mb-3 shadows bg-transparent border-0">
              <a class="Card-click text-light " href="<?php echo base_url; ?>/Constructora/Departamentos"
                style="text-decoration:none;">
                <div class="spk-img ">

                  <img src="<?= ASSETS ?>/img/Constructora/Portada/DEPARTAMENTOS.jpeg" alt="" width="100%"
                    height="200">



                  <div class="card-body">
                    <h5 class="card-title text-center">DEPARTAMENTOS</h5>
                
                    <p class="btn btn-danger">Ver Modelos</p>


                  </div>

                  <ul>
                    <img src="<?= ASSETS ?>\img\icono\icono-constructora.png" class="text-light" alt="">
                    <p class="text-center text-dark"> Ver mas...</p>
                  </ul>
                </div>
              </a>

            </div>
          </div>
          <!-- image-7 -->
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
            <div class="speakers xs-mb30 border-3 border-dark mb-3 shadows bg-transparent border-0">
              <a class="Card-click text-light " href="<?php echo base_url; ?>/Constructora/Interiores"
                style="text-decoration:none;">
                <div class="spk-img ">

                  <img src="<?= ASSETS ?>/img/Constructora/Portada/DISEÑO-INTERIORES.jpeg" alt="" width="100%"
                    height="200">


                  <div class="card-body">
                    <h5 class="card-title text-center">DISEÑO DE INTERIORES</h5>
                
                    <p class="btn btn-danger">Ver Modelos</p>
                  </div>

                  <ul>
                    <img src="<?= ASSETS ?>\img\icono\icono-constructora.png" class="text-light" alt="">
                    <p class="text-center text-dark"> Ver mas...</p>
                  </ul>
                </div>
              </a>

            </div>
          </div>
          <!-- image-8 -->
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
            <div class="speakers xs-mb30 border-3 border-dark mb-3 shadows bg-transparent border-0">
              <a class="Card-click text-light " href="<?php echo base_url; ?>/Constructora/salacocina"
                style="text-decoration:none;">
                <div class="spk-img ">

                  <img src="<?= ASSETS ?>/img/Constructora/Portada/SALA-COCINA.jpeg" alt="" width="100%"
                    height="200">


                  <div class="card-body">
                    <h5 class="card-title text-center">SALA COCINA</h5>
                
                    <p class="btn btn-danger">Ver Modelos</p>
                  </div>

                  <ul>
                    <img src="<?= ASSETS ?>\img\icono\icono-constructora.png" class="text-light" alt="">
                    <p class="text-center text-dark"> Ver mas...</p>
                  </ul>
                </div>
              </a>

            </div>
          </div>
          <!-- image-9 -->
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
            <div class="speakers xs-mb30 border-3 border-dark mb-3 shadows bg-transparent border-0">
              <a class="Card-click text-light " href="<?php echo base_url; ?>/Constructora/Cocina"
                style="text-decoration:none;">
                <div class="spk-img ">

                  <img src="<?= ASSETS ?>/img/Constructora/Portada/COCINA.jpeg" alt="" width="100%"
                    height="200">


                  <div class="card-body">
                    <h5 class="card-title text-center">COCINA</h5>
               
                    <p class="btn btn-danger">Ver Modelos</p>
                  </div>

                  <ul>
                    <img src="<?= ASSETS ?>\img\icono\icono-constructora.png" class="text-light" alt="">
                    <p class="text-center text-dark"> Ver mas...</p>
                  </ul>
                </div>
              </a>

            </div>
          </div>
          <!-- image-10 -->
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
            <div class="speakers xs-mb30 border-3 border-dark mb-3 shadows bg-transparent border-0">
              <a class="Card-click text-light " href="<?php echo base_url; ?>/Constructora/SSHH"
                style="text-decoration:none;">
                <div class="spk-img ">

                  <img src="<?= ASSETS ?>/img/Constructora/Portada/SS.HH.jpeg" alt="" width="100%"
                    height="200">


                  <div class="card-body">
                    <h5 class="card-title text-center">SS.HH</h5>
                   
                    <p class="btn btn-danger">Ver Modelos</p>
                  </div>

                  <ul>
                    <img src="<?= ASSETS ?>\img\icono\icono-constructora.png" class="text-light" alt="">
                    <p class="text-center text-dark"> Ver mas...</p>
                  </ul>
                </div>
              </a>

            </div>
          </div>
          <!-- image-11 -->
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
            <div class="speakers xs-mb30 border-3 border-dark mb-3 shadows bg-transparent border-0">
              <a class="Card-click text-light " href="<?php echo base_url; ?>/Constructora/Oficina"
                style="text-decoration:none;">
                <div class="spk-img ">

                  <img src="<?= ASSETS ?>/img/Constructora/Portada/OFICINA.jpeg" alt="" width="100%"
                    height="200">


                  <div class="card-body">
                    <h5 class="card-title text-center">OFICINA</h5>
                 
                    <p class="btn btn-danger">Ver Modelos</p>
                  </div>

                  <ul>
                    <img src="<?= ASSETS ?>\img\icono\icono-constructora.png" class="text-light" alt="">
                    <p class="text-center text-dark"> Ver mas...</p>
                  </ul>
                </div>
              </a>

            </div>
          </div>

          <!-- image-12 -->
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
            <div class="speakers xs-mb30 border-3 border-dark mb-3 shadows bg-transparent border-0">
              <a class="Card-click text-light " href="<?php echo base_url; ?>/Constructora/Dormitorio"
                style="text-decoration:none;">
                <div class="spk-img ">

                  <img src="<?= ASSETS ?>/img/Constructora/Portada/DORMITORIO.jpeg" alt="" width="100%"
                    height="200">


                  <div class="card-body">
                    <h5 class="card-title text-center">DORMITORIO</h5>
                 
                    <p class="btn btn-danger">Ver Modelos</p>
                  </div>

                  <ul>
                    <img src="<?= ASSETS ?>\img\icono\icono-constructora.png" class="text-light" alt="">
                    <p class="text-center text-dark"> Ver mas...</p>
                  </ul>
                </div>
              </a>

            </div>
          </div>

          <!-- image-13 -->
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
            <div class="speakers xs-mb30 border-3 border-dark mb-3 shadows bg-transparent border-0">
              <a class="Card-click text-light " href="<?php echo base_url; ?>/Constructora/Terraza"
                style="text-decoration:none;">
                <div class="spk-img ">

                  <img src="<?= ASSETS ?>/img/Constructora/Portada/terraza.jpg" alt="" width="100%"
                    height="200">
                  <div class="card-body">
                    <h5 class="card-title text-center">TERRAZA</h5>
                  
                    <p class="btn btn-danger">Ver Modelos</p>
                  </div>

                  <ul>
                    <img src="<?= ASSETS ?>\img\icono\icono-constructora.png" class="text-light" alt="">
                    <p class="text-center text-dark"> Ver mas...</p>
                  </ul>
                </div>
              </a>

            </div>
          </div>

          <!-- image-14 -->
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
            <div class="speakers xs-mb30 border-3 border-dark mb-3 shadows bg-transparent border-0">
              <a class="Card-click text-light " href="<?php echo base_url; ?>/Constructora/Escalera"
                style="text-decoration:none;">
                <div class="spk-img ">

                  <img src="<?= ASSETS ?>/img/Constructora/Portada/escalera.png" alt="" width="100%"
                    height="200">
                  <div class="card-body">
                    <h5 class="card-title text-center">ESCALERA</h5>
                   
                    <p class="btn btn-danger">Ver Modelos</p>
                  </div>

                  <ul>
                    <img src="<?= ASSETS ?>\img\icono\icono-constructora.png" class="text-light" alt="">
                    <p class="text-center text-dark"> Ver mas...</p>
                  </ul>
                </div>
              </a>

            </div>
          </div>
          <!-- image-15 -->
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
            <div class="speakers xs-mb30 border-3 border-dark mb-3 shadows bg-transparent border-0">
              <a class="Card-click text-light " href="<?php echo base_url; ?>/Constructora/Picinas"
                style="text-decoration:none;">
                <div class="spk-img ">

                  <img src='<?= ASSETS ?>/img/Constructora/Portada/picina.png' alt="" width="100%"
                    height="200">
                  <div class="card-body">
                    <h5 class="card-title text-center">PISCINA</h5>
                    <p class="btn btn-danger">Ver Modelos</p>
                  </div>

                  <ul>
                    <img src="<?= ASSETS ?>\img\icono\icono-constructora.png" class="text-light" alt="">
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

  </div><!-- /.row -->
</div><!-- /.container.cards -->



<?php footer() ?>



<div class=" btn-group dropup position-fixed fixed-bottom d-flex gap-2   w-10">





  <a class="icons-hover-whastapp  "
    href="https://api.whatsapp.com/send?phone=51951543918&text=Hola Terrralpa , Con la Constructora ?, Quisiera saber mas sobre sus productos."
    target="_blank">
    <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="" width="50">
  </a>




  <a class=" icons-hover-whastapp   " href="https://www.facebook.com/TERRALPA" target="_blank">
    <img src="<?= ASSETS ?>/img/inicio/face.png" alt="" width="50">
  </a>
</div>