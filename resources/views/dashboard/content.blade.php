@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Soldiers list -->
        <div class="col-lg-2">
            <div class="bs-component">
                <div class="card border-primary mb-3">
                    <div class="card-header">DATA PERSONEL</div>
                    <ul class="list-group">
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
        <!-- Maps -->
        <div class="col-lg-6">
            <div class="bs-component">
                <div class="card border-primary mb-3">
                    <div class="card-body">
                        <h6 class="card-title">PETA</h6>
                    </div>
                    <img src="https://via.placeholder.com/180" alt="" class="card-img-bottom" style="width: 100%; height:250px;">
                </div>
            </div>
        </div>
        <!-- Soldier details -->
        <div class="col-lg-4">
            <div class="bs-component">
                <div class="card border-primary mb-3">
                    <div class="card-header">Soldier A (Tim A)</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card border-primary mb-3">
                                    <div class="card-header align-items-baseline d-flex justify-content-center">DENYUT NADI</div>
                                    <div class="card-body align-items-baseline d-flex justify-content-center">
                                        <span class="number-detail">78/</span>Bpm
                                    </div>
                                </div>
                                <div class="card border-primary mb-3">
                                    <div class="card-header align-items-baseline d-flex justify-content-center">TEKANAN DARAH</div>
                                    <div class="card-body align-items-baseline d-flex justify-content-center">
                                        <span class="number-detail">120/80</span>bpm
                                    </div>
                                </div>
                                <div class="card border-primary mb-3">
                                    <div class="card-header align-items-baseline d-flex justify-content-center">SUHU TUBUH</div>
                                    <div class="card-body align-items-baseline d-flex justify-content-center">
                                        <span class="number-detail">78/</span>&#8451;
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card border-primary mb-3">
                                    <div class="card-header align-items-baseline d-flex justify-content-center">KADAR O2</div>
                                    <div class="card-body align-items-baseline d-flex justify-content-center">
                                        <span class="number-detail">98/</span>%
                                    </div>
                                </div>
                                <div class="card border-primary mb-3">
                                    <div class="card-header align-items-baseline d-flex justify-content-center">RESPIRASI</div>
                                    <div class="card-body align-items-baseline d-flex justify-content-center">
                                        <span class="number-detail">16/</span>Menit
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
