@extends('layouts.app')

@section('content')
    <div class="biodata mt-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-6 text-center">
                    <h1 class="home-title-1">HOME PAGE</h1>
                    <h1 class="home-title-2">BIODATA MAHASISWA</h1>
                    <img class="w-50" src="{{ Vite::asset('resources/images/gambar.jpeg') }}" alt="">
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-6">
                            <p class="mb-0 fw-medium">Nama</p>
                            <p>Arfan Firdaus</p>
                        </div>
                        <div class="col-6">
                            <p class="mb-0 fw-medium">Tanggal Lahir</p>
                            <p>Surabaya, 4 September 2003</p>
                        </div>
                    </div>
                    <div>
                        <p class="mb-0 fw-medium">No Telp</p>
                        <p>085850861545</p>
                    </div>
                    <div>
                        <p class="mb-0 fw-medium">Email</p>
                        <p>arfancruise007@gmail.com</p>
                    </div>
                    <hr>
                    <h5>Kemampuan</h5>
                    <div class="row">
                        <div class="col-6">
                            <p class="mb-1">Hafal Rukun Iman</p>
                            <div class="progress" role="progressbar" aria-label="Example 20px high" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                                <div class="progress-bar" style="width: 95%"></div>
                            </div>
                            <p class="mb-1 mt-3">Bisa Mengaji</p>
                            <div class="progress" role="progressbar" aria-label="Example 20px high" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                                <div class="progress-bar" style="width: 95%"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <p class="mb-1">Pecinta Janda Muda</p>
                            <div class="progress" role="progressbar" aria-label="Example 20px high" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                                <div class="progress-bar" style="width: 85%"></div>
                            </div>
                            <p class="mb-1 mt-3">Pemburu Tovrut</p>
                            <div class="progress" role="progressbar" aria-label="Example 20px high" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                                <div class="progress-bar" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
