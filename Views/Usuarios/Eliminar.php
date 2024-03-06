<?php
headerAdmin($data);
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    <?php echo $data['page_name']; ?>
                </h3>
            </div>

        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>
                            <?php echo $data['page_name']; ?>
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="container ">
                            <h1>Esta seguro que desea eliminar?</h1>
                            <form id="formRegister" class="form-signin" novalidate method="POST">
                               
                                <div class="mt-2">
                                    <label for="nombre" class="sr-only">D.N.I</label>
                                    <input type="hidden" id="dni" name="dni" class="form-control"
                                        placeholder="Ingrese su Dni" required autofocus value="<?php  echo @$data ['b_usuario']["id_usuario"]?>">
                                </div>
                                

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">no</button>
                            <button onclick="eliminar();" type="button" class="btn btn-primary">si</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /page content -->



<script src="<?= ASSETS ?>/app/js/<?= $data['function_js']; ?>"></script>
<script src="<?= ASSETS ?>/app/js/<?= $data['function_js_Register']; ?>"></script>

<?php footerAdmin($data); ?>