<!DOCTYPE html>
<html lang="en">
<style>
  
  .top-0{
    top: -5px !important;
  }
  .left-0{
    left: -5px !important;
  }

  @media screen and (max-width: 768px) {
    .ngro{
      background-color: black !important;
    }
    
  }
</style>

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
  <title>TERRALPA</title>
  <link rel="icon" href="<?= get_logo() ?>">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/css/bootstrap.min.css" integrity="sha512-72OVeAaPeV8n3BdZj7hOkaPSEk/uwpDkaGyP4W2jSzAC8tfiO4LMEDWoL3uFp5mcZu+8Eehb4GhZWFwvrss69Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />



  <link rel="stylesheet" href="<?= CSS ?>/concretera.css">
  <link rel="stylesheet" href="<?= CSS ?>/footer.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


  



  <link rel="stylesheet" href="<?= ASSETS ?>/assets/css/lightbox.css">

  <link
    href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Merriweather+Sans:ital,wght@1,800&family=Poppins:wght@100&display=swap"
    rel="stylesheet">

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="<?= PLUGINS ?>/owl/owl.carousel.min.css">
  <script src="<?= PLUGINS ?>/owl/owl.carousel.js"></script>

  <script src="<?= PLUGINS ?>/lightbox/lightbox.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="<?= PLUGINS ?>/lightbox/lightbox.css" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
</head>

<body>
  <!-- head navbar -->
  <nav class="navbar navbar-expand-lg bg-nav-red navbar-light fixed-top navscroll p-lg-0 m-lg-0 ngro">

    <div class="container-fluid">
      <a class="navbar-brand" href="#inicio">
      <img src="<?= get_logo() ?>" alt="Logo Terralpa" width="230"  height="79"
      class="d-inline-block  fixed-top top-0 imgLogo  left-0 ">

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="text-light fa fa-bars" aria-hidden="true"></i>
      </button>

      <div class="collapse navbar-collapse mx-auto mt-5 mt-md-0" id="navbarNav">
        <ul class="nav ms-auto  flex-column flex-md-row text-light " id="menu">

          <li class="nav-item text-center linckActive">

            <a class="nav-link text-light linck-active text-uppercase  p-0   mx-3"
              href="<?php echo base_url ?>#ubicacion">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" fill="currentColor" class="p-0 m-0"
                viewBox="0 0 16 16">
                <path
                  d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
              </svg>
              </br>
              <p class="p-0 m-0">
                Inicio
              </p>

            </a>

          </li>

          <li class="nav-item text-center  ">

            <a class="nav-link text-light nav-constructora text-uppercase p-0 mx-3"
              href="<?php echo base_url ?>/Constructora">
              <svg xmlns="http://www.w3.org/2000/svg" width="" height="35" fill="currentColor"
                viewBox="0 0 200.000000 94.000000" class="p-0 mx-3">
                <metadata>
                  Created by potrace 1.16, written by Peter Selinger 2001-2019
                </metadata>
                <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)">
                  <path d="M280 839 c-27 -11 -100 -78 -100 -92 0 -5 -7 -24 -16 -43 -10 -21
                -14 -44 -10 -62 22 -90 26 -120 21 -148 -4 -26 -9 -31 -25 -27 -18 5 -20 0
                -20 -40 0 -40 -4 -48 -29 -63 -58 -34 -71 -76 -71 -228 0 -123 8 -162 24 -121
                4 12 34 15 153 17 l148 3 0 40 0 40 -150 2 c-117 1 -150 4 -150 15 0 10 35 14
                150 18 l150 5 3 38 3 37 -150 0 c-82 0 -152 3 -154 8 -11 18 20 78 52 99 31
                21 45 23 168 23 74 0 142 -4 152 -10 39 -20 55 -62 61 -155 l5 -90 100 -5 100
                -5 0 -35 0 -35 -129 -3 c-173 -4 -176 -1 -176 113 0 50 -4 85 -10 85 -6 0 -10
                -37 -10 -90 0 -135 -9 -130 250 -130 133 0 210 4 210 10 0 6 53 10 140 10
                l140 0 0 25 c0 24 2 25 74 25 l75 0 16 55 c14 51 80 303 87 336 3 12 -50 14
                -327 14 l-329 0 -12 -45 c-7 -25 -28 -101 -46 -170 l-34 -125 -51 -3 -51 -3
                -3 90 c-4 87 -5 91 -38 125 -19 20 -40 36 -46 36 -12 0 -55 33 -55 42 0 2 16
                2 35 0 45 -5 61 8 69 58 3 22 11 40 16 40 6 0 10 18 10 39 0 31 4 38 17 37 23
                -1 30 40 10 62 -8 9 -18 34 -21 55 -8 45 -58 105 -103 123 -37 16 -87 17 -123
                3z m4 -38 c-23 -10 -44 -27 -48 -36 -10 -27 2 -31 27 -7 50 46 116 46 156 -1
                26 -33 44 -11 19 23 -7 9 -3 6 9 -7 12 -13 27 -42 34 -66 6 -23 18 -50 27 -61
                17 -18 13 -18 -113 -12 -150 7 -225 16 -225 25 0 4 4 11 9 17 5 5 14 26 20 46
                14 43 72 98 104 98 16 0 11 -5 -19 -19z m187 -225 c6 -21 4 -33 -6 -40 -8 -6
                -15 -29 -17 -51 l-3 -40 -52 3 c-32 1 -53 -2 -53 -8 0 -13 -27 -13 -89 2 -39
                9 -51 16 -51 30 0 14 5 17 23 13 21 -6 25 -1 36 36 10 34 10 43 -1 51 -10 7
                -9 12 7 24 15 11 41 14 109 12 l90 -3 7 -29z m792 -258 c-19 -73 -41 -153 -47
                -178 l-12 -45 -190 -3 c-215 -3 -294 3 -294 23 0 9 -14 15 -39 17 l-39 3 24
                90 c13 50 32 120 42 157 l17 68 287 0 287 0 -36 -132z" />
                  <path d="M740 410 c0 -6 48 -10 123 -10 l122 -1 -47 -25 -48 -24 0 -56 c0 -32
                -4 -53 -10 -49 -5 3 -7 12 -4 20 4 9 -2 18 -12 22 -11 4 -24 13 -30 22 -8 9
                -17 12 -30 6 -10 -4 -23 -7 -28 -6 -12 3 -37 -20 -31 -30 3 -4 -2 -12 -11 -17
                -12 -7 -15 -15 -9 -28 9 -19 12 -29 14 -49 2 -15 59 -38 73 -28 7 4 21 6 31 5
                11 -2 21 7 28 25 6 16 13 22 16 16 3 -9 34 -13 104 -13 l99 0 0 78 0 78 -52
                27 -53 27 123 0 c67 0 122 -3 122 -7 -1 -5 -13 -55 -28 -113 l-27 -105 -90 -3
                c-49 -2 -94 -7 -99 -12 -7 -7 -1 -10 15 -11 l24 0 -23 -10 c-44 -17 -11 -29
                83 -29 l94 0 26 88 c40 132 43 144 50 185 l6 37 -261 0 c-167 0 -260 -4 -260
                -10z" />
                  <path d="M723 819 c-4 -13 -13 -19 -27 -18 -39 4 -56 -10 -50 -40 5 -23 2 -29
                -15 -34 -27 -7 -27 -33 0 -47 15 -9 19 -18 15 -35 -7 -28 12 -46 42 -38 15 3
                24 0 28 -11 8 -21 53 -21 61 0 4 10 13 14 28 10 26 -7 50 16 41 39 -3 9 3 23
                14 32 25 22 25 34 0 56 -11 9 -17 23 -14 32 9 23 -13 43 -40 38 -18 -4 -26 0
                -31 16 -8 27 -45 28 -52 0z m81 -46 c12 5 16 0 16 -18 0 -13 6 -30 13 -37 12
                -10 12 -15 0 -26 -7 -7 -13 -24 -13 -37 0 -17 -5 -22 -18 -19 -9 3 -26 -3 -37
                -13 -19 -18 -20 -18 -38 0 -11 11 -25 16 -37 12 -14 -5 -17 -2 -13 14 3 11 -3
                27 -14 38 -17 17 -17 19 0 36 11 11 17 27 14 38 -4 16 -1 19 13 14 12 -4 26 1
                37 13 18 19 18 19 40 -1 12 -11 29 -17 37 -14z" />
                  <path d="M1027 736 c-3 -8 -21 -16 -39 -18 -29 -3 -33 -7 -33 -31 0 -16 -8
                -34 -17 -41 -10 -7 -18 -19 -18 -26 0 -7 8 -19 18 -26 9 -7 17 -25 17 -41 0
                -24 4 -28 29 -29 16 -1 33 -8 38 -18 13 -24 54 -21 61 5 4 16 11 19 27 14 28
                -9 48 10 42 40 -3 17 1 27 12 31 21 8 21 40 0 48 -11 4 -15 14 -12 31 5 26
                -11 47 -34 44 -27 -3 -38 1 -38 16 0 19 -46 20 -53 1z m39 -31 c9 -8 25 -15
                37 -15 17 0 22 -6 24 -26 0 -15 7 -30 14 -34 9 -6 8 -12 -4 -25 -10 -9 -17
                -25 -17 -36 0 -14 -7 -19 -25 -19 -13 0 -29 -8 -35 -17 -10 -17 -10 -17 -20 0
                -6 9 -22 17 -35 17 -17 0 -25 6 -25 18 0 10 -6 27 -14 37 -11 16 -11 21 0 33
                8 7 14 22 14 33 0 12 7 19 20 19 10 0 25 7 32 15 16 18 16 18 34 0z" />
                </g>
              </svg>
              </br>
              <p class="p-0 m-0">
                Constructora</p>
            </a>
          </li>
          <li class="nav-item text-center nav-concretera">

            <a class="nav-link text-light linckActive text-uppercase p-0 mx-3" href="<?php echo base_url ?>/Concretera">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" viewBox="0 0 119.000000 165.000000"
                fill="currentColor" class="p-0 m-0 mx-3">
                <metadata>
                  Created by potrace 1.16, written by Peter Selinger 2001-2019
                </metadata>

                <g transform="translate(0.000000,165.000000) scale(0.100000,-0.100000)" stroke="none">
                  <path d="M94 1558 c-4 -7 -7 -343 -6 -748 1 -404 2 -741 2 -748 0 -9 14 -12
                    53 -10 l52 3 3 137 3 138 417 0 417 0 0 -131 c0 -71 2 -135 6 -140 3 -6 28 -9
                    55 -7 l49 3 3 749 c2 593 0 751 -10 758 -7 4 -243 8 -525 8 -389 0 -514 -3
                    -519 -12z m66 -758 c0 -639 -1 -720 -15 -720 -13 0 -15 81 -15 720 0 617 2
                    720 14 720 13 0 15 -103 16 -720z m871 713 c0 -5 1 -47 2 -96 l2 -87 -417 0
                    -418 0 0 95 0 95 415 0 c228 0 415 -3 416 -7z m79 -713 c0 -633 -2 -720 -15
                    -720 -13 0 -15 87 -15 720 0 633 2 720 15 720 13 0 15 -87 15 -720z m-75 385
                    l0 -95 -417 0 -418 0 0 95 0 95 418 0 418 0 -1 -95z m-1 -235 l0 -95 -417 -3
                    -417 -2 0 100 0 100 417 -2 416 -3 1 -95z m1 -237 l-2 -98 -417 -3 -416 -2 0
                    100 0 100 419 0 419 0 -3 -97z m1 -243 l-1 -100 -417 0 -418 0 0 100 0 100
                    418 0 418 0 0 -100z" />
                </g>
              </svg>
              </br>
              <p class="p-0 m-0">
                Concretara</p>
            </a>
          </li>
          <li class="nav-item text-center nav-inmobiliaria">

            <a class="nav-link text-light text-uppercase linckActive p-0 mx-3"
              href="<?php echo base_url ?>/Inmobiliaria">
              <svg xmlns="http://www.w3.org/2000/svg" width="" height="35" fill="currentColor"
                viewBox="0 0 110.000000 50.000000" class="p-0 mx-3">
                <path
                  d="M38.5 30.25v-16.1L28 6.8l-10.5 7.35v6.45h-3v-7.95L28 3l13.5 9.65v17.6ZM28 6.8ZM29 17h2v-2h-2Zm-4 0h2v-2h-2Zm4 4h2v-2h-2Zm-4 0h2v-2h-2Zm3.3 23.9-15.55-4.45v2.85H2V23.6h15.45l12.75 4.8q1.35.5 2.275 1.625.925 1.125.925 3.225h5.7q2.1 0 3.5 1.5T44 38.8v1.3ZM5 40.3h4.7V26.6H5Zm23.1 1.5 12.8-3.9q-.3-.95-.75-1.3-.45-.35-1.05-.35H28.75q-1.5 0-2.775-.2t-2.425-.55l-4.05-1.25 1.1-2.9 3.65 1.2q1.25.4 2.375.55 1.125.15 3.575.15 0-.6-.225-1.175-.225-.575-.775-.825L16.95 26.6h-4.2v10.7ZM9.7 33.45Zm20.5-.2Zm-20.5.2Zm3.05 0Z" />
              </svg>
              </br>
              <p class="p-0 m-0">
                Inmobiliaria</p>
            </a>
          </li>
          <li class="nav-item text-center nav-Titulacion">

            <a class="nav-link text-light text-uppercase linckActive p-0 mx-3" href="<?php echo base_url ?>/Titulacion">

              <svg xmlns="http://www.w3.org/2000/svg" height="35" width="40" fill="currentColor"
                viewBox="0 0 50.000000 50.000000" class="p-0 mx-3">
                <path
                  d="M11.1 44q-2.2 0-3.725-1.525T5.85 38.75V32.5h6.35V4l3 3 3-3 2.95 3 3-3 3 3 3-3 3 3 3-3 3 3 3-3v34.75q0 2.2-1.525 3.725T36.9 44Zm25.8-3q1 0 1.625-.625t.625-1.625V9H15.2v23.5h19.45v6.25q0 1 .625 1.625T36.9 41ZM17.85 16.9v-3h12v3Zm0 6.7v-3h12v3Zm16.65-6.7q-.6 0-1.05-.45Q33 16 33 15.4q0-.6.45-1.05.45-.45 1.05-.45.6 0 1.05.45.45.45.45 1.05 0 .6-.45 1.05-.45.45-1.05.45Zm0 6.45q-.6 0-1.05-.45-.45-.45-.45-1.05 0-.6.45-1.05.45-.45 1.05-.45.6 0 1.05.45.45.45.45 1.05 0 .6-.45 1.05-.45.45-1.05.45ZM11.05 41h20.6v-5.5H8.85v3.25q0 1 .625 1.625T11.05 41Zm-2.2 0v-5.5V41Z" />
              </svg>
              </br>
              <p class="p-0 m-0">
                Titulaciones</p>
            </a>
          </li>
          <li class="nav-item text-center ubicacion">

            <a class="nav-link text-light text-uppercase linckActive p-0 mx-3" href="<?php echo base_url ?>/Ubicacion">
              <svg xmlns="http://www.w3.org/2000/svg" height="35" width="" fill="currentColor"
                viewBox="0 0 110.000000 50.000000" class="p-0 mx-3">
                <path
                  d="M24 44q-5.3 0-8.65-1.55Q12 40.9 12 38.5q0-1.35 1.225-2.55Q14.45 34.75 16.6 34l.9 2.9q-.8.25-1.475.7-.675.45-1.075.9.85 1 3.525 1.75T24 41q2.85 0 5.55-.75 2.7-.75 3.55-1.75-.4-.4-1.05-.85-.65-.45-1.5-.75l.85-2.9q2.15.75 3.375 1.95T36 38.5q0 2.4-3.35 3.95Q29.3 44 24 44Zm0-10.75q1.05-1.95 2.225-3.575Q27.4 28.05 28.55 26.6q2.2-2.85 3.475-4.9 1.275-2.05 1.275-5.4 0-3.9-2.7-6.6Q27.9 7 24 7q-3.9 0-6.6 2.7-2.7 2.7-2.7 6.6 0 3.35 1.275 5.4 1.275 2.05 3.475 4.9 1.15 1.45 2.325 3.075Q22.95 31.3 24 33.25Zm0 5.45q-.6 0-1.05-.35-.45-.35-.65-.9-1.2-3.65-3-6.05t-3.5-4.6q-1.7-2.2-2.9-4.575T11.7 16.3q0-5.15 3.575-8.725Q18.85 4 24 4q5.15 0 8.725 3.575Q36.3 11.15 36.3 16.3q0 3.55-1.2 5.925T32.2 26.8q-1.7 2.2-3.5 4.6-1.8 2.4-3 6.05-.2.55-.65.9T24 38.7Zm0-19.4q1.25 0 2.125-.875T27 16.3q0-1.25-.875-2.125T24 13.3q-1.25 0-2.125.875T21 16.3q0 1.25.875 2.125T24 19.3Zm0-3Z" />
              </svg>
              </br>
              <p class="p-0 m-0">
              Ubícanos</p>
            </a>
          </li>
          <li class=" text-center">
            <a class="nav-link text-light d-flex flex-column  p-0  mx-3" href="<?php echo base_url ?>/Login">
              <svg xmlns="http://www.w3.org/2000/svg" version="1.0" fill="currentColor" height="60"
                viewBox="0 0 119.000000 194.000000">
                <metadata>
                  Created by potrace 1.16, written by Peter Selinger 2001-2019
                </metadata>
                <g transform="translate(0.000000,194.000000) scale(0.100000,-0.100000)" stroke="none">
                  <path
                    d="M497 1893 c-4 -3 -7 -24 -7 -45 0 -27 -4 -38 -15 -38 -8 0 -15 -4 -15 -10 0 -5 -7 -10 -15 -10 -8 0 -15 -4 -15 -10 0 -5 -9 -10 -20 -10 -11 0 -20 -6 -20 -14 0 -7 -11 -21 -25 -30 -14 -9 -25 -23 -25 -31 0 -8 -6 -15 -14 -15 -15 0 -26 -21 -26 -51 0 -10 -4 -19 -10 -19 -5 0 -10 -9 -10 -20 0 -11 -4 -20 -10 -20 -5 0 -10 -20 -10 -45 0 -34 -4 -45 -15 -45 -8 0 -24 -15 -36 -32 -40 -66 3 -158 74 -158 25 0 27 -3 27 -39 0 -64 25 -117 82 -171 124 -119 289 -122 412 -7 60 57 95 122 96 178 0 37 14 48 63 49 10 0 27 8 38 19 16 15 20 29 17 72 -3 48 -6 56 -35 74 -29 18 -32 25 -33 70 0 38 -5 55 -20 68 -11 9 -23 31 -27 47 -3 17 -13 36 -22 43 -9 7 -20 20 -26 30 -5 10 -23 26 -40 35 -16 9 -34 23 -38 30 -4 6 -17 12 -27 12 -16 0 -20 7 -20 31 0 64 -10 69 -124 69 -56 0 -106 -3 -109 -7z m163 -75 c0 -13 -5 -94 -12 -180 l-12 -158 -31 0 -32 0 -6 137 c-4 75 -7 156 -7 180 l0 43 50 0 c45 0 50 -2 50 -22z m-151 -280 l1 -58 -90 0 c-100 0 -96 -3 -84 72 4 20 15 46 25 57 11 11 24 32 29 46 5 14 16 25 24 25 8 0 29 15 48 33 l33 32 6 -75 c4 -41 7 -101 8 -132z m234 182 c25 0 117 -101 117 -130 0 -8 7 -24 15 -34 8 -11 15 -32 15 -48 l0 -28 -94 0 -95 0 4 33 c3 17 7 77 11 132 4 55 9 94 11 88 3 -7 10 -13 16 -13z m207 -335 l0 -25 -345 0 -345 0 0 25 0 25 345 0 345 0 0 -25z" />
                  <path
                    d="M405 961 c-16 -5 -65 -16 -107 -26 -43 -10 -78 -22 -78 -27 0 -4 -4 -8 -10 -8 -28 0 -118 -94 -144 -150 -22 -50 -34 -224 -21 -325 l6 -54 66 -30 c97 -46 100 -44 109 39 4 41 11 70 18 70 6 0 22 24 35 53 39 85 151 167 257 186 73 14 141 14 149 1 3 -5 14 -10 25 -10 55 0 176 -96 222 -177 16 -29 34 -53 39 -53 5 0 9 -32 9 -71 l0 -72 40 6 c22 3 61 18 87 34 l48 30 3 154 c2 138 0 160 -19 214 -21 55 -81 135 -103 135 -5 0 -14 6 -20 14 -12 16 -135 56 -172 56 -13 0 -24 5 -24 10 0 15 -58 12 -138 -9 -77 -20 -182 -16 -190 8 -4 12 -41 13 -87 2z" />
                  <path
                    d="M516 633 c-16 -2 -35 -11 -43 -19 -8 -8 -21 -14 -29 -14 -8 0 -14 -4 -14 -10 0 -5 -6 -10 -13 -10 -15 0 -67 -54 -67 -70 0 -5 -4 -10 -10 -10 -5 0 -10 -7 -10 -15 0 -8 -4 -15 -9 -15 -5 0 -12 -18 -16 -40 -4 -22 -11 -40 -16 -40 -16 0 -9 -96 12 -166 15 -49 32 -79 62 -111 23 -23 46 -43 51 -43 5 0 15 -8 22 -17 18 -26 278 -33 327 -9 33 15 97 78 97 95 0 5 7 11 15 15 8 3 15 15 15 26 0 11 5 20 10 20 6 0 10 16 10 35 0 19 5 35 10 35 27 0 -20 218 -49 228 -6 2 -11 9 -11 16 0 14 -54 66 -69 66 -5 0 -11 7 -15 15 -3 8 -14 15 -25 15 -11 0 -21 4 -23 10 -3 11 -166 21 -212 13z m144 -122 c33 -23 60 -78 60 -123 0 -25 5 -38 16 -40 13 -2 16 -21 17 -106 1 -56 -1 -102 -5 -102 -5 0 -8 -7 -8 -15 0 -12 -17 -15 -95 -15 -51 0 -117 5 -146 11 l-52 11 7 67 c3 36 6 85 6 109 0 31 4 42 15 42 11 0 15 11 15 35 0 66 35 123 90 147 19 8 49 1 80 -21z" />
                </g>
              </svg>
            </a>
          </li>
        </ul>
      </div>

    </div>
  </nav>


  <!-- end-->


  <script>


    $(function () {
      $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
          $('.navscroll').addClass("azul");
        } else {
          $(".navscroll").removeClass("azul");
        }
      });
    });
  </script>