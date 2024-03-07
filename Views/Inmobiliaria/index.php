<style>
  .nav-inmobiliaria {
    background-color: #6B000D !important;

  }
  .inmobiliaria {
   color: #6B000D !important;

  }
</style>
<?php nav() ?>
<script>

document.querySelector(".imgLogo").src="<?= get_logo_inmobiliaria()?>";

</script> 
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<!-- end-->
<div id="app">
  <main class=" text-white vh-100">
    <img
      src="https://e.nexoinmobiliario.pe/customers/grupo-caral/2387-verah-3/departamentos-santiago-de-surco-63167ab48fe35_b.jpg"
      alt="" srcset="" class="w-100 h-100" style="min-width: 100%;
      min-height: 100vh;
      max-width: 100%;
      max-height: 100vh;
      object-fit: cover;">

<div class="card-img-overlay p-0  ">

<div class="  d-flex p-4 w-100 h-100 text-center align-items-center card-modificado-1">
  <div class="row text-center d-flex align-items-center  justify-content-center">
    <div class="col-md-12 flex-column w-75 ">
      
      <img src="<?= get_logo_inmobiliaria()?>" alt="" class="img-fluid w-50">
      <div class="container card-modificado-1 w-100 ">
      <h4 class=" fonts_google position-relative  text-center-movil text-uppercase ">&iexcl; Tu propiedad te espera !

            </h4>
            <form>
              <div class="row justify-content-center w-100">
                <div class="col-lg-2 mb-3">

                  <select class="form-select form-select-sm "  aria-label="Default select example">
                  <option value="">Todos</option>
                  <option selected value="4">Lotes</option>
                  <option value="3">Casas</option>
                  <option value="1">Departamento</option> 
                  <option value="2">Oficinas</option>
                  <option value="2">Alquiler</option>
                 
                   
                    
                   
                  
                  </select>

                </div>
                <div class="col-lg-5 mb-3">

                <select class="form-select form-select-sm " v-model="searchterm" aria-label="Default select example" placeholder="Ingresa Departamento, Provincia, Distrito o Urbanizaci贸n">
                    <option value="" >Todos</option>
                    <option selected value="Ayacucho">Ayacucho</option>
                    <option value="Lima">Lima</option>
                
                  </select>
                   </div>
                   
                <div class="col-lg-3 mb-3">

                  <input type="Button" class="btn btn-danger w-100" id="exampleInputEmail1" value="Buscar">

                </div>
              </div>
             <!--  <div class="row justify-content-center">
                <div class="col-lg-1 mb-3">
                  <select class="form-control form-control-sm" aria-label="Default select example">

                    <option value="1">S/</option>
                    <option value="2">US$</option>

                  </select>

                </div>
                <div class="col-lg-4 mb-3">

                  <input type="email" class="form-control form-control-sm" id="exampleInputEmail1"
                    placeholder="Precio desde" aria-describedby="emailHelp">

                </div>
                <div class="col-lg-4 mb-3">

                  <input type="email" class="form-control form-control-sm" id="exampleInputEmail1"
                    placeholder="Precio hasta" aria-describedby="emailHelp">
                </div>
              </div> -->
            </form>
          
      </div>
      
    </div>

  </div>
</div>
</div>

  </main>
  <section class="mb-1">

    <div class=" container my-3">
      <div class="row  ">

        <div class="col-lg-4  mb-3 " v-for="Vende of filteredList">
          <div class="card  border border-secondary border-3">
          <div v-if="Vende.Estado">

                <div class="card ">
                  <img :src="Vende.img[0].img" class="card-img" alt="..." height="250">
                  <div class="card-img-overlay p-0 m-0">
                    <p class="card-title  bg-danger w-50 text-center text-light m-0">S/ {{ Vende.precio}}</p>
                    <p class="card-title  bg-secondary w-50 text-center text-light text-uppercase">{{
                      Vende.Etapa_proyecto}}</p>
                   
                      <img src="<?= ASSETS ?>/img\Inmobiliaria/vendido.png" class="img-fluid" alt="">
                    
                  </div>
                </div>
                <div class="card-body text-dark">
                  <p class="card-title text-danger fw-bolder ">{{ Vende.Terreno_venta}}</p>
                  <p class="text-center">
                    <i class="fa-solid fa-location-dot text-danger " style="font-size: 25px;"></i>
                    <span>{{Vende.direccion}}</span> -
                    <span>{{Vende.departament}}</span>
                  </p>
                  <p class="d-flex gap-2 text-center justify-content-center ">
                    <span><i class="fa-solid fa-ruler-vertical text-danger" style="margin-top:8px;"></i>
                      {{Vende.area_total}}</span>
                    <span class="text-danger" style="font-size: 25px;">|</span>
                      <span><i class="fa-solid fa-bed text-danger" style="margin-top:8px;"></i> {{Vende.part_terreno.uno}}
                    </span>
                  </p>
                </div>
              

            </div>


            <div v-else>
              <a :href="'<?php echo base_url; ?>/Inmobiliaria/Detalles?id='+Vende.id"
                style=" text-decoration: none;">
                <div class="card ">
                  <img :src="Vende.img[0].img" class="card-img" alt="..." height="250">
                  <div class="card-img-overlay p-0 m-0">
                    <p class="card-title  bg-danger w-50 text-center text-light m-0">S/ {{ Vende.precio}}</p>
                    <p class="card-title  bg-secondary w-50 text-center text-light text-uppercase">{{
                      Vende.Etapa_proyecto}}</p>
                   
                  </div>
                </div>
                <div class="card-body text-dark">
                  <p class="card-title text-danger fw-bolder">{{ Vende.Terreno_venta}}</p>
                  <p class="text-center">
                    <i class="fa-solid fa-location-dot text-danger " style="font-size: 25px;"></i>
                    <span>{{Vende.direccion}}</span>- <span>{{Vende.departament}}</span>
                  </p>
                  <p class="d-flex gap-2 text-center justify-content-center ">
                    <span><i class="fa-solid fa-ruler-vertical text-danger" style="margin-top:8px;"></i>
                      {{Vende.area_total}}</span> 
                    <span class="text-danger" style="font-size: 25px;">|</span>
                    <span><i class="fa-solid fa-bed text-danger" style="margin-top:8px;"></i> {{Vende.part_terreno.uno}}
                    </span>
                  </p>
                </div>
              </a>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>

  <!-- Button trigger modal -->

</div>

<?php footer() ?>
<script src="<?= ASSETS ?>/js/BDinmo.js"></script>

<div class=" btn-group dropup position-fixed fixed-bottom d-flex gap-2   w-10">


  <a class=" icons-hover-whastapp "
    href="https://api.whatsapp.com/send?phone=51966006552&text=Hola,Con Inmobiliaria Terrralpa%3F%2C%20Quisiera%20saber%20mas%20sobre%20sus%20productos%0A%0A"
    target="_blank">
    <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="" width="50">
  </a></br>

  <a class=" icons-hover-whastapp   " href="https://www.facebook.com/TERRALPA" target="_blank">
    <img src="<?= ASSETS ?>/img/inicio/face.png" alt="" width="50">
  </a>
</div>