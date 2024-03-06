<?php
headerAdmin($data);
?>

<body>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="pd-ltr-20 xs-pd-20-10">
                    <div class="min-height-200px">

                        <!-- Simple Datatable start -->
                        <div class="card-box mb-30">
                            <div class="pb-20 ">
                                <input type="text" v-model="searchterm" class="form-control" placeholder="Search term">
                                <table class="data-table table-dark bg-dark table stripe hover nowrap">
                                    <thead>
                                        <tr>
                                            <th class="table-plus  datatable-nosort">#</th>
                                            <th>Nombre</th>
                                            <th>Fech. Emission</th>
                                            <th>Fech. Vencimiento</th>
                                            <th class="datatable-nosort">Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-productos lista-tareas" v-for="listProform in filteredList">
                                        <tr>
                                            <th scope="row">
                                                <a target="_blank"
                                                    :href="'<?php echo base_url ?>/Productos/pdf_contrata?id='+ listProform.id"
                                                    class="text-light">
                                                    {{listProform.idcontrata}}
                                                </a>
                                            </th>
                                            <td>
                                                <a target="_blank"
                                                    :href="'<?php echo base_url ?>/Productos/pdf_contrata?id='+ listProform.id"
                                                    class="text-light">
                                                    {{listProform.id}}
                                                </a>
                                            </td>
                                            <td>
                                                <a target="_blank"
                                                    :href="'<?php echo base_url ?>/Productos/pdf_contrata?id='+ listProform.id"
                                                    class="text-light">
                                                    {{listProform.fechaInicial}}</a>
                                            </td>
                                            <td>
                                                <a target="_blank"
                                                    :href="'<?php echo base_url ?>/Productos/pdf_contrata?id='+ listProform.id"
                                                    class="text-light">
                                                    {{listProform.fechav}}</a>
                                            </td>
                                            <td>
                                                <a target="_blank"
                                                    :href="'<?php echo base_url ?>/Productos/pdf_contrata?id='+ listProform.id"
                                                    class="text-light">

                                                    <p v-if="listProform.estado=='pendiente'"
                                                        class="bg-light text-dark text-center p-1">
                                                        {{listProform.estado}}
                                                    </p>
                                                    <p v-else class="bg-danger text-center p-1">
                                                        {{listProform.estado}}
                                                    </p>
                                                </a>

                                            </td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <!-- Simple Datable End -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome modal start -->


    <?php
    footerAdmin($data);
    ?>