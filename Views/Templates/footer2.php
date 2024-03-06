<section class="contact-us " id="contact" style="background-color: black;">

  <div class="container-fluid footer">
    <div class="row">
      <div class="col-lg-2 col-md-12">
        <p class="text-light text-center my-4">NUESTROS CLIENTES </p>
      </div>
      <div class="col-lg-10 col-md-12">
        <div class=" owl-carousel owl-theme">
          
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


        </div>
      </div>
    </div>
  </div>

  <div class="footer ">
    <footer class=" container p-1 text-light d-flex align-items-center justify-content-center      ">
      <div class="row w-75 my-2 mb-5 mb-lg-0 ">
        <div class="col-lg-4 col-md-12 d-md-none">
          <div class="d-flex justify-content-center ">
            <h1 class="telefono mb-3 text-center justify-content-center"><i class="fa-solid fa-phone"></i>TELÉFONOS</h1>
          </div>
        </div>

        <div class="col-lg-4 col-md-12">
          <div class="d-flex   justify-content-center">
            <a href="https://wa.link/w6dc3t" class="linck text-success text-center  ">
              <i class="fab fa-whatsapp" style="font-size: 2rem;"></i></a>
            <a class=" text-light w-100 linck m-0 p-0  " href="tel:51951543918">
              <p class=" constructora"><strong class="text-uppercase">Constructora:</strong>+51 951 543 918</p>
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 d-none d-lg-block">
          <div class="d-flex  ">
            <h1 class="telefono text-center"><i class="fa-solid fa-phone">

              </i>TELÉFONOS</h1>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="d-flex ">
            <a href="https://wa.link/vkcoej" class="linck text-success"><i class="fab fa-whatsapp"
                style="font-size: 2rem;"></i></a>
            <a class=" text-light w-100  linck " href="tel:51989488494">

              <p class=" Concretera"> <strong>CONCRETERA:</strong> +51 989 488 494</p>
            </a>

          </div>
        </div>

        <div class="col-lg-4 col-md-12">
          <div class="d-flex    ">
            <a href="https://wa.link/hjegpy" class="linck text-success"><i class="fab fa-whatsapp"
                style="font-size: 2rem;"></i></a>
            <a class=" text-light w-100 linck  " href="tel:51966006552">
              <p class=" inmobiliaria"><strong> INMOBILIARIA :</strong style="font-size:1px !importand"> +51 966 006 552</p>
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-12">
          <div class="d-flex ">
            <a href="https://wa.link/hjegpy" class="linck text-success"><i class="fab fa-whatsapp"
                style="font-size: 2rem;"></i></a>
            <a class=" text-light w-100 linck  " href="tel:51993959395">
              <p class=" Titulaciones"><strong> TITULACIONES :</strong> +51 993 959 395</p>
            </a>

          </div>
        </div>

       

        <div class="col-lg-4 col-md-12">
          <div class="d-flex mb-0 ">
            <i class="fas fa-phone  m-0 p-0 linck text-success" style="font-size: 1.5rem;">
            </i>
            <a class=" text-light w-100  linck " href="tel:066638675">
              <p><strong class="text-uppercase ">GENERAL :</strong> +066 638675</p>
            </a>

          </div>
        </div>

        

      </div>

    </footer>
  </div>
</section>



<script src="<?= ASSETS ?>/js/clientes.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

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
        items: 3
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

</body>

</html>
<?php messenger() ?>