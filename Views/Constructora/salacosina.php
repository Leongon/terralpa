<?php nav() ?>
<style>
   .nav-constructora{
    background-color: #6B000D !important;
  }
  .constructora {
    color: #6B000D !important;
    
  }
</style>
<script>

  document.querySelector(".imgLogo").src = "<?= get_logo_constructora() ?>";

</script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<script src="https://cdn.jsdelivr.net/npm/vue-masonry@0.10.12/dist/vue-masonry-plugin.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

<div id="app">
<main role="main">


  <div class=" position-absolute  z-1 card-modificado-1 w-100 " style="top: 70%;">
    <div class=" d-flex  justify-content-center flex-colum   ">
      <h1 class="text-uppercase  text-light">SALA COCINA COMEDOR</h1>

    </div>

  </div>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1" class=""></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2" class=""></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="3" class=""></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="4" class=""></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="5" class=""></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="6" class=""></li>
    </ol>

    <div class="carousel-inner vh-100 z-n1">

      <div class="carousel-item active vh-100" data-bs-interval="2000">

        <img class="first-slide img-top-full" src='https://drive.google.com/uc?id=1xhWF3f69niQbVX02_qh3hwOUGNa3EvOJ'
          width="100%" alt="First slide">

      </div>
      <div class="carousel-item  vh-100" data-bs-interval="2000">

        <img class="first-slide img-top-full" src=
'https://drive.google.com/uc?id=1xRUHuDOX4_w9-2aSYgOWpFN9XPIIK68I'
          width="100%" alt="First slide">

      </div>
      <div class="carousel-item  vh-100" data-bs-interval="2000">

        <img class="first-slide img-top-full" src=
'https://drive.google.com/uc?id=1E60WUQqGMzs1W9zDF7QuBIfYkOixZhG3'
          width="100%" alt="First slide">

      </div>
      <div class="carousel-item  vh-100" data-bs-interval="2000">

        <img class="first-slide img-top-full" src=
'https://drive.google.com/uc?id=1rwff4S_G9bR0GCH1w91AilWUkXdVc6Mf'
          width="100%" alt="First slide">

      </div>
      <div class="carousel-item  vh-100" data-bs-interval="2000">

        <img class="first-slide img-top-full" src=
'https://drive.google.com/uc?id=1PO903LZhHs8iHQhBySPExKQMmgwnHSF4'
          width="100%" alt="First slide">

      </div>
      <div class="carousel-item  vh-100" data-bs-interval="2000">

        <img class="first-slide img-top-full" src=
'https://drive.google.com/uc?id=1j0obvNWqIZQcHMAKgQY0GRppMNMweU69'
          width="100%" alt="First slide">

      </div>
      <div class="carousel-item  vh-100" data-bs-interval="2000">

        <img class="first-slide img-top-full" src=
'https://drive.google.com/uc?id=1prqhbl-6PgXTi2wDTJF3diGeWXPmCw7y'
          width="100%" alt="First slide">

      </div>

      
    </div>
    <a class="carousel-control-prev " href="#myCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next text-ligth" href="#myCarousel" role="button" data-bs-slide="next">
      <span class="sr-only">Siguiente</span>
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
      ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
   
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">SALA COCINA COMEDOR</h2>
        <p class="" style=" text-align: justify ">
        El diseño de concepto abierto en viviendas es una tendencia arquitectónica común que combina salón, comedor y cocina en una única estancia, creando un núcleo central para la vida familiar. Estas distribuciones ofrecen una serie de beneficios y desventajas que transforman la vida doméstica y la decoración del interior. Para un espacio abierto bien diseñado, se deben tener en cuenta ciertos aspectos que garanticen su comodidad, funcionalidad y estética.
        </p>
      
       
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto shadows-1    " data-src="holder.js/500x500/auto" alt="500x500"
          style="width: 500px; height: 350px;" src=
'https://drive.google.com/uc?id=1vGdrxJtS2mY65btGjW-EAM4z5PU39taa' data-holder-rendered="true">
      </div>
    </div>

    <hr class="featurette-divider">
    <div class="row  grid justify-content-center">

<div class="col-lg-3 my-3 item-grid justify-content-center" v-for="(imgs, index) in img" :key="index">
    <div class="card  mx-auto my-auto " style="width: 100% ; height:18rem;">
        <a :href="imgs" class="card-img-overlay border-none text-light  text-center  "
            data-fancybox="gallery">
            <img :src="imgs" class="card-img-top img-fluid object-fit-cover w-100 h-100" loading='lazy'
                alt="...">
        </a>
    </div>
</div>

</div>
    <hr class="featurette-divider">

    <!-- Three columns of text below the carousel -->
    <div class="row mt-5 mb-5 ">
      <h4>VENTAJAS Y BENEFICIOS </h4>
      <p>1. Privacidad: Las viviendas unifamiliares ofrecen más privacidad que los apartamentos o casas adosadas, ya que no se comparten paredes con otros residentes.</p>

      <p>2. Espacio: Los unifamiliares son generalmente más grandes que los apartamentos o casas adosadas, lo que proporciona más espacio para las personas que viven allí.</p>

      <p>3. Libertad: Como propietario de una vivienda unifamiliar, tiene más libertad para personalizar y modificar su hogar que en una propiedad compartida.</p>

      <p>4. Entorno tranquilo: Los unifamiliares suelen estar ubicados en áreas más tranquilas, lo que significa menos ruido y menos distracciones.</p>

      <p>5. Mayor control: Al ser propietario de su propio terreno, tiene un mayor control sobre el mantenimiento y cuidado de su propiedad.</p>

      <p>6. Más espacio al aire libre: Las viviendas unifamiliares suelen tener patios o jardines, lo que proporciona más espacio al aire libre para disfrutar.</p>

      <p>7. Inversión a largo plazo: Comprar una vivienda unifamiliar puede ser una inversión a largo plazo, ya que los precios de las viviendas tienden a aumentar con el tiempo.</p>
    </div><!-- /.row -->




    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->

</main>
</div>
<?php footer() ?>

<div class=" btn-group dropup position-fixed fixed-bottom d-flex gap-2  w-10">





<a class="icons-hover-whastapp "
  href="https://api.whatsapp.com/send?phone=51951543918&text=Hola Terrralpa , Con la Constructora ?, Quisiera saber mas sobre sus productos."
  target="_blank">
  <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="" width="50">
</a>



<a class=" icons-hover-whastapp   " href="https://www.facebook.com/TERRALPA" target="_blank">
  <img src="<?= ASSETS ?>/img/inicio/face.png" alt="" width="50">
</a>
</div>


<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

<script>

    const { createApp } = Vue

    img = ['https://drive.google.com/uc?id=1xhWF3f69niQbVX02_qh3hwOUGNa3EvOJ',
'https://drive.google.com/uc?id=1xRUHuDOX4_w9-2aSYgOWpFN9XPIIK68I',
'https://drive.google.com/uc?id=1E60WUQqGMzs1W9zDF7QuBIfYkOixZhG3',
'https://drive.google.com/uc?id=1rwff4S_G9bR0GCH1w91AilWUkXdVc6Mf',
'https://drive.google.com/uc?id=1PO903LZhHs8iHQhBySPExKQMmgwnHSF4',
'https://drive.google.com/uc?id=1j0obvNWqIZQcHMAKgQY0GRppMNMweU69',
'https://drive.google.com/uc?id=1prqhbl-6PgXTi2wDTJF3diGeWXPmCw7y',
'https://drive.google.com/uc?id=1vGdrxJtS2mY65btGjW-EAM4z5PU39taa',
'https://drive.google.com/uc?id=1Mb9SoRn3vTKY9A0jtGdb__xCwXANpXC1',
'https://drive.google.com/uc?id=1Qy5_Q9N5zSJ6ksqdqM9tqDlKRYFgwb7k',
'https://drive.google.com/uc?id=1MyXvnJZxGL71YEOeQdZamlQ1PK46YMTC',
'https://drive.google.com/uc?id=137e9B-ab4NJnvbpJ6jmZmU7CXTyXTgrb',
'https://drive.google.com/uc?id=1E7yura6JULycknLXCu_lFW4-pIY4AWKg',
'https://drive.google.com/uc?id=1YExv5Y6ktOGWjQJrzQ15DcqNXLRSDcVz',
'https://drive.google.com/uc?id=1ouUoZGhCbrp6iEWzKAY0BQu4UTQbZ4i4',
'https://drive.google.com/uc?id=1QasdS5jQvWLNNsRmEx1OFZunANFGUbuW',
'https://drive.google.com/uc?id=1I-jZ0osSNYnPd0aWQ_jji51PydFd2j6R',
'https://drive.google.com/uc?id=10GnONlzSVgUliBqNgj6sa7OnussdZhXb',
'https://drive.google.com/uc?id=1gaLTPMybf2aRoMGdOEwLvh-t10jvG0Zk',
'https://drive.google.com/uc?id=1NPPOtjJgH5kQOt31cPCSnvUHIACvlVSS',
'https://drive.google.com/uc?id=1zTD3YeQYQTAGIYTYg5D9TxWZHrYQNCC3',
'https://drive.google.com/uc?id=1kfohAo31CCEpwr_foatNL-68H3SwqF8y',
'https://drive.google.com/uc?id=1Kj89mT-nTPpemUAwiDa-fDim-Xdn6uw1',
'https://drive.google.com/uc?id=1hLTkbUjC0MLsM-NIi0722q95YKyqDPuP',
'https://drive.google.com/uc?id=1YZ2f8QPqNKWjSdvifmEvxb38KQyLQQ8P',
'https://drive.google.com/uc?id=1aesK75MiO2-YF2oYyMiqdzMtknAumSVg',
'https://drive.google.com/uc?id=1PmvXFhoDXCgVzY_2QEe-JziWPahnRUi2',
'https://drive.google.com/uc?id=1gGqn49UJrqtLhUusfYj7UnlMSSJtPyDQ',
'https://drive.google.com/uc?id=18L6JVlftA3SK-jkaF6D7r0y_L_8zRVW5',
'https://drive.google.com/uc?id=153kbmIoStBkKroAPq2orrU9xvfIDB8tm',
'https://drive.google.com/uc?id=13fa3xH9b3XTQw8KBotFSY3Zjt_UnAaPU',
'https://drive.google.com/uc?id=1B5WtQp0gD-syZotP4blSDKJ8U9UC74c2',
'https://drive.google.com/uc?id=1vPnNmqbk3JK-Mi_WDmRKFYVghmVF2Gwu',
'https://drive.google.com/uc?id=1jLwUSpXZQqPAwDqYihjbILqxWuIQXn02',
'https://drive.google.com/uc?id=1fsztT9Mjwhi1IPoNk7BVSx5MKN7jMgxb',
'https://drive.google.com/uc?id=1pSkxvhwCsp56VnRxZtMZpRZD7lf6vBUg',
'https://drive.google.com/uc?id=1VbzGFt0CTuhP1LTPBYmLOIy_K2ibZFhG',
'https://drive.google.com/uc?id=11w8fVph_AwLnRSxB0UYBFluv2Qp0TFnL',
'https://drive.google.com/uc?id=1PWn6eL02JVixa7imzxUrWzUfrF-FUORK',
'https://drive.google.com/uc?id=1PqbGc7MIbw4VoBCJwpDiK-upPqakkrlQ',
'https://drive.google.com/uc?id=1eJJM0Aq3GdkkDpask0jtwIVQwhQsxKpG',
'https://drive.google.com/uc?id=14lwJs-6TejeTYDjKZHTZZ0hsi0IUtw26',
'https://drive.google.com/uc?id=1ofPB2yIOjPLsj3g4p6mAUr2RO_h27VQx',
'https://drive.google.com/uc?id=1gUgNbVM5N0eTU4oiwNBqxN7gdnZNahuW',
'https://drive.google.com/uc?id=17K54eaNqcCsQixkqGf7bk8tuIVe8AKz-',
'https://drive.google.com/uc?id=1lsT__bX-YG9fYJ2dVqa-obNTKMTnnG1Z',
'https://drive.google.com/uc?id=1uWMs-UtBqQUi-bO7eBoj74kyQxsr99z4',
'https://drive.google.com/uc?id=1nUBMsPSRwnd84X6Lr8YJIuNgqXSiSfcZ',
'https://drive.google.com/uc?id=1zmpQr2NnzKKDSdOsijTm9PhWHC5q0o9k',
'https://drive.google.com/uc?id=1bldJ58zrMVImfFIrsp7jZriOg3XkBKiP',
'https://drive.google.com/uc?id=1bj4K53K9W2iMYMY4_9_1HRAVweDteHln',
'https://drive.google.com/uc?id=1lsS5e881GQ-kS9fbBc1nFiN-xX5Z7hTf',
'https://drive.google.com/uc?id=1puDFHK6S5MhMG1gwyyFxbmo8k8ozD3-L',
'https://drive.google.com/uc?id=1czU_W7XAPmn4ut-QVV_cqAI9-Fjmvd4g',
'https://drive.google.com/uc?id=19EfpeP9Ui5kj6G_K7mOBsIZlECP8hitB',
'https://drive.google.com/uc?id=1pt-TEsOegbPa0V92jxHvnAphWJzanwz8',
'https://drive.google.com/uc?id=1n0728WFLjjNPre885ojuAmAd5jCqKkh2',
'https://drive.google.com/uc?id=1WXK9CSELULGFk-C42VWphgU87KSJHN8v',
'https://drive.google.com/uc?id=13u_FjhhCP8_fJGcVwZe-qr7UjAl1OjI-',
'https://drive.google.com/uc?id=1K1aKPNT1W2lePpFbaffuVAmQX21Hn5Ow',
'https://drive.google.com/uc?id=1m_g04yjXeJnokSn_T8ViYfaNzSgyIG1r',
'https://drive.google.com/uc?id=1uKNn5Ifs0E1X6LeWScJBproI9btpw6mL',
'https://drive.google.com/uc?id=1L6EVYDKEV8ME4A4QDcYZVpyQD3o4UUd5',
'https://drive.google.com/uc?id=13J3NVTNFPlXEhOmsoMN-4RBdNkDLR28U',
'https://drive.google.com/uc?id=1DsUZNd_ixFgiM2NGWUTVbSPryE7PLvNI',
'https://drive.google.com/uc?id=1R2kVSMbOu3T_CXELelgfl5KSJ97uX8vV',
'https://drive.google.com/uc?id=1qfOXHleD07-Q20uBz2x3W0q4HYZhV4E-',
'https://drive.google.com/uc?id=1PbITnNv1p2LN0cIejp2JKCOl1ypY9R8o',
'https://drive.google.com/uc?id=176sdPgFciNsaNHXuUduI0rucpYKaOkni',
'https://drive.google.com/uc?id=1mCGn24qs5UZZ_b-pXNfT0Fp_sjdjH-8i',
'https://drive.google.com/uc?id=19A3_vPIt6xUJbdLHzXDYTbxMHkUoiejP',
'https://drive.google.com/uc?id=1ESZWWya9UzD4sBhmrNeLjtFuwhdhtpZk',
'https://drive.google.com/uc?id=1sBm__iUDjHFOwCwXqTZ8NvzLMq53gwaE',
'https://drive.google.com/uc?id=1WW8T0nQ-_Tk7ns5yy2eNorxCE6BnOjMY',
'https://drive.google.com/uc?id=163nrumuE8USsQAKmkBzASIRvwRpoUxQ8',
'https://drive.google.com/uc?id=1TNm2TrwXDEyRogyEPyQ3naoCYGch8QrL',
'https://drive.google.com/uc?id=1Kxr18poBPrd7WN3xDEz7ojoo29VUU2ne',
'https://drive.google.com/uc?id=1Et9WOBOuKg_Gv-Zv2TVMgYE5ZMGEH7et',
    ]
    app = {
        data() {
            return {
                img: img,
            }
        },
        methods: {
            async ListInmo() {

                console.log(this.img)
            },
            async masonry() {

                var msnry = new Masonry('.grid', {
                    percentPosition: true,
                    columnWidth: 200,
                    itemSelector: '.item-grid'
                });
            },
            Fancybox() {
                Fancybox.bind('[data-fancybox="gallery"]', {
                    Thumbs: {
                        type: "modern"
                    }
                });
            },
        },
        mounted() {
            this.ListInmo()
            this.masonry()
            this.Fancybox()
        }, computed: {
            /*  filteredList() {
                 return this.Vender.filter(entry => {
                     console.log(entry.departament)
                     var id = entry.departament + ""
                     return id.includes(this.searchterm)
                 });
             }  */
        }

    }

    var _app = createApp(app);


    var mountedApp = _app.mount('#app') 
</script>