const url_save_reclamo="http://192.168.100.4/terralpa/reclamos/save";
const { createApp,ref } = Vue

const file = ref(null);


const app = {
    data() {
        return {
            
            tipDoc:'2',
            Dni:'70420111',
            name:'leon',
            domicilio:'que ti',
            tel:'963852741',
            email:'15974@gmail.com',
            email2:'15974@gmail.com',
            tipservicio:'789142',
            descripcion:'1515615',
            tipqueja:'2',
            Detalle:'dsadsdasdacxzxjx bv djsvdshcvuabcsnfbdvbif',
            archivo:''


         }
    
    }, watch: {
        
        
    },
    methods: {
        async guardareclamo(){
           
            const formreclamos=document.querySelector(".formReclamos");
            const formData = new FormData(formreclamos);
            

            const response = await axios.post(url_save_reclamo, formData, {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'content-type': 'multipart/form-data'
                }
            })

           console.log(response.data)
        },
       },
    mounted() {
        

    }, computed: {
       /*  filteredList() {
            return this.listaProForma.filter(entry => {
                var id = entry.id + ""
                return id.includes(this.searchterm.toLowerCase())
            });
        } */
    },


}

var _app = createApp(app)

var mountedApp = _app.mount('#app')