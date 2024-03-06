const { createApp } = Vue


const url_list_prdoductos = `${base_url}/Producto/listar_productos`;
const url_update_prdoductos = `${base_url}/Producto/update`;
const url_save_prdoductos = `${base_url}/Producto/save`;

const url_buscar_prdoducto = `${base_url}/Producto/buscar_unregistro`;

const urlugar = `${base_url}/Productos/lugares`;


const app = {
    data() {
        return {

            show: false,
            listproductos: [],
            lugares: [],
            selecLugares: 1,
            searchterm: '',

            codigoProducto: '',
            descripcion: '',
            Unid: '',
            peso: '',
            cantidad: '',
            img: '',
            precio: '',
            pagosObs: '',

        }
    },


    methods: {
        editarPerson(person) {
            person.show = true;
        },

        async guardarPerson(person) {
            person.show = false;


            const response = await axios.post(url_update_prdoductos, {
                codigo: person.codigo,
                descripcion: person.descripcion,
                Unid: person.Unid,
                peso: person.peso,
                cantidad: person.cantidad,
                img: person.img,
                idcategoria: person.idcategoria,
                id_precio: person.idprecio,
                precio: person.precio,
                id_lugar: person.id_lugar,
                codigo_producto: person.codigo_producto,
                img: this.img
            }, {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            })

            console.log(response.data)
            console.log(this.img)
            this.getproductos(this.selecLugares);



        },

        cancelarPerson(person) {
            person.show = false;
        },

        async getproductos(id) {

            const response = await axios.get(url_list_prdoductos + '?id=' + id)

            var datos = response.data
            console.log(datos)
            if (response.data) {
                datos.forEach(element => {
                    element.show = false
                });
                this.listproductos = datos
            } else {
                this.listproductos = []
            }
        },

        async getLugares() {
            const response = await axios.get(urlugar)
            this.lugares = response.data
        },

        onChangelugar(e) {

            this.getproductos(e);
        },

        btnMoodalProducto() {
            const Modalobservaciones = new bootstrap.Modal(document.getElementById('Modal_productos'))
            Modalobservaciones.show()

        },


        btnMoodalProducto_precio() {
            const Modal = new bootstrap.Modal(document.getElementById('Modal_precios'))
            Modal.show()

        },

        renderIMgBase64(event) {


            const image = event.target.files[0];
            console.log(image.size)
            if (image.size < 700000) {
                const reader = new FileReader();
                reader.readAsDataURL(image);

                reader.onload = () => {
                    this.img = reader.result;
                    console.log(this.img)
                };
            } else {
                console.log("archivo demasiado grande")
                this.img = '';
            }
        },

        async saveproducto() {

            console.log(this.selecLugares)
            const response = await axios.post(url_save_prdoductos, {
                codigo: this.codigoProducto,
                descripcion: this.descripcion,
                Unid: this.Unid,
                peso: this.peso,
                cantidad: this.cantidad,
                img: this.img,
                lugar: this.selecLugares,
                precio: this.precio
            }, {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            })
            console.log(response.data)
        },

        async B_producto(codigoProducto) {

            const response = await axios.post(url_buscar_prdoducto, {
                codigo: this.codigoProducto,
                lugar: this.selecLugares,

            }, {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            })

            console.log(response.data.data)
            var data = response.data.data

            this.descripcion = data.descripcion
            this.Unid = data.Unid
            this.peso = data.peso
            this.cantidad = data.cantidad
            this.img = data.img
            this.precio = data.precio

        }
    },
    mounted() {
        this.getproductos(this.selecLugares);
        this.getLugares();

    },
    computed: {
        filteredList() {
            if (this.listproductos) {
                return this.listproductos.filter(entry => {
                    var id = entry.codigo

                    return id.toLowerCase().includes(this.searchterm.toLowerCase())
                });
            } else {
                return []
            }
        }
    }

}
var _app = createApp(app);
var mountedApp = _app.mount('#app') 