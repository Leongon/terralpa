

const { createApp } = Vue

const url_saveD = `${base_url}/DescripcionPago/save`;
const url_ListD = `${base_url}/DescripcionPago/Listar`;
const url_UpdateD = `${base_url}/DescripcionPago/update`;
const url_deletD = `${base_url}/DescripcionPago/delet`;


createApp({
    data() {
        return {
            ListarD:[],
            DescricionP:'',
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
            console.log(this.ListarD)  
        },

        async saveD() {
            const response = await axios.post(url_saveD, {
                NDescrip: this.DescricionP,
               
            }, {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            })

            console.log(response.data)
            this.getListD()

        },

        async UpdateD(id) {
            console.log(id.N_descripcion)
            const response = await axios.post(url_UpdateD, {
                NDescrip: id.N_descripcion,
                IdD:id.idDescripcion_pago
            }, {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            })
            if(response.data){
                id.show = false;
            }else{
               
            }
            console.log(response.data)
        },

        async DeletD(id) {
            const response = await axios.post(url_deletD, {
                IdD:id
            }, {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            })

            console.log(response.data)
            this.getListD()
        },

        btnMdl(id){
          
            const Modalobservaciones = new bootstrap.Modal(document.getElementById(id))
                Modalobservaciones.show()
            
        },
        activeEdit(person) {
            person.show = true;
        },
        desactiveEdit(person){
            person.show = false;

        }
       
     },
    mounted() {
        this.getListD()
    }, computed: {
        /* filteredList() {
            return this.Listboleta.filter(entry => {
                console.log(entry)
                var id = entry.id + ""
                return id.includes(this.searchterm.toLowerCase())
            });
        } */
    }

}).mount('#app')