const { createApp } = Vue

const urlugar = `${base_url}/Productos/ListaContrata`;

createApp({
    data() {
        return {
            Listboleta: [],
            searchterm: '',
            datapdf:[]
        }
    },
    methods: {
        getLugares() {

            axios({
                method: 'GET',
                url: urlugar,

            })
                .then(response => {
                        
                    console.log(response.data)
                    this.Listboleta = response.data;

                    var resultado=response.data
                    resultado.forEach(element =>  {
                        var a=JSON.parse(element.descripcion)
                      

                        a.forEach(elemento=> {
                            this.datapdf.push(elemento.producto)
                        });
                        
                      
                    });
                 
                    
                });
        },
    },
    mounted() {
        this.getLugares()
    }, computed: {
        filteredList() {
            return this.Listboleta.filter(entry => {
                
                var id = entry.id + ""
                return id.includes(this.searchterm.toLowerCase())
            });
        }
    }

}).mount('#app')

console.log("hola")