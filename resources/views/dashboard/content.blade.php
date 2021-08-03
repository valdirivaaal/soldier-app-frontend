@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Soldiers list -->
        <div class="col-lg-2">
            <div class="bs-component">
                <div class="card border-light mb-3">
                    <div class="card-header">Personel Data</div>
                    <ul class="list-group" style="min-height: 16rem;">
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
                <div class="card border-light">
                    <div class="card-header">Chart Filter</div>
                    <div class="card-body custom-min-height">
                        <p class="card-text"><span class="dotted maroon"></span> Pulse</p>
                        <p class="card-text"><span class="dotted green"></span> Oxygen Level</p>
                        <p class="card-text"><span class="dotted red"></span> Blood Pressure</p>
                        <p class="card-text"><span class="dotted yellow"></span> Respiration</p>
                        <p class="card-text"><span class="dotted blue"></span> Body Temp</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Maps -->
        <div class="col-lg-6">
            <div class="bs-component">
                <div class="card border-light mb-3">
                    <div class="card-header align-items-baseline d-flex justify-content-center">Soldier Position</div>
                    <div class="card-body custom-min-height">
                        <!-- <img src="https://via.placeholder.com/180" alt="" class="card-img-bottom" style="width: 100%; height:250px;"> -->
                    </div>
                </div>
                <div class="card border-light">
                    <div class="card-header align-items-baseline d-flex justify-content-center">Information Chart</div>
                    <div class="card-body custom-min-height"></div>
                </div>
            </div>
        </div>
        <!-- Soldier details -->
        <div class="col-lg-4">
            <div class="bs-component">
                <div class="card border-light">
                    <div class="card-header">Soldier A (Tim A)</div>
                    <div class="card-body" style="padding: 1rem 1.25rem 0 1.25rem !important; min-height: 36.25rem !important;">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card border-light mb-3">
                                    <div class="card-header align-items-baseline d-flex justify-content-center">Pulse</div>
                                    <div class="card-body geo-card-body align-items-baseline d-flex justify-content-center">
                                        <span class="number-detail">78/</span>Bpm
                                    </div>
                                </div>
                                <div class="card border-light mb-3">
                                    <div class="card-header align-items-baseline d-flex justify-content-center">Blood Pressure</div>
                                    <div class="card-body geo-card-body align-items-baseline d-flex justify-content-center">
                                        <span class="number-detail">120/80</span>Bpm
                                    </div>
                                </div>
                                <div class="card border-light">
                                    <div class="card-header align-items-baseline d-flex justify-content-center">Body Temp</div>
                                    <div class="card-body geo-card-body align-items-baseline d-flex justify-content-center">
                                        <span class="number-detail">78/</span>&#8451;
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card border-light mb-3">
                                    <div class="card-header align-items-baseline d-flex justify-content-center">Oxygen Level</div>
                                    <div class="card-body geo-card-body align-items-baseline d-flex justify-content-center">
                                        <span class="number-detail">98/</span>%
                                    </div>
                                </div>
                                <div class="card border-light mb-3">
                                    <div class="card-header align-items-baseline d-flex justify-content-center">Respiration</div>
                                    <div class="card-body geo-card-body align-items-baseline d-flex justify-content-center">
                                        <span class="number-detail">16/</span>min
                                    </div>
                                </div>
                                <div class="card border-light">
                                    <div class="card-header align-items-baseline d-flex justify-content-center">Geo Detail</div>
                                    <div class="card-body geo-card-body">
                                        <p class="card-text geo-text">17.00 WIB</p>
                                        <p class="card-text geo-text">Lat : H 34'114'24.00"</p>
                                        <p class="card-text geo-text">Lon : E 112'13'24.00"</p>
                                        <p class="card-text geo-text">Alt : 3000 M</p>
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
@endsection
