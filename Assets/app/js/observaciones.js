const { createApp } = Vue


const url_listar_categoria = `${base_url}/Observaciones/listar_categoria`;
const url_lista_observaciones = `${base_url}/Observaciones/listar`;
const url_lista_chkobs = `${base_url}/Observaciones/listarchkobs`;
const url_update = `${base_url}/Observaciones/update`;
const url_savecategoria = `${base_url}/Observaciones/savecategoria`;

createApp({
    data() {
        return {
            Listcategorias: [],
            listaObservaciones:[],
            ChkObeservaciones: [],
            searchterm: '',
            idchksave:'',

            nomCategoria:''
            
        }
    },
    methods: {
        async getcategoria() {
            const response = await axios.get(url_listar_categoria)
            this.Listcategorias=response.data
            /* console.log(this.Listcategorias)   */  
        },
        async getobservaciones() {
            const response = await axios.get(url_lista_observaciones)
            this.listaObservaciones=response.data
             console.log(this.listaObservaciones)   
        },
        async getchkobs(id) {
            this.idchksave=id
            const response = await axios.get(url_lista_chkobs + "?id=" + id)
           /*  console.log(response.data.id) */
            for (const $data of response.data) {
                this.ChkObeservaciones.push($data.IdObservacion)
                console.log(this.ChkObeservaciones)
            }
           
        },
        guardarchk(id){
           
           var checkbox= document.getElementById(id)
           var checked = checkbox.checked;
           if(checked){
                var estado=1;
            }else{
                var estado=0;
            }
           var form = new  FormData();

           form.append("idcatogiria",this.idchksave)
           form.append("idobservacion",id)
           form.append("estado",estado)
           axios({
                method: 'POST',
                url: url_update,
                data: form
            })
            .then(response => {
                console.log(response.data)
            })
            
        },
        guardarcategoria(){
            var form = new  FormData();
            console.log(this.nomCategoria)
            form.append("categoria",this.nomCategoria)
          
            axios({
                 method: 'POST',
                 url: url_savecategoria,
                 data: form
             })
             .then(response => {
                 console.log(response.data)
             })
             this.getcategoria()
        },
        
        btnMdl(id){
      
            const Modalobservaciones = new bootstrap.Modal(document.getElementById('Modal_pdf_observaciones'))
                Modalobservaciones.show()
                this.ChkObeservaciones = []
                this.getchkobs(id)
        },
        btnmdlinsertcategoria(){
            const Modalcategoriainsert = new bootstrap.Modal(document.getElementById('modalinsertCategoria'))
            Modalcategoriainsert.show()
        }
     },
    mounted() {
        this.getcategoria()
        this.getobservaciones()
        
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