@extends('admin')

@section('content')
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard / </li>
            </ol>


                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold mb-1">
                                                Jumlah Data Carousel</div>
                                                <div class="h5 mb-2 font-weight-bold text-gray-800">{{$jumlahcarousels}}</div>
                                                <a class="h7 mb-0 font-weight-bold text-gray-80" href="{{route ('carousel.dashboard')}}">View Details</a>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-film fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold mb-1">Jumlah Data Detail</div>
                                                <div class="h5 mb-2 font-weight-bold text-gray-800">{{$jumlahdetails}}</div>
                                                <a class="h7 mb-0 font-weight-bold text-gray-80" href="{{route ('detail.dashboard')}}">View Details</a>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-circle-info fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold mb-1">Jumlah Data Fitur</div>
                                                <div class="h5 mb-2 font-weight-bold text-gray-800">{{$jumlahfiturs}}</div>
                                                <a class="h7 mb-0 font-weight-bold text-gray-80" href="{{route ('fitur.dashboard')}}">View Details</a>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-clipboard fa-2x text-gray-300"></i>
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

<style>

</style>


