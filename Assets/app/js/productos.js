const { createApp } = Vue

const urlugar = `${base_url}/Productos/lugares`;
const url_proforma_buscar_cliente = `${base_url}/Productos/buscar_proformas_activas_cliente`
const url_dni = `${base_url}/Usuarios/apidni`;

const url_departamento = `${base_url}/Usuarios/Departamento`;

const url_productos = `${base_url}/Productos/productos`;

const url_lista_observaciones = `${base_url}/Observaciones/listar`;

const url_lista_chkobs = `${base_url}/Observaciones/listarchkobs`;

const url_listar_categoria = `${base_url}/Observaciones/listar_categoria`;
const url_proforma_Guardar = `${base_url}/Productos/save`;

const url_B_p_C = `${base_url}/Productos/proforma_id`;

const url_ListD = `${base_url}/DescripcionPago/Listar`;

const app = {
    data() {
        return {
            message: 'Hello Vue!',
            lugares: [],
            listaProForma: [],
            listacategoria: [],
            provincias: [],
            departametos: [],
            distritos: [],
            listaObservaciones: [],
            listarProductos: [],

            dni: '',
            nombres: '',

            selecLugares: '2',
            selecDepartamento: '3020',
            selecProvincia: '3021',
            selecDistrito: '3022',
            selec_categoria: '1',
            direccion: '',
            telefono: '',

            productoAgregado: [],
            productos: '',
            cantidad_Productos: '',
            descuento: '0',

            ChkObeservaciones: [],
            pago: "",
            montopago: [],

            listarProductos2: [],
            searchterm: '',
            currentItem: '',
            pagosObs: '',

            TotalPrecio: '0.00',
            Totalpago:'0.00',
            ListarD:[],
         }
    }, components: {
        vSelect: window["vue-select"]
    }, watch: {
        
        selecLugares(newVal) {
            console.log('item changed', newVal);
            this.postProductos(newVal)
        },

        selecDepartamento(newVal) {
            console.log('item changed', newVal);
            this.getProvinvcia(parseInt(newVal))
        },

        selecProvincia(newVal) {
            console.log('item changed', newVal);
            this.getDistrito(parseInt(newVal))
        },

        selecDistrito(newVal) {
            console.log('item changed', newVal);
        }
    },
    methods: {
        async getListD() {
            const response = await axios.get(url_ListD)
            var datos=response.data

            if (response.data) {
                datos.forEach(element => {
                    element.show = false
                });
                this.ListarD = datos
            } else {
                this.ListarD = []
            }
           /*  console.log(this.ListarD)   */
        },
        async getLugares() {
            const response = await axios.get(urlugar)
            this.lugares = response.data
        },

        async getcategoria() {
            const response = await axios.get(url_listar_categoria)
            this.listacategoria = response.data
            /* console.log(this.Listcategorias)   */
        },

        async getobservaciones() {
            const response = await axios.get(url_lista_observaciones)
            this.listaObservaciones = response.data

        },

        async getchkobs(id) {
            const response = await axios.get(url_lista_chkobs + "?id=" + id)
            for (const $data of response.data) {
                this.ChkObeservaciones.push($data.IdObservacion)
            }
        },

        async BPAcliente(dni) {
            const response = await axios.post(url_proforma_buscar_cliente, {
                idcliente: dni
            }, {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            })

            if (response.data == false) {
                Swal.fire({
                    icon: 'error',
                    title: 'No existen proformas activas',
                })
            } else {
                this.listaProForma = response.data;
                const mdl_cotiza = new bootstrap.Modal(document.getElementById('Modal_pdf_cotizacion'))
                mdl_cotiza.show()
            }

            this.postapidDni(dni)
        },

        async postapidDni(dni) {
            const response = await axios.post(url_dni, {
                idcliente: dni
            }, {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            })

            if (response.data.error == "RUC invalido" || response.data.error == "RUC debe contener 11 digitos" || response.data === "") {
                this.nombres = "";
            }
            else {
                if (response.data.nombres == undefined) {
                    this.nombres = response.data.nombres;
                } else {
                    this.nombres = response.data.nombres + " " + response.data.apellidoPaterno + " " + response.data.apellidoMaterno;
                }
            }
        },

        async getdepartamentos(id) {
            const response = await axios.get(url_departamento + "?id=" + id)
            this.departametos = response.data
        },

        async getProvinvcia(id) {
            const response = await axios.get(url_departamento + "?id=" + id)
            this.provincias = response.data
        },

        async getDistrito(id) {
            const response = await axios.get(url_departamento + "?id=" + id)
            this.distritos = response.data
        },

        async postProductos(id) {
            const response = await axios.post(url_productos, {
                idlugar: id
            }, {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            })
            /*             console.log(response.data) */
            this.listarProductos = response.data
            this.listarProductos2 = response.data
            /*  console.log(this.listarProductos) */


        },

        onChangeCategoria(selec_catego) {
            this.ChkObeservaciones = []
            this.getchkobs(selec_catego)
        },

        agregarProducto(json, cantidad_Producto) {

            if ((cantidad_Producto === '' || json === '')) {
                Swal.fire({
                    icon: 'error',
                    title: 'Elija los Productos porfavor',
                    text: 'Datos incompletos!',

                })
            } else {
                json.cantidad_Producto = cantidad_Producto;
                delete json.img;
                json.Descuento = 0;
                json.Total = json.precio * json.cantidad_Producto

                this.productoAgregado.push({
                    producto: json
                })

               
                this.producto = ''
                this.productos = ''
                /* console.log(json) */
            }
            this.Total()
            this.pago=this.TotalPrecio
            this.DeletElemtosrepetidos()


        },

        editar(index, $event) {
            if (($event.target.value == '')) {
                this.productoAgregado[index].producto.Descuento = 0
            } else {
                this.productoAgregado[index].producto.Descuento = parseInt($event.target.value)
            }

            this.Total()
            this.DeletElemtosrepetidos()
        },

        eliminarProducto(index, total) {

            this.productoAgregado.splice(index, 1)
            this.DeletElemtosrepetidos()
            this.Total()
        },

        btnMdlObs() {
            const Modalobservaciones = new bootstrap.Modal(document.getElementById('Modal_pdf_observaciones'))
            Modalobservaciones.show()

        },

        btnLimpiarProdutos() {
            this.productoAgregado = []
            this.TotalPrecio = 0.00
            this.DeletElemtosrepetidos()
        },

        btnpago(pago, pagosObs) {
            if (pago === '' || pagosObs == '' || pago === 0 || pago > this.TotalPrecio) {
                
                if(pago > this.TotalPrecio){
                    Swal.fire({
                        icon: 'success',
                        title: 'Monto en cero' ,
                    })
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'error complete los datos' ,
                    })
                }
               
            } else {
                    if(this.sumatotal()==='completo'){
                        /* console.log("completo" + this.Totalpago)    */
                        Swal.fire({
                            icon: 'error',
                            title: 'datos completos' ,
                        })
                    }else{
                        this.montopago.push({ Cuota: pago, observacionPago: pagosObs })
                        if(this.sumatotal()==='completo'){
                            var sum= this.TotalPrecio.toFixed(2)
                          
                            this.Totalpago= this.sumatotal()
                            this.pago=this.TotalPrecio - sum
                            Swal.fire({
                                icon: 'success',
                                title: 'datos completos' ,
                            })
                        }else{
                            var sum = this.sumatotal()
                            this.Totalpago= this.sumatotal()
                            this.pago=this.TotalPrecio - sum
                        }
                        Swal.fire({
                            icon: 'success',
                            title: 'Queda :'+ (this.TotalPrecio - sum) ,
                        })
                       
                    }
                }
        },  

        sumatotal(){
            var pago = 0
            this.montopago.forEach(element => {
                pago = pago + element.Cuota
            });
            if(pago>=this.TotalPrecio){
                return "completo"
            }else{
                
                return pago.toFixed(2)
            }
           
        },

         btneliminarmontopagado(index) {
            this.montopago.splice(index, 1)
            console.log(this.montopago)
            this.Totalpago= this.sumatotal()
            this.sumatotal()
            this.Total()
            this.pago=this.TotalPrecio-this.Totalpago
            
        },

        async btnGuardarProductos() {
            const response = await axios.post(url_proforma_Guardar, {
                id_usuario: idusuario,
                productos: JSON.stringify(this.productoAgregado),
                departamento: JSON.parse(JSON.stringify(this.selecDepartamento)),
                provincia: JSON.parse(JSON.stringify(this.selecProvincia)),
                Distrito: JSON.parse(JSON.stringify(this.selecDistrito)),
                Direccion: JSON.parse(JSON.stringify(this.direccion)),
                ChkObservaciones: JSON.stringify(this.ChkObeservaciones),
                id_cliente: this.dni,
                nombre: this.nombres,
                telefono: this.telefono,
                pagos: JSON.stringify(this.montopago),
                ctr: "0"
            }, {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            })

            if (response.data.status) {
                /*  console.log(response.data.status) */
                var win = window.open(`${base_url}/Productos/pdf?id=${response.data.id}`, '_blank')
                win.focus();
            } else {
                console.log(response.data)
                Swal.fire({
                    icon: 'error',
                    title: response.data.error,
                })
            }
        },

        async btnGuardarcontrata() {
            const response = await axios.post(url_proforma_Guardar, {
                id_usuario: idusuario,
                productos: JSON.stringify(this.productoAgregado),
                departamento: JSON.parse(JSON.stringify(this.selecDepartamento)),
                provincia: JSON.parse(JSON.stringify(this.selecProvincia)),
                Distrito: JSON.parse(JSON.stringify(this.selecDistrito)),
                Direccion: JSON.parse(JSON.stringify(this.direccion)),
                ChkObservaciones: JSON.stringify(this.ChkObeservaciones),
                id_cliente: this.dni,
                nombre: this.nombres,
                telefono: this.telefono,
                pagos: JSON.stringify(this.montopago),
                ctr: "1"
            }, {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            })

            if (response.data.status) {
                /*  console.log(response.data.status) */
                var win = window.open(`${base_url}/Productos/pdf_contrata?id=${response.data.id}`, '_blank')
                win.focus();
            } else {
                console.log(response.data)
                Swal.fire({
                    icon: 'error',
                    title: response.data.error,
                })
            }
        },

        async btnBP(valor) {
            /*  console.log(valor) */

            const response = await axios.post(url_B_p_C, {
                IdCliente: valor
            }, {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            })

            const $resultado = response.data[0]
            this.dni = $resultado.id_cliente
            this.nombres = $resultado.nombre;
            this.telefono = $resultado.telefono;
            this.selecDepartamento = parseInt($resultado.departamento);
            this.getProvinvcia(this.selecDepartamento)
            this.selecProvincia = parseInt($resultado.provincia);
            this.getDistrito(this.selecProvincia)
            this.selecDistrito = parseInt($resultado.distrito);
            this.direccion = $resultado.direccion;
            this.productoAgregado = JSON.parse($resultado.descripcion)
            console.log($resultado)
            this.DeletElemtosrepetidos()

        },

        DeletElemtosrepetidos() {
            var data1 = JSON.parse(JSON.stringify(this.listarProductos2))
            var data2 = JSON.parse(JSON.stringify(this.productoAgregado))
            /* console.log(data1[0]["codigo"]) */
            var array = [];
            for (var i = 0; i < data1.length; i++) {
                var igual = false;
                for (var j = 0; j < data2.length & !igual; j++) {
                    if (data1[i]['codigo'] == data2[j]["producto"]['codigo'])
                        igual = true;
                }
                if (!igual) array.push(data1[i]);
            }
            this.listarProductos = array;
        },

        filterKey(e) {
            // Si el código es menor que 48 (0) o mayor que 57 (9)
            if (e.keyCode < 48 || e.keyCode > 57) {
                // No se agrega
                e.preventDefault();
            }
        }, 

        checaValor(item) {
            // Obtener valor actual
            let valor = parseInt(item.value);
            // Si no es número o es menor de 1
            if (isNaN(valor) || valor < 1) {
                // Asignar 1
                item.value = 1;
            }
        },

        Total() {

            var cont = 0
            var desc = 0
            this.productoAgregado.forEach(element => {
                console.log(element.producto)
                cont = cont + element.producto.Total
                desc = desc + element.producto.Descuento

            });
           /*  console.log(Number.parseFloat(cont).toFixed(2))
            console.log(Number.parseFloat(desc).toFixed(2)) */
            this.TotalPrecio = Number.parseFloat(cont).toFixed(2) - Number.parseFloat(desc).toFixed(2)


        }


    },
    mounted() {
        this.getLugares();
        this.getListD()
        this.getdepartamentos(2533);
        this.getProvinvcia(this.selecDepartamento)
        this.getDistrito(this.selecProvincia)
        this.postProductos(this.selecLugares)
        this.getcategoria()
        this.getobservaciones()
        this.getchkobs(1)

    }, computed: {
        filteredList() {
            return this.listaProForma.filter(entry => {
                var id = entry.id + ""
                return id.includes(this.searchterm.toLowerCase())
            });
        }
    },


}

var _app = createApp(app)

var mountedApp = _app.mount('#app')