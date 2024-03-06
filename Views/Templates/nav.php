<div class="left-side-bar">
  <div class="brand-logo">
    <a href="index.html">

      <img src="<?= get_logo_concretera() ?>" alt="" class="light-logo" />
    </a>
    <div class="close-sidebar" data-toggle="left-sidebar-close">
      <i class="ion-close-round"></i>
    </div>
  </div>
  <div class="menu-block ">
    <div class="sidebar-menu">

      <ul id="accordion-menu">
        <?php if ($_SESSION['id_rol'] == "1") { ?>

        <?php } else { ?>
          <?php if ($_SESSION['id_rol'] == "2") { ?>
            <li class="dropdown">
              <a href="<?= base_url ?>/Dashboard" class="dropdown-toggle no-arrow">
                <span class="micon bi bi-house"></span>
                <span class="mtext">Dashboard</span>
              </a>
            </li>
          <?php } ?>
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
              <i class="micon icon-copy fi-shopping-cart"></i>
              <span class="mtext">Venta</span>
            </a>

            <ul class="submenu">
              <li><a href="<?= base_url ?>/Productos">Cotizar</a></li>

              <li><a href="<?= base_url ?>/Productos/pdfListas">Lista de cotizaciones</a></li>

              <li><a href="<?= base_url ?>/Productos/listaContratas">Lista de Contratos</a></li>
            </ul>
          </li>
          <?php if ($_SESSION['id_rol'] == "2") { ?>
            <li class="dropdown">
              <a href="javascript:;" class="dropdown-toggle">
                <i class="micon icon-copy fi-shopping-bag"></i>
                <span class="mtext">Productos</span>
              </a>
              <ul class="submenu">
                <li><a href="<?= base_url ?>/Producto">Listar</a></li>
              </ul>

            </li>


            <li class="dropdown">
              <a href="javascript:;" class="dropdown-toggle">
                <i class="micon icon-copy fi-torso"></i>
                <span class="mtext">Usuarios</span>
              </a>
              <ul class="submenu">
                <li><a href="<?= base_url ?>/Usuarios">Lista</a></li>

              </ul>
            </li>


            <li class="">
              <a href="<?= base_url ?>/Usuarios" class="dropdown-toggle">

                <i class="micon icon-copy ion-social-buffer"></i>
                Estadisticas
              </a>

            </li>


            <li class="dropdown">
              <a href="javascript:;" class="dropdown-toggle">
                <i class="micon icon-copy dw dw-settings"></i>
                <span class="mtext">Configuraciones</span>
              </a>
              <ul class="submenu">
                <li><a href="<?= base_url ?>/Observaciones">Observaciones</a></li>
                <li><a href="<?= base_url ?>/DescripcionPago">Descripción</a></li>
              </ul>
            </li>

          <?php } ?>
        <?php } ?>
      </ul>

    </div>
  </div>
</div>
<div id="app" v-cloak>