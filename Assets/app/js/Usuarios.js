const { createApp } = Vue

const url_usuario_lista = `${base_url}/Usuarios/listar_usuario`;
const url_roles = `${base_url}/Usuarios/rol`;
const url_save_user = `${base_url}/Usuarios/save`;
const url_update_user = `${base_url}/Usuarios/update`;
const url_update_activarStado = `${base_url}/Usuarios/activarStado`;


createApp({
    data() {
        return {
            ListUsuarios: [],
            listrol:[],
            searchterm: '',
            lblrol:'',
            img:'',

            show: false,

            id_usuario:'',
            nombre:'',
            email:'',
            firma:'',
            password:'',
            id_rol:'',



        }
    }, components: {
        vSelect: window["vue-select"]
    },
    methods: {
       async getusuarios() {
            const response = await axios.get(url_usuario_lista)
         
             console.log(response.data)  
             var datos = response.data
             if (response.data) {
                datos.forEach(element => {
                    element.show = false
                });
                this.ListUsuarios = datos
            } else {
                this.ListUsuarios = []
            }
        },
        async getrol() {
            const response = await axios.get(url_roles)
            this.listrol=response.data
             console.log(response.data)  
        },

        async saveproducto() {
          
           
            const response = await axios.post(url_save_user, {
                codigo:this.id_usuario,
                nombre:this.nombre,
                Email:this.email,
                pwd:this.password,
                rol:this.id_rol,
                firma:this.img,
            }, {
                headers: {
                     'Content-Type': 'application/x-www-form-urlencoded'
                }
            })

            console.log(this.img)
        },

        btn_modal(modal){
           
            const Modal = new bootstrap.Modal(document.getElementById(modal))
            Modal.show()
        },

        
        renderIMgBase64(event) {

             
            const image = event.target.files[0];
            console.log(image.size)
            if(image.size<700000){
                const reader = new FileReader();
                reader.readAsDataURL(image);
                
                reader.onload = () => {
                    this.img = reader.result;
                    console.log(this.img)
                };
            }else{
                console.log("archivo demasiado grande")
                this.img = '';
            }
        },

        editarPerson(person) {
            person.show = true;
        },
        cancelarPerson(person) {
            person.show = false;
            
        },
        async updatePerson(person,index) {
            person.show = false;
           
            
              
            const response = await axios.post(url_update_user, {
                codigo:person.id_usuario,
                nombre:person.nombre,
                Email:person.email,
                pwd:person.password,
                rol:person.id_rol,
                firma:this.img,
                estado:person.is_activo,
             }, {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            })
            console.log(person.is_activo)
         console.log(response.data)
         if(response.data.status){
            Swal.fire({
                icon: 'success',
                title: 'Actualizacion Completada',
            })
         }else{
            Swal.fire({
                icon: 'error',
                title: response.data.error,
            })
         }
 
           this.getusuarios(); 



        },

        async Update_estado(person,id,estado){
/*             console.log("id:"+id+"--------estado: "+estado);
 */            person.is_activo=estado
            /* const response = await axios.post(url_update_activarStado, {
                idusuario:id,
                estado:estado
             }, 
             {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            
            }) */
          /*   console.log(response.data) */
        }
    },
    mounted() {
        this.getusuarios()
        this.getrol()
    }, computed: {
        filteredList() {
            return this.Listboleta.filter(entry => {
                console.log(entry)
                var id = entry.id + ""
                return id.includes(this.searchterm.toLowerCase())
            });
        }
    }

}).mount('#app')