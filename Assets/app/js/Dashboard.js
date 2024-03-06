const { createApp } = Vue

/* Vue.component('apexchart', VueApexCharts); */

var app = {
    
    data: {
        options: {
            chart: {
                id: 'vuechart-example'
            },
            xaxis: {
                type: 'datetime'
            },
            legend: {
                show: true,
                showForSingleSeries: true
            },
        },
        series: [{
            name: 'series-1',
            data: [
                [1486684800000, 34],
                [1486771200000, 43],
                [1486857600000, 31],
                [1486944000000, 43],
                [1487030400000, 33],
                [1487116800000, 52]
            ]
        }]
    },
    methods: {
    }
};


var _app = createApp(app)

var mountedApp = _app.mount('#app')