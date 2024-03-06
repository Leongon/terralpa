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
                            <form id="formRegister" class="form-signin" novalidate method="POST">
                                <select class="form-select" aria-label="Default select example" id="rol" name="rol" >
                                    <option value="" selected>Seleccione Rol</option>
                                    <?php foreach ($data['rol'] as $valor) { ?>
                                        <option value=" <?php echo $valor['id_rol']; ?>"><?php echo $valor['nombre_rol']; ?>
                                        </option>

                                    <?php } ?>
                                </select>
                                <div class="mt-2">
                                    <label for="nombre" class="sr-only">D.N.I</label>
                                    <input type="nombre" id="dni" name="dni" class="form-control"
                                        placeholder="Ingrese su Dni" required autofocus value="<?php echo $data ['b_usuario']["id_usuario"]?>">
                                </div>
                                <div class="mt-2">
                                    <label for="nombre" class="sr-only">Nombre</label>
                                    <input type="nombre" id="nombre" name="nombre" class="form-control"
                                        placeholder="Ingrese su nombre" required autofocus value="<?php echo $data ['b_usuario']["nombre"]?>">
                                </div>

                                <div class="mt-2">
                                    <label for="email" class="sr-only">Correo</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Ingrese su correo" required autofocus value="<?php echo $data ['b_usuario']["email"]?>">
                                </div>

                                <div class="mt-2">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" id="password" name="password" class="form-control"
                                        placeholder="Ingrese una contraseña" required>
                                </div>

                                <div class="mt-2">
                                    <label for="rep_password" class="sr-only">Password</label>
                                    <input type="password" id="rep_password" name="rep_password" class="form-control"
                                        placeholder="Repita su contraseña" required>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button onclick="actualizar();" type="button" class="btn btn-primary">Save changes</button>
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