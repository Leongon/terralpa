const { createApp } = Vue


TerrenosVenta = [
    {
        id: "1",
        Estado: false, /*true es vendido */
        precio: "300,000",
        Tipo_inmuebl: 'Departamento ',
        area_total: '100 m2',
        Etapa_proyecto: "En Estreno",
        Terreno_venta: "Departamento 3er piso (interior) zona céntrica  ",
        direccion: 'Jr. Untiveros 362  (C.P. Barrio Madgalena Mz. "V" Lote 5B)',
        departament:"Ayacucho",
        part_terreno: {
            uno: "3 Dormitorios",
        },
        img: [{
            id: 1,
            img: url_inicial+'/img/Inmobiliaria/Productos/Departamento-3er-piso(interior)zona-céntrica.jpeg',

        },
        

        ]
    },
    {
        id: "F789456123",
        Estado: true, /*false es NO vendido */
        precio: "300,000",
        departament:"Lima",
        Tipo_inmuebl: 'Departamento ',
        area_total: '100 m2',
        Etapa_proyecto: "En construccion",
        Terreno_venta: "Barrio Verde",
        direccion: 'San juan de Dios  (C.P. tambala. "V" Lote 2B)',
        part_terreno: {
            uno: "3 Dormitorios",

        },
        img: [{
            id: 1,
            img: url_inicial+'/img/Inmobiliaria/Productos/San-juan-de-Dios-(C.P.tambala-V-Lote-2B).jpeg',
            titulo: "Sala"
        },


        ]

    },
    
    {
        id: "2",
        Estado: false, /*false es NO vendido */
        precio: "300,000",
        Tipo_inmuebl: 'Departamento ',
        area_total: '100 m2',
        departament:"Ayacucho",
        Etapa_proyecto: "En construccion",
        Terreno_venta: "Departamento 4to piso (interior) zona céntrica",
        direccion: 'Jr. Untiveros 362  (C.P. Barrio Madgalena Mz. "V" Lote 5B)',
        part_terreno: {
            uno: "4 Dormitorios",

        },
        img: [{
            id: 1,
            img: url_inicial+'/img/Inmobiliaria/Productos/Departamento4topiso(interior)zonacéntrica.png',
        
            titulo: "Sala"
        },


        ]

    },

    {
        id: "3",
        Estado: false, /*false es NO vendido */
        precio: "350,000",
        Tipo_inmuebl: 'Departamento ',
        area_total: '100 m2',
        departament:"Ayacucho",
        Etapa_proyecto: "EN PREVENTA ( ejecutado 70%)",
        Terreno_venta: "Departamento 5to piso (interior) zona céntrica",
        direccion: 'Jr. Untiveros 362  (C.P. Barrio Madgalena Mz. "V" Lote 5B)',
        part_terreno: {
            uno: "4 Dormitorios",

        },
        img: [{
            id: 1,
            img: url_inicial+'/img/Inmobiliaria/Productos/Departamento5topiso(interior)zonacéntrica.png',
    
            titulo: "Sala"
        },


        ]

    },
    {
        id: "4",
        Estado: false, /*false es NO vendido */
        precio: "0.00",
        Tipo_inmuebl: 'Departamento ',
        area_total: ' m2',
        departament:"Ayacucho",
        Etapa_proyecto: "Lotes",
        Terreno_venta: "Andres Avelino Caceres, Ayacucho",
        direccion: 'Andres Avelino Caceres, Ayacucho',
        part_terreno: {
            uno: "",

        },
        img: [{
            id: 1,
            img: url_inicial+'/img/Inmobiliaria/Productos/AndresAvelinoCaceresAyacucho.png',
          
            titulo: "Sala"
        },


        ]

    },
    {
        id: "5",
        Estado: false, /*false es NO vendido */
        precio: "1,300 000",
        Tipo_inmuebl: 'TERMINADO ',
        area_total: '961.86 m2',
        departament:"Ayacucho",
        Etapa_proyecto: "TERMINADO",
        Terreno_venta: "Casa Completa",
        direccion: 'AV. VIA NUEVA S/N',
        part_terreno: {
            uno: "construcción de 2 pisos ",

        },
        img: [{
            id: 1,
            img: url_inicial+'/img/Inmobiliaria/Productos/CasaCompleta.png',
         
            titulo: "Sala"
        },


        ]

    },
    {
        id: "6",
        Estado: false, /*false es NO vendido */
        precio: "0.00",
        Tipo_inmuebl: 'Departamento ',
        area_total: ' m2',  
        departament:"Ayacucho",
        Etapa_proyecto: "Lotes",
        Terreno_venta: "9 de Diciembre 360-344, Ayacucho",
        direccion: '9 de Diciembre 360-344, Ayacucho',
        part_terreno: {
            uno: "",

        },
        img: [{
            id: 1,
            img: url_inicial+'/img/Inmobiliaria/Productos/9deDiciembre360-344,Ayacucho.jpeg',
         
            titulo: "Sala"
        },


        ]

    },
    {
        id: "F789456123",
        Estado: true, /*false es NO vendido */
        precio: "300,000",
        departament:"Ayacucho",
        Tipo_inmuebl: 'Departamento ',
        area_total: '100 m2',
        Etapa_proyecto: "En construccion",
        Terreno_venta: "Terreno vacio",
        direccion: 'San miguel (C.P. Maracana. "V" Lote 7H)',
        part_terreno: {
            uno: "3 Dormitorios",

        },
        img: [{
            id: 1,
            img: url_inicial+'/img/Inmobiliaria/Productos/Terrenovacio.jpeg',
            
            titulo: "Sala"
        },


        ]
       
    },
    {
        id: "7",
        Estado: false, /*false es NO vendido */
        precio: "0.00",
        Tipo_inmuebl: ' Galerias ',
        area_total: ' m2',  
        departament:"Ayacucho",
        Etapa_proyecto: "Alquiler de Galerias",
        Terreno_venta: " Alquiler de Stand - Galería Marconi",
        direccion: '393 Jr Manco Capac',
        part_terreno: {
            uno: "",

        },
        img: [{
            id: 1,
            img: url_inicial+'/img/Inmobiliaria/Productos/AlquilerdeGalerias.jpeg',

            titulo: "Sala"
        },


        ]

    },  
    
]


createApp({
    data() {
        return {
            Vender: TerrenosVenta,
            searchterm:'',
            
        }
    },
    methods: {



        async ListInmo() {

            console.log(this.Vender)
        },
    },
    mounted() {
        this.ListInmo()
    }, computed: {
        filteredList() {
            return this.Vender.filter(entry => {
                console.log(entry.departament)
                var id = entry.departament + ""
                return id.includes(this.searchterm)
            });
        } 
    }

}).mount('#app')