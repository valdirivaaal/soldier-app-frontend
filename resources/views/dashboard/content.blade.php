@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-4">
                    <div class="bs-component">
                        <div class="card border-primary mb-3">
                            <div class="card-header">Personnel Data</div>
                            <div id="soldier-list-none" class="card-body custom-min-height align-items-center d-flex justify-content-center"><i>No data available</i></div>
                            <ul id="soldier-list" class="list-group list-group-flush list-group-scroll d-none" style="min-height: 16rem;">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Soldier A
                                    <span class="badge bg-primary rounded-pill">Tim A</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Soldier B
                                    <span class="badge bg-primary rounded-pill">Tim A</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Soldier C
                                    <span class="badge bg-primary rounded-pill">Tim B</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Soldier D
                                    <span class="badge bg-primary rounded-pill">Tim B</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Soldier E
                                    <span class="badge bg-primary rounded-pill">Tim B</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="bs-component">
                        <div class="card border-primary mb-3 mh-25">
                            <div class="card-header align-items-baseline d-flex justify-content-center">Soldier Position</div>
                            <!-- <div id="soldier-map-none" class="card-body custom-min-height align-items-center d-flex justify-content-center"><i>No data available</i></div> -->
                            <div class="card-body custom-min-height">
                                <div id="mapid"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-component">
                        <div class="card border-primary w-100 mh-25">
                            <div class="card-header align-items-baseline d-flex justify-content-center">Information Chart</div>
                            <div id="soldier-chart-none" class="card-body custom-min-height align-items-center d-flex justify-content-center"><i>No chart available</i></div>
                            <div class="card-body custom-min-height d-flex">
                                <div id="soldier-chart" class="d-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-component">
                        <div class="card border-primary mh-50">
                            <div class="card-header sd-name">None</div>
                            <div class="card-body align-items-center d-flex justify-content-center" style="padding: 1rem 1.25rem 0 1.25rem !important; min-height: 36.25rem !important;">
                                <div id="soldier-detail-none" class=""><i>No data available</i></div>
                                <div id="soldier-detail" class="row d-none">
                                    <div class="col-lg-6">
                                        <div class="card border-primary mb-5">
                                            <div class="card-header align-items-baseline d-flex justify-content-center">Pulse</div>
                                            <div class="card-body geo-card-body align-items-baseline d-flex justify-content-center">
                                                <span class="number-detail sd-pulse">0/</span>Bpm
                                            </div>
                                        </div>
                                        <div class="card border-primary mb-5">
                                            <div class="card-header align-items-baseline d-flex justify-content-center">Blood Pressure</div>
                                            <div class="card-body geo-card-body align-items-baseline d-flex justify-content-center">
                                                <span class="number-detail sd-bp">0/0</span>Bpm
                                            </div>
                                        </div>
                                        <div class="card border-primary">
                                            <div class="card-header align-items-baseline d-flex justify-content-center">Body Temp</div>
                                            <div class="card-body geo-card-body align-items-baseline d-flex justify-content-center">
                                                <span class="number-detail sd-bt">0/</span>&#8451;
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card border-primary mb-5">
                                            <div class="card-header align-items-baseline d-flex justify-content-center">Oxygen Level</div>
                                            <div class="card-body geo-card-body align-items-baseline d-flex justify-content-center">
                                                <span class="number-detail sd-ol">0/</span>%
                                            </div>
                                        </div>
                                        <div class="card border-primary mb-5">
                                            <div class="card-header align-items-baseline d-flex justify-content-center">Respiration</div>
                                            <div class="card-body geo-card-body align-items-baseline d-flex justify-content-center">
                                                <span class="number-detail sd-resp">0/</span>min
                                            </div>
                                        </div>
                                        <div class="card border-primary">
                                            <div class="card-header align-items-baseline d-flex justify-content-center">Geo Detail</div>
                                            <div class="card-body geo-card-body">
                                                <!-- <p class="card-text geo-text">17.00 WIB</p> -->
                                                <p class="card-text geo-text sd-lat">Lat : 0"</p>
                                                <p class="card-text geo-text sd-lon">Lon : 0"</p>
                                                <!-- <p class="card-text geo-text">Alt : 3000 M</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Soldiers list -->
        <div class="col-lg-2">

        </div>
        <!-- Maps -->
        <div class="col-lg-6">

        </div>
        <!-- Soldier details -->
        <div class="col-lg-4">

        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{ asset('js/highcharts.js') }}"></script>
    <script>
        var DASHBOARD = {};
        var deviceId = null;
        var ajaxMap = null;
        var soldierMap = null;
        var mapToken = "{{ config('app.map_token') }}";

        /**
         * Initiate map
         */
        function initiateMap() {
            return $.ajax({
                url: '/dashboard/soldier/center-map',
                type: 'GET',
                success: (response) => {
                    if (response.success) {
                        console.log('Initialize map')
                        let lat = response.data[0].latitude
                        let lon = response.data[0].longitude
                        let myMap = L.map('mapid').setView([lat, lon], 15);
                        let mapUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=' + mapToken;

                        L.tileLayer(mapUrl, {
                            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                            maxZoom: 18,
                            id: 'mapbox/streets-v11',
                            tileSize: 512,
                            zoomOffset: -1,
                        }).addTo(myMap);

                        window.soldierMap = myMap;
                    }
                },
                error: (jqXHR, textStatus, errorThrown) => {
                    // Log the error to the console
                    console.error(
                        "The following error occurred: "+
                        textStatus, errorThrown
                    );

                    Swal.fire({
                        title: 'Error!',
                        text: textStatus + ' - ' + errorThrown,
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    });
                }
            })
        }

        DASHBOARD = {
            init: () => {
                DASHBOARD.getSoldierData();
                DASHBOARD.soldierDetail(deviceId);
                DASHBOARD.soldierChart(deviceId);
                DASHBOARD.soldierMap();

                setTimeout(() => {
                    DASHBOARD.init();
                }, 30000);
            },
            getSoldierData: () => {
                // alert("Valdi ganteng bgt sih");
                $.ajax({
                    url: "/dashboard/soldier",
                    type: 'GET',
                    success: (response) => {
                        if (response.success) {
                            let row = '';
                            $.each(response.data, (key, val) => {
                                row += "\
                                    <li class='soldier-list-data list-group-item d-flex justify-content-between align-items-center' id="+ val.id_device +">\
                                        "+ val.nama_soldier +"\
                                        <span class='badge bg-primary rounded-pill'>" + val.nama_team + "</span>\
                                    </li>\
                                ";
                            });

                            /**
                             * Attach to ul element
                             */
                            $("#soldier-list").html(row);

                            /**
                             * Toggle hide and show element
                             */
                            $("#soldier-list").removeClass("d-none")
                            $("#soldier-list-none").removeClass("d-flex")
                            $("#soldier-list-none").addClass("d-none")

                            /**
                             * On click event on soldier lists
                             */
                            $(".soldier-list-data").on("click", function(e) {
                                e.preventDefault();
                                let deviceId = $(this).closest('li').attr('id');

                                /**
                                 * Showing detail of soldier
                                 */
                                DASHBOARD.soldierDetail(deviceId);
                                /**
                                 * Showing chart data
                                 */
                                DASHBOARD.soldierChart(deviceId);
                            });

                        } else {
                            /**
                             * Toggle hide and show element
                             */
                            $("#soldier-list").addClass("d-none")
                            $("#soldier-list-none").addClass("d-flex")
                            $("#soldier-list-none").removeClass("d-none")

                            /**
                             * Show error message
                             */
                            Swal.fire({
                                title: 'Error!',
                                text: 'No data available !',
                                icon: 'error',
                                confirmButtonText: 'Ok'
                            });
                        }
                    },
                    error: (jqXHR, textStatus, errorThrown) => {
                        // Log the error to the console
                        console.error(
                            "The following error occurred: "+
                            textStatus, errorThrown
                        );

                        Swal.fire({
                            title: 'Error!',
                            text: textStatus + ' - ' + errorThrown,
                            icon: 'error',
                            confirmButtonText: 'Ok'
                        });
                    }
                });
            },
            soldierDetail: (id) => {
                if (id === undefined || id === null) return false;

                deviceId = id;
                $.ajax({
                    url: '/dashboard/soldier/detail/' + id,
                    type: 'GET',
                    success: (response) => {
                        if (response.success) {
                            /**
                             * Set every single element with response data
                             */
                            $(".sd-name").text(response.data[0].nama_soldier);
                            $(".sd-pulse").text(response.data[0].pulse + '/');
                            $(".sd-ol").text(response.data[0].oxygen + '/');
                            $(".sd-bp").text(response.data[0].bloodPressure);
                            $(".sd-resp").text(response.data[0].respiration + '/');
                            $(".sd-bt").text(response.data[0].temperature + '/');
                            $(".sd-lat").text('Lat : ' + response.data[0].latitude);
                            $(".sd-lon").text('Lon : ' + response.data[0].longitude);

                            /**
                             * Toggle hide and show element
                             */
                            $("#soldier-detail").removeClass("d-none")
                            $("#soldier-detail-none").addClass("d-none")
                        } else {
                            /**
                             * Toggle hide and show element
                             */
                            $("#soldier-detail").addClass("d-none")
                            $("#soldier-detail-none").removeClass("d-none")

                            /**
                             * Show error message
                             */
                            Swal.fire({
                                title: 'Error!',
                                text: 'Soldier detail not available !',
                                icon: 'error',
                                confirmButtonText: 'Ok'
                            });
                        }
                    },
                    error: (jqXHR, textStatus, errorThrown) => {
                        // Log the error to the console
                        console.error(
                            "The following error occurred: "+
                            textStatus, errorThrown
                        );

                        Swal.fire({
                            title: 'Error!',
                            text: textStatus + ' - ' + errorThrown,
                            icon: 'error',
                            confirmButtonText: 'Ok'
                        });
                    }
                })
            },
            soldierChart: (id) => {
                if (id === undefined || id === null) return false;
                /**
                 * Initiate device id
                 */
                deviceId = id;

                /**
                 * Get chart data
                 */
                $.ajax({
                    url: '/dashboard/soldier/chart/' + id,
                    type: 'GET',
                    success: (response) => {
                        if (response.success) {
                            /**
                             * Declare seriesData variable
                             */
                            let pulseData = [];
                            let oxygenData = [];
                            let bloodData = [];
                            let respirationData = [];
                            let temperatureData = [];

                            if (!_.isEmpty(response.data)) {
                                _.each(response.data, function(value){
                                    let dateTime = moment(value.y).add(7, 'hours'),
                                        timestamp = dateTime.valueOf()

                                    pulseData.push([timestamp, parseInt(value.pulse)]);
                                    oxygenData.push([timestamp, parseInt(value.oxygen)]);
                                    bloodData.push([timestamp, parseInt(value.bloodPressure)]);
                                    respirationData.push([timestamp, parseInt(value.respiration)]);
                                    temperatureData.push([timestamp, parseFloat(value.temperature)]);
                                });
                            }

                            /**
                             * Set chart value
                             */
                            let chart = new Highcharts.chart('soldier-chart', {
                                chart: {
                                    backgroundColor: 'none',
                                },
                                title: {
                                    text: '',
                                    style: {
                                        color: '#fff',
                                    }
                                },
                                yAxis: {
		  	                        gridLineColor: '#666666',
                                    title: {
                                        text: 'Value',
                                        style: {
                                            color: '#fff',
                                        }
                                    },
                                    labels: {
                                        formatter: function () {
                                            return this.value
                                        },
                                        style: {
                                            color: '#fff',
                                        }
                                    }
                                },
                                xAxis: {
                                    type: 'datetime',
                                    labels: {
                                        format: '{value:%H:%M}'
                                    }
                                },
                                tooltip: {
                                    pointFormat: '{series.name} : <b>{point.y}</b>',
                                    valueDecimals: 1
                                },
                                plotOptions: {
                                    area: {
                                    lineWidth: 100,
                                    marker: {
                                        enabled: true,
                                        symbol: 'circle',
                                        radius: 2,
                                        states: {
                                        hover: {
                                            enabled: true
                                        }
                                        }
                                    }
                                    }
                                },
                                legend: {
                                    itemStyle: {
                                        color: '#fff',
                                        fontWeight: 'bold'
                                    }
                                },
                                series: []
                            });

                            /**
                             * Initiate series data
                             */
                            let seriesPulse = {
                                id: 'pulse',
                                name: 'Pulse',
                                color: '#95ff02',
                                lineWidth: 4,
                                shadow: false,
                                marker: {
                                    radius: 0
                                },
                                data: pulseData
                            }
                            chart.addSeries(seriesPulse);

                            let seriesOxygen = {
                                id: 'oxygen',
                                name: 'Oxygen',
                                color: '#ff0202',
                                lineWidth: 4,
                                shadow: false,
                                marker: {
                                    radius: 0
                                },
                                data: oxygenData
                            }
                            chart.addSeries(seriesOxygen)

                            let seriesBlood = {
                                id: 'blood',
                                name: 'Blood Pressure',
                                color: '#ff8e24',
                                lineWidth: 4,
                                shadow: false,
                                marker: {
                                    radius: 0
                                },
                                data: bloodData
                            }
                            chart.addSeries(seriesBlood)

                            let seriesRespiration = {
                                id: 'respiration',
                                name: 'Respiration',
                                color: '#03fffb',
                                lineWidth: 4,
                                shadow: false,
                                marker: {
                                    radius: 0
                                },
                                data: respirationData
                            }
                            chart.addSeries(seriesRespiration)

                            let seriesTemperature = {
                                id: 'temperature',
                                name: 'Temperature',
                                color: '#b300ff',
                                lineWidth: 4,
                                shadow: false,
                                marker: {
                                    radius: 0
                                },
                                data: temperatureData
                            }
                            chart.addSeries(seriesTemperature)

                            /**
                             * Toggle hide and show element
                             */
                            $("#soldier-chart").removeClass("d-none")
                            $("#soldier-chart-none").removeClass("d-flex")
                            $("#soldier-chart-none").addClass("d-none")
                        } else {
                            /**
                             * Toggle hide and show element
                             */
                            $("#soldier-chart").addClass("d-none")
                            $("#soldier-chart-none").addClass("d-flex")
                            $("#soldier-chart-none").removeClass("d-none")
                        }
                    },
                    error: (jqXHR, textStatus, errorThrown) => {
                        // Log the error to the console
                        console.error(
                            "The following error occurred: "+
                            textStatus, errorThrown
                        );

                        Swal.fire({
                            title: 'Error!',
                            text: textStatus + ' - ' + errorThrown,
                            icon: 'error',
                            confirmButtonText: 'Ok'
                        });
                    }
                })
            },
            soldierMap: () => {
                // $.when(initiateMap()).done((res) => {
                //     console.log('Done request')
                // });
                $.ajax({
                    url: '/dashboard/soldier/map',
                    type: 'GET',
                    success: (response) => {
                        if (response.success) {
                            /**
                             * Disable shadow on marker
                             */
                            let icon = new L.Icon.Default();
                            icon.options.shadowSize = [0,0];

                            /**
                             * Initiate marker layerGroup
                             */
                            let layerGroup = L.layerGroup().addTo(window.soldierMap)

                            /**
                             * Create markers
                             */
                            $.each(response.data, (key, val) => {
                                let latLong = [
                                    val.latitude,
                                    val.longitude
                                ]

                                L.marker(latLong, {icon: icon}).addTo(layerGroup)
                                    .bindPopup(val.nama_soldier)
                                    .openPopup();
                            });

                            console.log('Initialize marker')

                        } else {
                            Swal.fire({
                                title: 'Error!',
                                text: 'Maps error !',
                                icon: 'error',
                                confirmButtonText: 'Ok'
                            });
                        }
                    },
                    error: (jqXHR, textStatus, errorThrown) => {
                        // Log the error to the console
                        console.error(
                            "The following error occurred: "+
                            textStatus, errorThrown
                        );

                        Swal.fire({
                            title: 'Error!',
                            text: textStatus + ' - ' + errorThrown,
                            icon: 'error',
                            confirmButtonText: 'Ok'
                        });
                    }
                })
            }
        }

        $(document).ready(function() {
            /**
             * Run initiate map function
             */
            window.soldierMap = initiateMap();

            /**
             * Initialize dashboard functions
             */
            setTimeout(() => {
                DASHBOARD.init();
            }, 1000)
        });
    </script>
@endsection
