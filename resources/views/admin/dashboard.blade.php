@extends('layouts.mainlayout')

@section('tittle')

@section('content')
    <div class="row p-3 g-1">
        <div class="col-md-12 sm-12 col-xs-12">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <i class="fas fa-tachometer-alt fa-lg"></i>
                        Dashboard
                    </div>
                </div>
        </div>

        <div class="col-md-6 sm-12 col-xs-12">
            <div class="card">
                <div class="card-body">Selamat Datang Muhammad Fariz Anshori</div>
            </div>
        </div>

        <div class="col-md-6 sm-12 col-xs-12">
            <div class="card">
                <div class="card-body">Senin, 04 Juli 2023</div>
            </div>
        </div>
    </div>

    <div class="row p-3 g-2">
        <div class="col-xl-4 col-md-7">
            <a style="text-decoration: none;" href="datamahasiswa">
                <div class="card bg-dark text-white mb-4">
                    <div class="card-body ">
                        <i class="fa-solid fa-graduation-cap fa-2xl" style="color: #ffffff;"></i> Mahasiswa
                    </div>
                </div>
            </a>
        </div>


        <div class="col-xl-4 col-md-7">
            <a style="text-decoration: none;" href="datapengawas">
                <div class="card bg-dark text-white mb-4">
                    <div class="card-body">
                        <i class="fa-solid fa-eye fa-2xl" style="color: #ffffff;"></i> Pengawas
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-4 col-md-7">
            <a style="text-decoration: none;" href="datakompensasi">
                <div class="card bg-dark text-white mb-4">
                    <div class="card-body">
                        <i class="fa-solid fa-clipboard fa-2xl" style="color: #ffffff;"></i> Kompensasi
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-12 sm-12 col-xs-12">
            <div class="card">
                <div class="card-body">Data kompensasi</div>
            </div>
        </div>

        <div class="col-md-12 sm-12 col-xs-12">
            <div class="card">
                <table class="table caption-top">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Ruangan</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>

                        @php($no=1)
                            <tbody>
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>2A</td>
                                    <td>Lab Axioo</td>
                                    <td>Ongoing</td>
                                </tr>
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>2B</td>
                                    <td>Lab ARVR</td>
                                    <td>Ongoing</td>
                                </tr>
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>2B</td>
                                    <td>Lab KCV</td>
                                    <td>Ongoing</td>
                                </tr>
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>2Axioo</td>
                                    <td>Lab RPL</td>
                                    <td>Ongoing</td>
                                </tr>
                            </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
