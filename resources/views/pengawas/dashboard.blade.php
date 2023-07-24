@extends('layouts.pengawaslay')

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
            <div class="card-body">Selamat Datang Pengawas</div>
        </div>
    </div>

    <div class="col-md-6 sm-12 col-xs-12 mb-4">
        <div class="card">
            <div class="card-body">Senin, 04 Juli 2023</div>
        </div>
    </div>

    <div class="col-md-12 sm-12 col-xs-12">
        <div class="card">
            <div class="card-body">
                <b>Kegiatan Kompensasi</b>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table caption-top">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Pengawas</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Ruangan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Surat</th>
                    </tr>
                </thead>

                @php($no=1)
                @foreach ($status as $k)
                    <tbody>

                            <td>{{$no++}}</td>
                            <td>{{$k->pengs['nama']}}</td>
                            <td>{{$k->kls['nama']}}</td>
                            <td>{{$k->ruang['nama']}}</td>
                            <td>{{$k->status}}</td>
                    </tbody>
                @endforeach

            </table>

        </div>
    </div>


</div>


@endsection

