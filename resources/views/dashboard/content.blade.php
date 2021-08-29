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
                            <div class="card-body custom-min-height">
                                <!-- <img src="https://via.placeholder.com/180" alt="" class="card-img-bottom" style="width: 100%; height:250px;"> -->
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
                            <div class="card-body custom-min-height">
                                <div id="soldier-chart"></div>
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

        DASHBOARD = {
            init: () => {
                DASHBOARD.getSoldierData();
                DASHBOARD.soldierDetail(deviceId);
                DASHBOARD.soldierChart();

                setTimeout(() => {
                    DASHBOARD.init();
                }, 5000);
            },
            getSoldierData: () => {
                // alert("Valdi ganteng bgt sih");
                $.ajax({
                    url: "/dashboard/soldier",
                    type: 'GET',
                    success: (response) => {
                        console.log(response);

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
                            });

                        } else {
                            /**
                             * Toggle hide and show element
                             */
                            $("#soldier-list").addClass("d-none")
                            $("#soldier-list-none").addClass("d-flex")
                            $("#soldier-list-none").removeClass("d-none")
                        }
                    },
                    error: (a, b, c) => {
                        console.log(a + b + c);
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
                        console.log('Soldier detail', response)

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
                        }
                    }
                })
            },
            soldierChart: () => {
                Highcharts.chart('soldier-chart', {
                    chart: {
                        backgroundColor: 'none',
                        // height: (9 / 16 * 100) + '%' // 16:9 ratio
                    },
                    title: {
                        text: '',
                        style: {
                            color: '#fff',
                        }
                    },
                    yAxis: {
                        title: {
                            text: 'Value',
                            style: {
                                color: '#fff',
                            }
                        },
                        labels: {
                            style: {
                                color: '#fff',
                            }
                        }
                    },
                    xAxis: {

                    },
                    series: [{
                        name: 'Pulse',
                        data: [200, 79, 289, 123, 35]
                    }, {
                        name: 'Oxygen',
                        data: [123, 179, 89, 53, 235]
                    }, {
                        name: 'Blood Pressure',
                        data: [120, 99, 119, 63, 65]
                    }, {
                        name: 'Respiration',
                        data: [90, 89, 179, 93, 55]
                    }, {
                        name: 'Body Temp',
                        data: [100, 89, 129, 73, 88]
                    }],
                    legend: {
                        itemStyle: {
                            color: '#fff',
                            fontWeight: 'bold'
                        }
                    }
                });
            }
        }

        $(document).ready(function() {
            /**
             * Initialize dashboard functions
             */
            DASHBOARD.init();
        });
    </script>
@endsection
