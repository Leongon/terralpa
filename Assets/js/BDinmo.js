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
            img: 'https://drive.google.com/uc?id=11-ZLMQuqwqrmMiComCLXEU1P1uJy8ALZ',

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
            img: 'https://drive.google.com/uc?id=14Qbei6lTPt3mWJyhLKJywAk4ByEAUjs1',
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
            img: 'https://drive.google.com/uc?id=1PkLYwSv8_bR2Ez_-sMNOdxWe8ctV4mqt',
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
            img: 'https://drive.google.com/uc?id=14NyKH7MV75vE9OFewxkpbbuuvSkydspu',
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
            img: 'https://drive.google.com/uc?id=1Es7xZIB4T1K76X-pjkc5E9w3WtxC9Okp',
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
            img: 'https://drive.google.com/uc?id=1tz2TwDycRZt36bMnPUicE1cSDXw7BKlF',
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
            img: 'https://drive.google.com/uc?id=14aqJn1Tmy-esqiICo4vRLH6E2Jy09Oqg',
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
            img: 'https://drive.google.com/uc?id=14_PBr__HR4266toHwHhxqGxaWxlRj4Y0',
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
            img: 'https://drive.google.com/uc?id=1JVhdwIdTfR10Ci1mjPYBIrVIxGUai55T',
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