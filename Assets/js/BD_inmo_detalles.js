const { createApp, ref, onMounted, watch, nextTick } = Vue


TerrenosVenta = [
    {
        id: 1,
        precio: "300,000",
        estado: "(negociable)",
        Tipo_inmuebl: 'Departamento ',
        area_total: '100 m2',
        Etapa_proyecto: "En Estreno",
        Terreno_venta: " 3er piso (interior) ",
        documnentacion: "Con Título de Propiedad",
        servicios: "Servicios independientes (Electricidad, Agua, TV cable, internet)",
        direccion: 'Jr. Untiveros 362  (C.P. Barrio Madgalena Mz. "V" Lote 5B)',
        direccion1: 'Jr. Untiveros 362  ',
        lugar: 'Ayacucho',
        distrito: "en Magdelena",
        part_terreno:
            "4 Dormitorios - 2 Baños - 1 Sala - 1 cocina - 1 Comedor - 1 Lavandería   "
        ,
        floro: `Hermoso departamento a una cuadra del parque de Magdalena, moderna arquitectura, buenos acabados, magnífica distribución, excelente iluminación y ventilación natural, con tendal, cerca de centros comerciales, colegios, universidades, iglesias y avenidas principales, garantizando una mejor conectividad, comodidad y elegancia.`,

        img: [
            {
                titulo: 'Entrada',

                img: 'https://drive.google.com/uc?id=1N4fjyCyMhkFzh00TwhHnE1J4f9kF9vcj',
            }
            , {
                titulo: 'Entrada',

                img: 'https://drive.google.com/uc?id=1P09rhbxYUmAEVGFCMjGrfXTZu6iNmJH6',
            }
            , {
                titulo: 'cocina',

                img: 'https://drive.google.com/uc?id=1c828avv7DIPhufW8TE3eB0-xUo5Ipeqe',
            }
            , {
                titulo: 'Comedor',

                img: 'https://drive.google.com/uc?id=1MFJOhAn7tuJ2R59TW91vRAV3oPLRaEyq',
            }
            , {
                titulo: 'Comedor',


                img: 'https://drive.google.com/uc?id=1jHXAQlPEGMIOu_1Uv06ZOLad0LokxPSG',
            }
            , {
                titulo: 'Cuarto de servicio',

                img: 'https://drive.google.com/uc?id=16zd7clGXpn2vjQOl7z-wCtAfC59J9udj',
            }
            , {
                titulo: 'Cuarto de servicio',

                img: 'https://drive.google.com/uc?id=1AHWxSlyBi-0AygeUpBxBuSyenHDqwIGo',
            }
            , {
                titulo:
                    'Dormitorio',

                img: 'https://drive.google.com/uc?id=150HAfxIh44V5UhBBLYlcPTCM4lfi7NJO',
            }
            , {
                titulo: 'Dormitorio principal',

                img: 'https://drive.google.com/uc?id=1IzhdN36cwoOsBJMxFqNqTEbKta7QQKuE',
            }
            , {
                titulo:
                    'Dormitorio secundario',

                img: 'https://drive.google.com/uc?id=1YsV3ZAfFvEOkuPfN_xQOn-Z5PmJGQneM',
            }
            , {
                titulo: 'Dormitorio secundario',

                img: 'https://drive.google.com/uc?id=1WshnWBb_1oc5MrLBNk91mKoPrT_N7vZ-',
            }
            , {
                titulo: 'Dormitorio secundario',

                img: 'https://drive.google.com/uc?id=1HHQvEpjDiyoZYHxYOHjcaCV7vMpvwi9U',
            }
            , {
                titulo: 'Dormitorio secundario',


                img: 'https://drive.google.com/uc?id=1uar6JSin7kTLvmgpRQ7YS05Lo5O4V09N',
            }

            , {
                titulo: 'Hall',

                img: 'https://drive.google.com/uc?id=1U6Eeq521Xoaah1Kq7qT7-Nr2F2_UUL-X',
            }
            , {
                titulo: 'Mesa diario',

                img: 'https://drive.google.com/uc?id=1nvRYdgRtaUHOit0CEHQ8W8U7Vy85aSOo',
            }
            , {
                titulo: 'pasadizo',

                img: 'https://drive.google.com/uc?id=1cWssUbksN_CqEuIBDN-Y0LbeSilk3ZNS',
            }
            , {
                titulo: 'puerta dormitorio',

                img: 'https://drive.google.com/uc?id=1-HAi1B86BChWRCXkHBLadlkehlVI3Eb4',
            }
            , {
                titulo: 'sala',

                img: 'https://drive.google.com/uc?id=1_v_Vr0-D6OP5cipinvYS7EIAea1UmDhc',
            }
            , {
                titulo:
                    'SS.HH Dormitorio Principal',

                img: 'https://drive.google.com/uc?id=1wdXGBeSFx8_HpcBjNr3M3zUL6AJWZpN4',
            }
            , {
                titulo: 'SS.HH Dormitorio Principal',

                img: 'https://drive.google.com/uc?id=1-brnPJIlOD7zK3BPZkC5C_E59bFqODwu',
            }
            , {
                titulo: 'SS.HH visitas',

                img: 'https://drive.google.com/uc?id=1kZx7XR5InYp-AhMUcgr6TYwjGTSw6WZ4',
            }
            , {
                titulo: 'SS.HH visitas',

                img: 'https://drive.google.com/uc?id=1xs5VLmp4rTKvuRO73Pa19b6xaMRmYvTF',
            }
            , {
                titulo: 'SS.HH visitas',

                img: 'https://drive.google.com/uc?id=1J6NtkR8zizeZdtjBUHgnYXpe5sASVtht',
            }
            , {
                titulo: 'Tragaluz',

                img: 'https://drive.google.com/uc?id=1_A_qMKCn1mDlqwAR1GnR8QIrD9VmIgwN',
            }
            , {
                titulo: 'Planos',
                img: 'https://drive.google.com/uc?id=1A52pQ25g9XSI7xPdpE7yEBxLeHt1Jk50',
            },
        ],

        imgPortada: [

            'https://drive.google.com/uc?id=11-ZLMQuqwqrmMiComCLXEU1P1uJy8ALZ',
            'https://drive.google.com/uc?id=1-6iyFeswg5dASL2EaEGiY3T_1SjHDCk_',
            'https://drive.google.com/uc?id=1wkjjNxrsStIi8ZjmZNVHE8ajydqJ3lAB',
            'https://drive.google.com/uc?id=1_1_WvsQfvwz2GYcevqTdeHqq93qMxIOr',
        ],
        video: 'https://www.youtube.com/embed/631rfSsuKxM',

        titulos: [

        ],



        mapa: [-13.1592017, -74.2205011],

        Beneficios: ' Tendal en azotea'
    },
    {
        id: 2,
        precio: "300,000",
        estado: "(negociable)",
        Tipo_inmuebl: 'Departamento ',
        area_total: '100 m2',
        Etapa_proyecto: "En construccion",
        Terreno_venta: " 4to piso (interior) ",
        documnentacion: "Con Título de Propiedad",
        servicios: "Servicios independientes (Electricidad, Agua, TV cable, internet)",
        direccion: 'Jr. Untiveros 362  (C.P. Barrio Madgalena Mz. "V" Lote 5B)',
        direccion1: 'Jr. Untiveros 362  ',
        lugar: 'Ayacucho',
        distrito: "en Magdelena",
        part_terreno:
            "3 Dormitorio - 2 Baños - 1 Sala - 1 cocina - 1 Comedor - 1 Lavandería"
        ,
        floro: `Hermoso departamento a una cuadra del parque de Magdalena, moderna arquitectura, buenos acabados, magnífica distribución, excelente iluminación y ventilación natural, con tendal, cerca de centros comerciales, colegios, universidades, iglesias y avenidas principales, garantizando una mejor conectividad, comodidad y elegancia.`,

        img: [
            {
                titulo: 'Fachada',

                img: 'https://drive.google.com/uc?id=1DdW5tigqQXT7tbc1W7_nEqRRWpfFhY3Z',
            }
            , {
                titulo: 'Cocina',

                img: 'https://drive.google.com/uc?id=12Kr5gRy8IbK_x66a8eKszAGK-DS18BC_',
            }
            , {
                titulo: 'Dormitorio Principal',

                img: 'https://drive.google.com/uc?id=1Nr6j9dP2vkGnTBAKKnWxDX2dSfJPqHXB',
            }
            , {
                titulo: 'Dormitorio Principal',

                img: 'https://drive.google.com/uc?id=14m6YHYOIBZ-qwTgzu5whbalVqxBKhE-Q',
            }
            , {
                titulo: 'Dormitorio Principal',

                img: 'https://drive.google.com/uc?id=1zqthBGFTiFNH_tsKuTEMAYJywaKQQD3b',
            }
            , {
                titulo: 'Dormitorio Principal',

                img: 'https://drive.google.com/uc?id=1VQKk1vRnTpBWe560PPxEyzf-FIoUk2Q0',
            }
            , {
                titulo: 'Dormitorio Secundario',


                img: 'https://drive.google.com/uc?id=17WJCoYbdYtlvew7_lMpuzePkDxsXamnu',
            }
            , {
                titulo: 'Pasadizo',


                img: 'https://drive.google.com/uc?id=1f_FvA4YI1mcm6t63ykTA4l9oBNyVlBD3',
            }
            , {
                titulo: 'Pasadizo',

                img: 'https://drive.google.com/uc?id=1Sl9cYcTawriTFqayT5arq2GbKxXiJQ8b',
            }
            , {
                titulo: 'Planos',

                img: 'https://drive.google.com/uc?id=1Avs4bhfz4Q7Ps0RhZ9NzDgrLF3v-5d6C',
            }
            , {
                titulo: 'Puerta baño',

                img: 'https://drive.google.com/uc?id=1PkLYwSv8_bR2Ez_-sMNOdxWe8ctV4mqt',
            }
            , {
                titulo: 'Puertas',

                img: 'https://drive.google.com/uc?id=10ro23NYaYOXE6vUX8zALl83AGEW3oNm1',
            }
            , {
                titulo: 'sala',

                img: 'https://drive.google.com/uc?id=1mcvI-jLnuFbg46cgFTuzDANHXEObelbL',
            }
            , {
                titulo: 'sala',

                img: 'https://drive.google.com/uc?id=1Ju0z642M6ok5TV5Cxkivhpn22pnjraF-',
            }
            , {
                titulo: 'SS.HH',

                img: 'https://drive.google.com/uc?id=1ZWzAYbQx4D_5m4JHPBB0Vazhpokd2_IQ',
            }
            , {
                titulo: 'SS.HH',

                img: 'https://drive.google.com/uc?id=1YH8gcLqdpOHE-DLUYTCXEyw_yBWZ8jnG',
            }
            , {
                titulo: 'entrada',
                img: 'https://drive.google.com/uc?id=1Owb_MiROvh-eRiahgH0yBcMUjmFZ703X',
            }
        ],
        imgPortada: [

            'https://drive.google.com/uc?id=1Z51DzsAoT1-egoLqZuIv4dMfoL4_sKr8',
            'https://drive.google.com/uc?id=1va00a-9LjcnFzuBUd1QzGQ6gIacQm0hl',
            'https://drive.google.com/uc?id=1ezIra8XpaRYM9hQWKsnCdqJCCUpK2H5m',
            'https://drive.google.com/uc?id=1b3KeUR_Mfyym8ivOEko6eFX-jeC32n_r',
        ],
        video: 'https://www.youtube.com/embed/aI44nODMsBw',
        titulos: [


        ],

        mapa: [-13.1592017, -74.2205011],

        Beneficios: ' Tendal en azotea'

    },

    {
        id: 3,
        precio: "350,000",
        estado: "(negociable)",
        Etapa_proyecto: "EN PREVENTA ( ejecutado 70%)",
        direccion: 'Jr. Untiveros 362 , 5to piso (interior)',
        Tipo_inmuebl: 'Departamento Duplex ',
        area_total: '140 m2',
        documnentacion: "Con Título de Propiedad",
        servicios: "Servicios independientes (Electricidad, Agua, TV cable, internet)",
        Terreno_venta: " 5to piso (interior) ",
        part_terreno:
            "4 Dormitorios - 1 Baños - 1 Sala - 1 cocina - 1 Comedor - 1 Terraza - 1 Área de parrilla - 1 Lavandería - 1 Tendal"
        ,


        direccion1: 'Jr. Untiveros 362  ',
        lugar: 'Ayacucho',
        distrito: "en Magdelena",

        floro: `Hermosa vista 360°, desde el Duplex, a una cuadra del parque de Magdalena, moderna arquitectura, buenos acabados, magnífica distribución, excelente iluminación y ventilación natural, con tendal, cerca de centros comerciales, colegios, universidades, iglesias y avenidas principales, garantizando una mejor conectividad, comodidad y elegancia.`,

        img: [{
            titulo: 'Fachada',
            img: 'https://drive.google.com/uc?id=1Y9tXpz4_GagwTtBEV6BWsLoi2iCRMSwn',

        }
            , {
            titulo: 'Planos',
            img: 'https://drive.google.com/uc?id=1bExt3alrNHBGxPvA6ConIm9Bl5ZiVEoF',
        }
            , {
            titulo: 'Acceso de Parrilla',
            img: 'https://drive.google.com/uc?id=14NyKH7MV75vE9OFewxkpbbuuvSkydspu',
        }
            , {
            titulo: 'Almacén',
            img: 'https://drive.google.com/uc?id=1bm-lQdOeL5AoYP3ZiInEQXJA0S0qMtka',
        }
            , {
            titulo: 'Almacén',

            img: 'https://drive.google.com/uc?id=14RXI4dOVJafEpouG1X5fOHbzgWaCXjlB',
        }
            , {
            titulo: 'Cocina',

            img: 'https://drive.google.com/uc?id=1yfbHYS4xdRK4behcV3muQ2kA_0FUYyyr',
        }
            , {
            titulo: 'Cocina',

            img: 'https://drive.google.com/uc?id=1GvSKS3654WT3c7fbzY_hTDbktU0edI7t',
        }
            , {
            titulo: 'Dormitorio Doble',

            img: 'https://drive.google.com/uc?id=183x9NASniRuYCZLEFuU6cqmqu3iugKuh',
        }
            , {
            titulo: 'Dormitorio Principal',

            img: 'https://drive.google.com/uc?id=15bztA1ZUX7C-uEzm6UJ583jxMCQKDDhv',
        }
            , {
            titulo: 'Dormitorio Secundario',

            img: 'https://drive.google.com/uc?id=1wddwWgBZVpFN3_BLnquU1zWZOiCj_k_N',
        }
            , {
            titulo: 'Dormitorio ',

            img: 'https://drive.google.com/uc?id=1AzMEYOGOgls61Ap7z4x7D4qFfWJhwl6P',
        }
            , {
            titulo: 'Mesa diario ',

            img: 'https://drive.google.com/uc?id=1M96z9ICTMYQmRPtWhAdH6w__njAZOwsk',
        }
            , {
            titulo: 'Parrilla',

            img: 'https://drive.google.com/uc?id=1UTLefROYJ589AVIknx6kHgJT2LMF7P8t',
        }
            , {
            titulo: 'Escaleas ',

            img: 'https://drive.google.com/uc?id=16uSxAHUmER4A7bylInC2G_S05WhGETEt',
        }

            , {
            titulo: 'Tragaluz ',

            img: 'https://drive.google.com/uc?id=1Vx6oSqiJpoieQDhZb-edZHim4cm7Eomb',
        }
            , {
            titulo: 'Etrada ',
            img: 'https://drive.google.com/uc?id=10_X7ozsJYR18dSKu-YdSnenubCIF7rQe',
        }
        ],
        imgPortada: [

            'https://drive.google.com/uc?id=1yP8NBl0U8iTqSDnP_9Cqp5pS0l0GMAam',
            'https://drive.google.com/uc?id=1P1vsY0VDNkQUuugsxfMWF8gE2ovTWNnd',
            'https://drive.google.com/uc?id=192mzFPAgo4Dv4GME1oIyWXRRVAMAcXuw',
            'https://drive.google.com/uc?id=1esmZkUaAfTNffiUDNIeKiQoFV0Huv-rl',

        ],
        video: 'https://www.youtube.com/embed/MGLy_cR6BAg',


        mapa: [-13.1592017, -74.2205011],
        Beneficios: ' Tendal en azotea'

    },
    {
        id: 4,
        precio: "0.00",
        estado: "(Venta Por Lote)",
        Etapa_proyecto: "TERMINADO ",
        direccion: 'Andres Avelino Caceres, Ayacucho',
        Tipo_inmuebl: 'Lote',
        area_total: '223.11 m2 ',
        documnentacion: "CON TÍTULO DE PROPIEDAD",
        servicios: "Servicios independientes (luz agua y desague)",
        Terreno_venta: "",
        part_terreno:
            " FRONTIS DE 44 METROS"
        ,


        direccion1: 'Andres Avelino Caceres, Ayacucho ',
        lugar: 'Ayacucho',
        distrito: "en San Juan Bautista",

        floro: `BONDADES: EL TERRENO TIENE AGUA DE RIEGO, FRONTIS DE 44 METROS, VECINOS CON AGUA POTABLE Y ELECTRICIDAD A 5 MINUTOS DEL NUEVO HOSPITAL.`,

        img: [
            {
                titulo: 'Lotes ',

                img: 'https://drive.google.com/uc?id=1Es7xZIB4T1K76X-pjkc5E9w3WtxC9Okp',
            }
            , {
                titulo: 'Lotes ',

                img: 'https://drive.google.com/uc?id=1Rm1pVBAsht_HRqMpwLdbmqm5JAl1nQ_j',
            }
        ],
        imgPortada: [
            'https://drive.google.com/uc?id=1Es7xZIB4T1K76X-pjkc5E9w3WtxC9Okp',
            'https://drive.google.com/uc?id=1Rm1pVBAsht_HRqMpwLdbmqm5JAl1nQ_j',
        ],

        mapa: [-13.162534, -74.195197],
        Beneficios: ' Tendal en azotea'

    },


    {
        id: 5,
        precio: "1,300 000",
        estado: "(OFERTA)",
        Etapa_proyecto: "TERMINADO ",
        direccion: 'AV. VIA NUEVA S/N',
        Tipo_inmuebl: 'CASA COMPLETA ',
        area_total: '961.86 m2',
        documnentacion: "CON TÍTULO DE PROPIEDAD INSCRITA EN LA SUNARP",
        servicios: "Servicios independientes (luz agua y desague)",
        Terreno_venta: "( AV. VIA NUEVA S/N )",
        part_terreno:
            " Patio delantero - patio posterior - construcción de 2 pisos - habitaciones amplias"
        ,


        direccion1: 'AV. VIA NUEVA S/N  ',
        lugar: 'Ayacucho',
        distrito: "en San Juan Bautista",

        floro: `Casa completa con estacionamiento, patio delantero, patio posterior, construcción de 2 pisos, habitaciones amplias, para colegios, institutos, universidades, multifamiliares, etc, buena zona tranquila, calles amplias, con luz agua y desague, valorizado en s/ 1 700 000.`,

        img: [
            {
                titulo: 'Area Del terreno',


                img: 'https://drive.google.com/uc?id=19HrLOZb7JT0jGsEXDmLmfDPqhEbta2JY',
            }
            , {
                titulo: 'mapa',


                img: 'https://drive.google.com/uc?id=1445X7K83Qfx3XBN_F8qrliGcu2AqH99z',
            }
            , {
                titulo: 'fachada',


                img: 'https://drive.google.com/uc?id=1FjdI3gskdSzOpwgzYL98WuKt349EKZHn',
            }
            , {
                titulo: 'Puerta Principal',


                img: 'https://drive.google.com/uc?id=1R3gOCwOp4_tUntC-QUFJtqsdyJvOZTT_',
            }
            , {
                titulo: 'pasadizo ',

                img: 'https://drive.google.com/uc?id=1YN3M8gJy_tSZeeGO8NgPQbnDksToQM1s',
            }
            , {
                titulo: 'sala ',

                img: 'https://drive.google.com/uc?id=1MnAZpeDi2CVRFlYcIjGLtwKxxd515bge',
            }
            , {
                titulo: 'Sala ',

                img: 'https://drive.google.com/uc?id=1tz2TwDycRZt36bMnPUicE1cSDXw7BKlF',
            }

        ],
        imgPortada: [
            'https://drive.google.com/uc?id=19HrLOZb7JT0jGsEXDmLmfDPqhEbta2JY',
            'https://drive.google.com/uc?id=1445X7K83Qfx3XBN_F8qrliGcu2AqH99z',
            'https://drive.google.com/uc?id=1FjdI3gskdSzOpwgzYL98WuKt349EKZHn',
            'https://drive.google.com/uc?id=1R3gOCwOp4_tUntC-QUFJtqsdyJvOZTT_',
            'https://drive.google.com/uc?id=1YN3M8gJy_tSZeeGO8NgPQbnDksToQM1s',
            'https://drive.google.com/uc?id=1MnAZpeDi2CVRFlYcIjGLtwKxxd515bge',
            'https://drive.google.com/uc?id=1tz2TwDycRZt36bMnPUicE1cSDXw7BKlF',

        ],
        titulos: [


        ],

        mapa: [-13.1842865, -74.2153134],
        Beneficios: ' Tendal en azotea'

    },


    {
        id: 6,
        precio: "0.00 ",
        estado: "(Venta Por Lote)",
        Etapa_proyecto: "TERMINADO ",
        direccion: '9 de Diciembre 360-344, Ayacucho ',
        Tipo_inmuebl: 'Lotes ',
        area_total: '149.48 m2 - 295.23 m2 -  282.86 m2 - 268.49 m2 - 264.28 m2 - 258.78 m2 - 253.28 m2 - 96.75 m2 - 311.81 m2 - 238.92 m2 ',
        documnentacion: "CON TÍTULO DE PROPIEDAD ",
        servicios: "Servicios independientes ",
        Terreno_venta: "",
        part_terreno:
            " Espacio para casas de campo u otro tipo "
        ,


        direccion1: '9 de Diciembre 360-344, Ayacucho  ',
        lugar: 'Ayacucho',
        distrito: "",

        floro: `Lotes en venta de diferentes precios y diferentes medidas, al lado de la carretera ayacucho tambillo, a 5 minutos del nuevo hospital, con título de propiedad, matriz inscrita en la sunarp, vecinos tienen agua y electricidad, 2 metros de vereda hacia la carretera`,

        img: [
            {
                titulo: 'Lotes ',

                img: 'https://drive.google.com/uc?id=14aqJn1Tmy-esqiICo4vRLH6E2Jy09Oqg',
            }
            , {
                titulo: 'Lotes ',

                img: 'https://drive.google.com/uc?id=14f_9oyZ1sW6XIfLz-t7pVXKirmT92Y5p',
            }
        ],
        imgPortada: [
            'https://drive.google.com/uc?id=14aqJn1Tmy-esqiICo4vRLH6E2Jy09Oqg',
            'https://drive.google.com/uc?id=14f_9oyZ1sW6XIfLz-t7pVXKirmT92Y5p',

        ],
        titulos: [


        ],

        mapa: [-13.165527, -74.195939],
        Beneficios: ' Tendal en azotea'

    },
    {
        id: 7,
        precio: "0.00 ",
        estado: "(Alquiler de stand)",
        Etapa_proyecto: "En Construcción",
        direccion: '384 Jr Manco Capac',
        Tipo_inmuebl: 'Alquiler de Stand  ',
        area_total: '15.60 M2 - 5 m2 -  3 m2 - 8 m2 - 9.5 m2 - 8.6 m2 - 11.5 m2 - 9 m2 - 11.25 m2 - 8.75 m2 ',
        documnentacion: "Alquiler con Contrata",
        servicios: "Servicios Agua desgaue, y  Fluido electrico ",
        Terreno_venta: "",
        part_terreno:
            " 14 Galerias"
        ,


        direccion1: '393 Jr Manco Capac, Ayacucho  ',
        lugar: 'Ayacucho',
        distrito: "",

        floro: `No dejes parasr esta gran oportunidad para poder generar ingresos`,

        img: [
        { titulo: 'Plano', img: 'https://drive.google.com/uc?id=10tcafQy4xzGtZrKxZrlITZZjuQF67sES' },
        { titulo: 'Requisitos', img: 'https://drive.google.com/uc?id=150d8FKCpjyyQeUmhbGlYUb3feA1enmKI' },
        { titulo: 'STAND - 1', img: 'https://drive.google.com/uc?id=1B8pR2NMV0uK5RL8jYrZfECwFc31kenLI' },
        { titulo: 'STAND - 2', img: 'https://drive.google.com/uc?id=1HBA-tLc1tfqYL3SUQifyXgmPWTagVUvK' },
        { titulo: 'STAND - 3', img: 'https://drive.google.com/uc?id=1GHpkRUY3P_d_b-2BXDCzB5OOw-Z3d-ES' },
        { titulo: 'STAND - 4', img: 'https://drive.google.com/uc?id=1_UdEJZCY2bYdVUkiGhFtLbz15UdKC2bG' },
        { titulo: 'STAND - 5', img: 'https://drive.google.com/uc?id=16U9Reb3hEcpmP2Z_QA8vWR4kN9G86fL2' },
        { titulo: 'STAND - 6', img: 'https://drive.google.com/uc?id=1OI8yWL4BEaab1iPBkit-sO5klICj7M_A' },
        { titulo: 'STAND - 7', img: 'https://drive.google.com/uc?id=186Mg0PMseyV06OssfWl2hIVqTbm-H6EW' },
        { titulo: 'STAND - 8', img: 'https://drive.google.com/uc?id=1AjWP8hf62TkUILMgoHz22aovOctzX4C5' },
        { titulo: 'STAND - 9', img: 'https://drive.google.com/uc?id=1sdaa0Fj1Dzn_rG2ei0Nsy7ZkV2Qccyh1' },
        { titulo: 'STAND - 10', img: 'https://drive.google.com/uc?id=11XB0tgiYJHpS5MiN0gqMVRU-4llnV22q' },
        { titulo: 'STAND - 11', img: 'https://drive.google.com/uc?id=14eyVu15RFiq8Qv-ONZcvnyqKL-Xjdfyz' },
        { titulo: 'STAND - 12', img: 'https://drive.google.com/uc?id=111lY743Cw0x7Eg1-DF_R7ONcBWhZZDu3' },
        { titulo: 'STAND - 13', img: 'https://drive.google.com/uc?id=1sLWoPFPirilJIZ4LOph59cRno4mHPsWX' },
        { titulo: 'STAND - 14', img: 'https://drive.google.com/uc?id=1Fp1ONf_8PRnfWvCoAweCKRH9WqiYNJjw' },
        ],
        imgPortada: [
            'https://drive.google.com/uc?id=16KScTbtfdcoCFOZ04WnAXjExnx0cMVsy',
            'https://drive.google.com/uc?id=1Beyym1Vbu2Q6_gewPIAoMR3ihzQcL-IP',
            'https://drive.google.com/uc?id=18sCA5rI6sngFA_hWBwxlL87Ot5zC39es',
            'https://drive.google.com/uc?id=1bEzIHdcf0UADRc0_zRsx9kGcDQNv6-ro',
            'https://drive.google.com/uc?id=1H0-Ld-nWC76ahpJrY2sxEQ61QTDqWmKf',
            'https://drive.google.com/uc?id=13oFlpBbyq7UQ5Cm8Yoz_xkllz5vbWL9D',
            'https://drive.google.com/uc?id=19UjhxYDbJdoAddfaiGSwO9ZIitBz9PBP',
            'https://drive.google.com/uc?id=14Kdw1dZ_wauGXlEZFKLYl4s4qM-LY_a8',
            'https://drive.google.com/uc?id=17pbXuuVhfCylJ0f0XKO42_fuch0bA21j',
            'https://drive.google.com/uc?id=1uC-93oE7J_GL6AuFbAWwzHSGUxs2-4F_',
            'https://drive.google.com/uc?id=1IOjSAT19XZKVKyDYw8ND2bj2VGRc9FW8',
            'https://drive.google.com/uc?id=1JVhdwIdTfR10Ci1mjPYBIrVIxGUai55T',

        ],
        titulos: [


        ],

        mapa: [-13.156284,-74.2243937],
        Beneficios: 'Gran oportunidad de negocio'

    },

]
const app = {
    data() {
        return {
            Vender: TerrenosVenta,
            detalles: '',
            precio: '',
            Tipo_inmuebl: '',
            area_total: '',
            Etapa_proyecto: '',
            documnentacion: '',
            servicios: '',
            Terreno_venta: '',
            direccion: '',
            descripcion: '',
            imagen: '',
            titulo: '',
            cordenadas_mapa: '',
            floro: '',
            distrito: '',
            estado: '',
            imgPortada: '',
            video: '',
            Beneficios: ''

        }
    },
    methods: {



        async ListInmo() {

            /* console.log(this.Vender) */

            const result = this.Vender.filter(obj => obj.id == ids);
            this.detalles = result;
            console.log(this.detalles[0].precio)
            this.precio = this.detalles[0].precio;
            this.Tipo_inmuebl = this.detalles[0].Tipo_inmuebl;
            this.area_total = this.detalles[0].area_total;
            this.Etapa_proyecto = this.detalles[0].Etapa_proyecto;
            this.documnentacion = this.detalles[0].documnentacion;
            this.servicios = this.detalles[0].servicios;
            this.Terreno_venta = this.detalles[0].Terreno_venta;
            this.direccion = this.detalles[0].direccion1;
            this.descripcion = this.detalles[0].part_terreno;
            this.imagen = this.detalles[0].img
            this.titulo = this.detalles[0].titulos
            this.cordenadas_mapa = this.detalles[0].mapa
            this.floro = this.detalles[0].floro
            this.estado = this.detalles[0].estado
            this.imgPortada = this.detalles[0].imgPortada
            this.video = this.detalles[0].video
            this.Beneficios = this.detalles[0].Beneficios
            this.distrito = this.detalles[0].distrito

        },

        swiper() {
            var swiper = new Swiper(".mySwiper", {
                spaceBetween: 30,
                effect: "fade",
                autoplay: {
                    delay: 5000,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });

            var swiper = new Swiper(".mySwipers", {
                effect: "cards",
                grabCursor: true,
                autoplay: {
                    delay: 2000,
                },
            });

        },

        iniciarMap() {


            var map = L.map('map').setView(this.cordenadas_mapa, 17);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);
            var greenIcon = L.icon({
                iconUrl: 'https://drive.google.com/uc?id=1XSCQTL14-vDNZ7QjuZQtOupTt31GL0i2',
                iconSize: [50, 50],
                iconAnchor: [25, 45],
                /* popupAnchor: [-3, -76], */

                /* shadowSize: [68, 95], */
                /* shadowAnchor: [22, 94] */
            });
            var marker = L.marker(
                this.cordenadas_mapa,
                { icon: greenIcon, }
            )
                .addTo(map).bindPopup();

            marker.addTo(map).bindPopup(`<p><b>${this.direccion}</b></p>`).openPopup();
            console.log(this.direccion)
        },
        Fancybox() {
            Fancybox.bind('[data-fancybox="gallery"]', {
                Thumbs: {
                    type: "modern"
                }
            });
            Fancybox.bind('[data-fancybox="galleryss"]', {
                Thumbs: {
                    type: "modern"
                }
            });
            Fancybox.bind('[data-fancybox="portada-galeria"]', {
                Thumbs: {
                    type: "modern"
                }
            });
        },


    },
    mounted() {
        this.ListInmo();
        this.swiper();
        this.iniciarMap();
        this.Fancybox()
    }, computed: {
        filteredList() {
            return this.Listboleta.filter(entry => {
                console.log(entry)
                var id = entry.id + ""
                return id.includes(this.searchterm.toLowerCase())
            });
        }
    }
}

var _app = createApp(app);

_app.component('vue-gallery', {
    props: { 'photos': Object, 'video': Object },
    data: function () {
        return {
            activePhoto: null,
            title: null,
            currentIndex: 0,

        }
    },
    template: `
    
    <div class="container w-100   " >
        <div class="row" >
        <div class="col-lg-3   " >
        <div class="container-fluid " style=" width: 410px; height:495px;" >
            <div thumbsSlider="" class="swiper mySwiper5 mt-2 w-100 h-100">
                <div class="swiper-wrapper w-100 h-100" >
                    <div class="swiper-slide opacidad-img" style=" width: 50%; height: 10%;" v-for="(photo, index) in photos">
                        <img :src="photo.img" class="img-fluid w-100 h-100" />
                    </div>
                </div>
            </div>
        </div>
    </div>
            <div class="col-lg-9 justify-content-evenly text-center " >
                <div class="d-flex text-center justify-content-evenly container-fluid mx-auto  p-0 m-0 " style=" width: 410px;
                height:495px;" >
                    <div style="" class="swiper mySwiper4 " >
                        <div class="swiper-wrapper  mt-4"   >
                            <div class="swiper-slide " v-for="(photo, index) in photos">
                                <img :src="photo.img" class=" img-fluid w-100 h-100 "/>
                                <a :href="photo.img" class="card-img-overlay border-none text-light  text-center" data-fancybox="gallery">
                                    <h5 class="w-100 text-uppercase card-modificado-1 position-absolute bottom-0  my-3 start-50 translate-middle-x  p-4">{{photo.titulo}}</h5>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
    `,
    mounted() {

        this.swiper()
        this.activePhoto = 0
        console.log(this.photos)


    },
    methods: {

        swiper() {
            var swiper = new Swiper(".mySwiper5", {
                spaceBetween: 10,
                direction: 'vertical',
                slidesPerView: 5,
                freeMode: true,
                watchSlidesProgress: true,
            });
            var swiper2 = new Swiper(".mySwiper4", {
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                thumbs: {
                    swiper: swiper,
                },
            });
        }




    }
})
_app.component('vue-gallery1', {
    props: { 'photos': Object },
    data: function () {
        return {
            activePhoto: null,
            title: null,
            currentIndex: 0,

        }
    },
    template: `
    
    <div class="container-fluid w-100 p-0 m-0 vh-100">
        <div style="" class="swiper mySwiper2 w-100">
            <div class="swiper-wrapper w-100 h-75 mt-4"   >
                <div class="swiper-slide w-100 h-100" v-for="(photo, index) in photos">
                    <img :src="photo.img" class="img-fluid w-100 h-100"/>
                    <a :href="photo.img" class="card-img-overlay border-none text-light  text-center" data-fancybox="galleryss">
                        <h5 class="w-100 text-uppercase card-modificado-1 position-absolute bottom-0  m-0 p-0 start-50 translate-middle-x  p-4">{{photo.titulo}}</h5>
                    </a>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div thumbsSlider="" class="swiper mySwiper3 mt-2 w-100 h-25">
            <div class="swiper-wrapper w-100 h-50" >
                <div class="swiper-slide " style=" width: 10%; height: 100%;" v-for="(photo, index) in photos">
                    <img :src="photo.img" class="img-fluid w-100 h-100" />
                </div>
           
            </div>
        </div>
    </div>
    `,
    mounted() {

        this.swiper()
        this.activePhoto = 0
        console.log(this.photos)


    },
    methods: {

        swiper() {
            var swiper = new Swiper(".mySwiper3", {
                spaceBetween: 10,
                slidesPerView: 4,
                freeMode: true,
                watchSlidesProgress: true,
            });
            var swiper2 = new Swiper(".mySwiper2", {
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                thumbs: {
                    swiper: swiper,
                },
            });
        }




    }
})
var mountedApp = _app.mount('#app') 
