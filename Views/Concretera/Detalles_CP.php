<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Template Mo">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <title>Terralpa</title>


  <!-- Bootstrap core CSS -->
  <link href="<?= ASSETS ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="<?= ASSETS ?>/assets/css/fontawesome.css">
  <link rel="stylesheet" href="<?= ASSETS ?>/assets/css/templatemo-edu-meeting.css">
  <link rel="stylesheet" href="<?= ASSETS ?>/assets/css/owl.css">
  <link rel="stylesheet" href="<?= ASSETS ?>/assets/css/lightbox.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  <style>
     .Concretera{
    color: #6B000D;
  }
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    body {
      background: #000;
      color: #000;
    }

    .swiper {
      width: 100%;
      height: 300px;
      margin-left: auto;
      margin-right: auto;
    }

    .swiper-slide {
      background-size: cover;
      background-position: center;
    }

    .mySwiper2 {
      height: 80%;
      width: 100%;
    }

    .mySwiper {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
    }

    .mySwiper .swiper-slide {
      width: 25%;
      height: 100%;
      opacity: 0.4;
    }

    .mySwiper .swiper-slide-thumb-active {
      opacity: 1;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>

<body>

  <div id="app">


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky fixe-top ">
      <div class="container-fluid ">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="/" class="logo">
            <img src="<?= get_logo_concretera() ?>" alt="" style="width:15rem;">
          </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav p-2">
            <li> <a href="/">Inicio</a></li>
            <li><a href="/#nosotros">Nosotros</a></li>
            <li><a href="/Constructora">Constructora</a></li>
            <!--  <li class="has-sub">
            <a href="javascript:void(0)">Pages</a>
            <ul class="sub-menu">
              <li><a href="meetings.html">Upcoming Meetings</a></li>
              <li><a href="meeting-details.html">Meeting Details</a></li>
            </ul>
          </li> -->
            <li><a href="/Concretera">Concretera</a></li>
            <li><a href="/Titulacion">Titulaciones</a></li>
            <li><a href="/Ubicacion">Ubicacion</a></li>
            <li class="border text-center p-1"><a href="/Login"> Login </a></li>
          </ul>
          <a class='menu-trigger '>
            <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>

      </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <section class="heading-page header-text  " id="top">

      <div class="vh-100">

        <div class="swiper mySwiper2 ">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="https://drive.google.com/uc?id=1u_Vn_amaMJYAXOwnIiGcjmwp87k24okC" />
            </div>

            <div class="swiper-slide">
              <img src="https://drive.google.com/uc?id=1467cxkoQrOZWqYs1nfiCwEVgIjF2FqsA" />
            </div>
            <div class="swiper-slide">
              <img src="https://drive.google.com/uc?id=1MSwUtNAMktJzxXBRpsl4d7ihGp7E-rUL" />
            </div>
            <div class="swiper-slide">
              <img src="https://drive.google.com/uc?id=1Q8OFA2HkVJurst1uf5GeahT8oeBo5Bhs" />
            </div>
            <div class="swiper-slide">
              <img src="https://drive.google.com/uc?id=1Oj7NsKpMeG6esHOwznh365X7eeKUydcU" />
            </div>

          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>


        <div thumbsSlider="" class="swiper mySwiper    ">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="https://drive.google.com/uc?id=1u_Vn_amaMJYAXOwnIiGcjmwp87k24okC" />
            </div>

            <div class="swiper-slide">
              <img src="https://drive.google.com/uc?id=1467cxkoQrOZWqYs1nfiCwEVgIjF2FqsA" />
            </div>
            <div class="swiper-slide">
              <img src="https://drive.google.com/uc?id=1MSwUtNAMktJzxXBRpsl4d7ihGp7E-rUL" />
            </div>
            <div class="swiper-slide">
              <img src="https://drive.google.com/uc?id=1Q8OFA2HkVJurst1uf5GeahT8oeBo5Bhs" />
            </div>
            <div class="swiper-slide">
              <img src="https://drive.google.com/uc?id=1Oj7NsKpMeG6esHOwznh365X7eeKUydcU" />
            </div>

          </div>
        </div>
      </div>

    </section>

    <section class="meetings-page" id="meetings">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-12">
                <div class="meeting-single-item">
                  <div class="thumb">


                    <img src="<?= ASSETS ?>\img\Concretera\CercoPerimetrico.jpg" alt="">
                    <div class="down-content text-justify">
                      
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

    </section>

    
  <section class="contact-us bg-dark" id="contact">

    <div class="footer bg-dark border-3" style="padding:0;">

      <div class=" owl-carousel owl-theme">
        <div class="item">
          <img src="https://drive.google.com/uc?id=1KsYz1SdIWE3TWa-xJO0lh8RYhfitpdnh" alt="">
        </div>
        <div class="item">
          <img src="https://drive.google.com/uc?id=16sp2xN_fFldvX2x1zfrNqIX7YixUGSsO" alt="">
        </div>
        <div class="item">
          <img src="https://drive.google.com/uc?id=1xqS7iP9o7XuhFcdE2pQeqaovlDbG7igf" alt="">
        </div>
        <div class="item">
          <img src="https://drive.google.com/uc?id=1PHQtsLHL-hcUCmXg__jrFoKxx8yRSvtH" alt="">
        </div>
        <div class="item">
          <img src="https://drive.google.com/uc?id=1B-O7b_LeThWwBYmkEgIe83egxwYGDzdi" alt="">
        </div>
        <div class="item">
          <img src="https://drive.google.com/uc?id=1km53NXFQcsb982by0C9rV1yseohJVzsk" alt="">
        </div>
        <div class="item">
          <img src="https://drive.google.com/uc?id=1b585H7Pi0SIs_giZG1NrQTWXbtNZRrXX" alt="">
        </div>
        <div class="item">
          <img src="https://drive.google.com/uc?id=1XgZrGpS0WkI5ngkhGKOIBgdr0paqyIDd" alt="">
        </div>
        <div class="item">
          <img src="https://drive.google.com/uc?id=1ugF3E50K7i7QzLLLaRe2cidYztxn1Jed" alt="">
        </div>
        <div class="item">
          <img src="https://drive.google.com/uc?id=1VvCCrT5DxTvkC5M8c3Qoc_oawSCbyfLL" alt="">
        </div>
        <div class="item">
          <img src="https://drive.google.com/uc?id=1n-8M8MQLbjvSqW9iHHFC-LxZ0aR-yKkO" alt="">
        </div>
        <div class="item">
          <img src="https://drive.google.com/uc?id=1KG2_RJEH6ctwGfEteTjLseZ0PSBHnP2D" alt="">
        </div>
        <div class="item">
          <img src="https://drive.google.com/uc?id=1y2rzDZIN5rbpXAnUWPEkHoOuHLMxoS1N" alt="">
        </div>
        <div class="item">
          <img src="https://drive.google.com/uc?id=1kCmXsDdFpuT1frI-HTLvxWi_ur2LYyFr" alt="">
        </div>
        <div class="item">
          <img src="https://drive.google.com/uc?id=1T8Rm29abLySIWezyUiubN-kDKNq2FH0Z" alt="">
        </div>

      </div>
    </div>

    <div class="footer  bg-dark">
      <footer class=" container-fluid position-relative  text-light  h-100 my-5">
        <div class="row ">

          <div class="col-lg-6 col-md-12  h-100">
            <h1 class="telefono mb-2"><i class="fa-solid fa-location-dot "></i> Ubicacion </h1>

            <div class=" position-relative d-grid gap-2  ">
              <a class="  text-light linck w-100   " href="https://goo.gl/maps/y4gxa5KaXDnbgsE89"><i
                  class="fas fa-map-marker-alt text-danger"></i>
                JR LIBERTAD N°859 – AYACUCHO </a>

              <a class="text-light  linck " href="https://goo.gl/maps/wV2C3SdKGtwbhj86A"><i
                  class="fas fa-map-marker-alt text-danger"></i>
                FURB. LUIS CARRANZA MZ A LOTE 14 – AYACUCHO </a>
              <a class="   text-light linck " href="tel:(010) 1234 4321"><i
                  class="fas fa-map-marker-alt  text-danger"></i>
                Av. Universitaria s/n C-2, Nazarenas – AYACUCHO</a>
              <a class="   text-light  linck" href="tel:(010) 1234 4321"><i
                  class="fas fa-map-marker-alt text-danger"></i>
                AV. LIBERTADORES S/N – CARMEN ALTO – AYACUCHO </a>
              <a class="link  text-light linck" href="tel:(010) 1234 4321"><i
                  class="fas fa-map-marker-alt text-danger"></i>
                AV GARCILASO DE LA VEGA 917 – LIMA </a>

            </div>
          </div>

          <div class="col-lg-6 col-md-12   ">
            <h1 class="telefono mb-3"><i class="fa-solid fa-phone"></i>Telefonos</h1>
            <div class="row text-justify">
              <div class="col">
                <div class="d-flex gap-1">
                  <a href="https://wa.link/w6dc3t" class="linck text-success"><i class="fab fa-whatsapp"
                      style="font-size: 2rem;"></i></a>
                  <a class=" text-light w-100 linck m-0 p-0  " href="tel:51966684615">
                    <p><strong>Constructora:</strong> +51 966 684 615</p>
                  </a>

                </div>
                <div class="d-flex gap-1">
                  <a href="https://wa.link/hjegpy" class="linck text-success"><i class="fab fa-whatsapp"
                      style="font-size: 2rem;"></i></a>
                  <a class=" text-light w-100 linck  " href="tel:51993959395">
                    <p><strong> ÁREA LEGAL :</strong> +51 993 959 395</p>
                  </a>

                </div>
                <div class="d-flex gap-1">
                  <a href="https://wa.link/vkcoej" class="linck text-success"><i class="fab fa-whatsapp"
                      style="font-size: 2rem;"></i></a>
                  <a class=" text-light w-100  linck " href="tel:51989488494">

                    <p> <strong>Concretera:</strong> +51 989 488 494</p>
                  </a>

                </div>
              </div>
              <div class="col">
                <div class="d-flex gap-1">

                  <i class="fas fa-phone  text-danger m-0 p-0 linck" style="font-size: 1.5rem;"></i>
                  <a class=" text-light w-100  linck " href="tel:066638675">
                    <p><strong>General:</strong> +066 638675</p>
                  </a>
                </div>
                <div class="d-flex gap-1  ">
                  <a href="https://wa.link/uj6rou" class="linck text-success"><i class="fab fa-whatsapp"
                      style="font-size: 2rem;"></i> </a>
                  <a class=" text-light w-100  linck " href="tel:51951543918">

                    <p><strong>General 2 :</strong> +51 951543918</p>

                  </a>

                </div>
              </div>
            </div>

          </div>
        </div>
      </footer>
    </div>
  </section>


  </div>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script>
	const base_url = "<?php echo $_SERVER["HTTP_HOST"]; ?>";
</script>
  <script src="<?= ASSETS ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= ASSETS ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= ASSETS ?>/js/Concretera/DetallesProducto.js"></script>
  <script src="<?= ASSETS ?>/assets/js/isotope.min.js"></script>
  <script src="<?= ASSETS ?>/assets/js/owl-carousel.js"></script>
  <script src="<?= ASSETS ?>/assets/js/lightbox.js"></script>
  <script src="<?= ASSETS ?>/assets/js/tabs.js"></script>
  <script src="<?= ASSETS ?>/assets/js/video.js"></script>
  <script src="<?= ASSETS ?>/assets/js/slick-slider.js"></script>
  <script src="<?= ASSETS ?>/assets/js/custom.js"></script>

  <script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
      var
        direction = section.replace(/#/, ''),
        reqSection = $('.section').filter('[data-section="' + direction + '"]'),
        reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $('body, html').animate({
          scrollTop: reqSectionPos
        },
          800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function () {
        var
          $this = $(this),
          topEdge = $this.offset().top - 80,
          bottomEdge = topEdge + $this.height(),
          wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
          var
            currentId = $this.data('section'),
            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
          reqLink.closest('li').addClass('active').
            siblings().removeClass('active');
        }
      });
    };

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
      e.preventDefault();
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function () {
      checkSection();
    });
  </script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      spaceBetween: 0,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
      loop: true,
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 1000
      },
      thumbs: {
        swiper: swiper,
      },
    });
  </script>
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
          items: 3
        },
        600: {
          items: 6
        },
        1000: {
          items: 9
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


</body>

</html>