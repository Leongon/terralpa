<style>
  .nav-Titulacion {
    background-color: #6B000D !important;

  }
  .Titulaciones{
    color: #6B000D;
  }
</style>
<?php nav() ?>
<link rel="stylesheet" href="https://cdn.plyr.io/3.7.2/plyr.css" />
<script src="https://cdn.plyr.io/3.7.2/plyr.js" defer></script>

<!-- end-->
<main class="vh-100 ">
  <img src="<?php echo $_GET['img'] ?>" alt="" class="w-100 h-100 img-inicio ">

  <div
    class=" text-center card-modificado-1 card-img-overlay d-flex flex-column justify-content-center align-items-center text-light">
    <h1 class=" text-light title-text " style="margin-top:5rem;">CONSTRUCTORA</h1>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      <a href="https://api.whatsapp.com/send?phone=51993959395&text=Hola Terrralpa , Con el Area Legal?, Quisiera saber mas sobre sus servicios.."
        target="_blank" type="button" class="btn btn-danger btn-lg px-4 gap-3"><i class="fab fa-whatsapp"></i>
        Contactanos</a>
      <h3 class=""> o</h3>
      <a href="tel:51989488494" type="button" class="btn btn-outline-light btn-lg px-4">Llámanos: +51
        989488494</a>
    </div>

  </div>

</main>
<section class="container-fluid my-3">
  <div class="row">
    <div class="col-lg-6">
      <div class="container text-light  my-3 card-modificado-1 text-justificado">
        <p class="card-text container-text my-3">This is a wider card with supporting text below as a natural lead-in to
          additional content. This content is a little bit longer.</p>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="container">

        <div class="container video-vimeo">



        </div>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center my-3 ">
          <a href="https://api.whatsapp.com/send?phone=51993959395&text=Hola Terrralpa , Con el Area Legal?, Quisiera saber mas sobre sus servicios.."
            target="_blank" type="button" class="btn btn-danger btn-lg px-4 gap-3"><i class="fab fa-whatsapp"></i>
            Contáctanos</a>
          <h3 class="text-danger">&oacute;</h3>
          <a href="tel:51989488494" type="button" class="btn btn-outline-danger btn-lg px-4">Llámanos: +51
            989488494</a>
        </div>
      </div>
    </div>

  </div>
</section>







<?php footer() ?>


<script src="<?= ASSETS ?>/js/tiutalaciones-descripcion.js"></script>
<script>
  let list = clientes.find(x => x.id == '<?php echo $_GET['id'] ?>');
  console.log(list);

  containertext = document.querySelector(".container-text")
  containertext.innerHTML = list.pregunta;
  titletext = document.querySelector(".title-text")
  titletext.innerHTML = list.tiulo;

  /*  document.querySelector(".img-inicio").src=; */

  videovimeo = document.querySelector(".video-vimeo")
  videovimeo.innerHTML = `<div class="js-player" id="js-player" data-plyr-provider="youtube" data-plyr-embed-id="${list.video}">    </div>`;

</script>
<script>/*<![CDATA[*/
  window.addEventListener('DOMContentLoaded', () => {
    const players = Array.from(document.querySelectorAll('.js-player')).map((p) => new Plyr(p, {
      youtube: { noCookie: true },
      i18n: {
        quality: 'Calidad',
        speed: 'Velocidad',
        captions: 'Subtítulos',
        disabled: 'Desactivar',
        enabled: 'activar',
      },
    }));
  });/*]]>*/
</script>

<div class=" btn-group dropup position-fixed fixed-bottom d-flex gap-2 w-10">

  <a class=" icons-hover-whastapp  "
    href="https://api.whatsapp.com/send?phone=51993959395&text=Hola,Con el area de Titulaciones Terrralpa%3F%2C%20Quisiera%20saber%20mas%20sobre%20sus%20productos%0A%0A"
    target="_blank">
    <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="" width="50"> </a></br>



  <a class=" icons-hover-whastapp   " href="https://www.facebook.com/TERRALPA" target="_blank">
    <img src="<?= ASSETS ?>/img/inicio/face.png" alt="" width="50">
  </a>
</div>