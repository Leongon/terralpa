const url_list_categoria = `${base_url}/Categoria/list`;
const url_buscar = `${base_url}/Categoria/buscar_unregistro`;
const url_lista_observacion = `${base_url}/Observaciones/listar`;
const url_lista_observaciones = `${base_url}/Observaciones/listarS`;

const table = document.querySelector(".DatosTable");
const listaObservaciones = document.querySelector(".listaObservaciones")

const txtcodigo = document.querySelector(".codigo");
const txtcategoria = document.querySelector(".categoria");



const buscarCategoria = () => {
    axios({
        method: 'post',
        url: url_list_categoria,
    })
        .then(function (response) {
            /*  console.log(response.data)  */
            table.innerHTML = "";
            resultado = response.data;
            for ($data of resultado) {
                table.innerHTML += `
                
            <tr>
              
                <td>${$data.idcategoria}</td>
                <td class="descripcion">${$data.nombreCategoria}</td>
                
                <td>
                    <div class="dropdown">
                        <a
                            class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                            href="#"
                            role="button"
                            data-toggle="dropdown"
                        >
                            <i class="dw dw-more"></i>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                           
                            <button type="button" class="dropdown-item btn-Editar" id="${$data.idcategoria}" name="editar">
                                <i class="dw dw-edit2"></i>
                                Editar
                            </button>
                            <button type="button" class="dropdown-item btn-Eliminar" id="${$data.idcategoria}" name="Eliminar">
                                <i class="dw dw-delete-3"></i>
                                 Elminar
                            </button>
                            <button type="button" class="dropdown-item btn-observaciones" id="${$data.idcategoria}" name="Observaciones">
                                
                                <i class="icon-copy fi-eye"></i>
                                 Observaciones
                            </button>
                        </div>
                    </div>
                </td>
            </tr>
            `
            }

        })
}

table.addEventListener("click", (e) => {

    button = e.target;
    if (button.type == "button") {
        if (button.name == "Eliminar") {
            action = "Eliminar"
            console.log(button.id)
            console.log(action)
            /*        eliminar(button.id) */
        }
        if (button.name == "editar") {
            action = "Editar"
            console.log(button.id)
            console.log(action)

            Buscar(button.id)
            $('#Modal_productos').modal('show')

            /*  txtcodigo.value = button.id 
            titulo.innerHTML = "Actualizar Observacion" */
        }
        if (button.name == "Observaciones") {
            action = "Observaciones"
            console.log(button.id)
            console.log(action)

            listarObseervacion(button.id)
            $('#Modal_pdf_observaciones').modal('show')

            console.log()

            /*  txtcodigo.value = button.id 
            titulo.innerHTML = "Actualizar Observacion" */
        }

    }

})

const Buscar = ($dato) => {
    form = new FormData()
    form.append("codigo", $dato)
    axios({
        method: 'post',
        url: url_buscar,
        data: form
    })
        .then(function (response) {

            $codigoS = response.data.data[0].idcategoria
            console.log($codigoS)
            if ($codigoS == undefined) {

                txtcategoria.value = ""
            } else {
                $categoria = response.data.data[0].nombreCategoria

                txtcategoria.value = $categoria
            }
        })
}

const listarObseervacion = (idcategoria) => {
    console.log(idcategoria)
    formData = new FormData();

    formData.append('id', idcategoria)

    axios({
        method: 'post',
        url: url_lista_observacion,
        data: formData
    })
        .then(function (response) {
           
            listaObservaciones.innerHTML = "";
            resultado = response.data;
            cont = 0
            $res=response.data
            if ( $res.length === 0) {
                listarObseervaciones ();
            } else {
                for (const $data of resultado) {
                    /*  console.log($data)  */
                    cont++
                    if ($data.estado == 1) {
                        check = "checked"
                    } else {
                        check = ""
                    }

                    listaObservaciones.innerHTML += `
              
                <div class="custom-control custom-checkbox mb-5">
                <input type="checkbox" value="${$data.observaciones}" class="custom-control-input chkobservacion" id="chkobservacion${cont}" name="chkobservacion[]" ${check}  />
                <label class="custom-control-label" for="chkobservacion${cont}">${$data.observaciones}</label>
              </div>
                `
                }
                $(".chkobservacion").click(function () {

                    if ($(this).attr('checked')) {
                        $(this).attr('checked', false);
                        $valor = 0

                    } else {
                        $(this).attr('checked', 'checked');
                        $valor = 1
                    }
                    console.log($valor)
                    $codigo = $(this).val();
                    /*updatechk($codigo,$valor) */
                });
            }
        })
        .catch(function (error) {
            console.log(error);
        });
}

const listarObseervaciones = () => {

    axios({
        method: 'post',
        url: url_lista_observaciones,

    })
        .then(function (response) {
            /* console.log(response.data)   */
            listaObservaciones.innerHTML = "";
            resultado = response.data;
            cont = 0
            for (const $data of resultado) {
                /*  console.log($data)  */
                cont++
                if ($data.estado == 1) {
                    check = "checked"
                } else {
                    check = ""
                }

                listaObservaciones.innerHTML += `
              
                <div class="custom-control custom-checkbox mb-5">
                <input type="checkbox" value="${$data.observaciones}" class="custom-control-input chkobservacion" id="chkobservacion${cont}" name="chkobservacion[]" ${check}  />
                <label class="custom-control-label" for="chkobservacion${cont}">${$data.observaciones}</label>
              </div>
                `
            }
            $(".chkobservacion").click(function () {

                if ($(this).attr('checked')) {
                    $(this).attr('checked', false);
                    $valor = 0

                } else {
                    $(this).attr('checked', 'checked');
                    $valor = 1
                }
                console.log($valor)
                $codigo = $(this).val();
                /*updatechk($codigo,$valor) */
            });

        })
        .catch(function (error) {
            console.log(error);
        });
}
const updatechk = ($codigo, $estado) => {
    form = new FormData()
    form.append("codigo", $codigo)
    form.append("estado", $estado)
    axios({
        method: 'post',
        url: url_updatechk,
        data: form
    })
        .then(function (response) {
            resultado = response.data
            console.log(response.data)
            if (resultado.status) {
                swal(
                    {
                        type: 'success',
                        title: "resultado.error",
                        text: `${resultado.msg}`,
                    }
                )
                render_lista()

                var table = $('.data-table').DataTable();

            } else {
                swal(
                    {
                        type: 'error',
                        title: "Error",
                        text: `${resultado.error}`,
                    }
                )

            }

        })
        .catch(function (error) {
            console.log(error);
        });
}


buscarCategoria()