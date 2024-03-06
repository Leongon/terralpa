<style>
  .nav-Titulacion {
    background-color: #6B000D !important;
  
  }
  .Titulaciones{
    color: #6B000D;
  }
</style>
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>



<?php nav() ?>


<!-- end-->
<main>
  <div class="hero3 vh-100 ">
    <div class="px-4 pt-4 pt-md-10 pb-5 mb-5 text-center card-modificado-1 vh-100">
      <img src="<?= get_logo_constructora() ?>" alt="Logo" class="img-fluid " width="500">

      <div class="col-lg-6 mx-auto">
        <p class=" mb-4 text-light text-center card-modificado-1 p-1 ">
          Realizamos toda clase de proyectos, desde la Lotización del predio matriz, independización de tu predio,
          titulación del predio, inscripción, diseño del proyecto, asesoría en el financiamiento, ejecución de la obra
          u otros, hasta la Declaratoria de Fábrica en la SUNARP.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          
          <a href="tel:51993959395" type="button" class="btn btn-outline-light btn-lg px-4">Llámanos: +51 993 959 395</a>
        </div>
      </div>
    </div>
  </div><!-- /.hero -->



  <div class="container my-3  ">
    <form class="d-flex justify-content-center my-3" role="search">
      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar" id="buscador"
        style="width: 30rem;">
      <button class="btn btn-outline-danger" type="submit">Buscar</button>
    </form>

    <div class="row preguntas " data-masonry="{&quot;percentPosition&quot;: true }">

    </div>


  </div><!-- /.row -->
  </div><!-- /.container.cards -->

</main>

<?php footer() ?>

<div class=" btn-group dropup position-fixed fixed-bottom d-flex gap-2   w-10">

  <a class=" icons-hover-whastapp "
    href="https://api.whatsapp.com/send?phone=51993959395&text=Hola,Con el area de Titulaciones Terrralpa%3F%2C%20Quisiera%20saber%20mas%20sobre%20sus%20productos%0A%0A"
    target="_blank">
    <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="" width="50"> </a></br>



  <a class=" icons-hover-whastapp   " href="https://www.facebook.com/TERRALPA" target="_blank">
    <img src="<?= ASSETS ?>/img/inicio/face.png" alt="" width="50">
  </a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?= ASSETS ?>/js/faq.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
  integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(document).ready(function () {
    $('#buscador').keyup(function () {
      var nombres = $('.nombres');
      var buscando = $(this).val();
      var item = '';
      for (var i = 0; i < nombres.length; i++) {
        item = $(nombres[i]).html().toLowerCase();
        for (var x = 0; x < item.length; x++) {
          if (buscando.length == 0 || item.indexOf(buscando) > -1) {
            $(nombres[i]).parents('.item').show();
          } else {
            $(nombres[i]).parents('.item').hide();
          }
        }
      }
    });
  });
</script>