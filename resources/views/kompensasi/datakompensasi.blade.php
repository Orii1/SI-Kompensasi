@extends('layouts.mainlayout')

@section('tittle')

@section('content')

<div class="row p-3 g-1">
    <div class="col-md-12 sm-12 col-xs-12 mb-4">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <i class="fas fa-tachometer-alt fa-lg"></i>
                    Data Kompensasi
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-sm-12 col-xs-12 mb-2">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 mb-2">
                    <a href="{{ url('/admin/addkompensasi') }}">
                        <button class="btn btn-primary bg-dark" type="submit">
                            <i class="fa-solid fa-square-plus fa-sm" style="color: #ffffff;"></i>
                            Tambah Kompensasi
                        </button>
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <a href="{{ url('/admin/kompenmhs') }}">
                        <button class="btn btn-primary bg-dark" type="submit">
                            <i class="fa-solid fa-user fa-sm" style="color: #ffffff;"></i>
                            Kompensasi Mahasiswa
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>




    <div class="card">
        <table class="table caption-top">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Pengawas</th>
                    <th scope="col">Ruangan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php($no=1)
                @foreach ($status as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->kls['nama'] }}</td>
                        <td>{{ $item->pengs['nama']}}</td>
                        <td>{{ $item->ruang['nama']}}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a href="{{url ('/admin/cekstatus',$item->id)}}"><i class="fa-solid fa-circle-check"></i></a>
                            |
                            <a href="{{url ('/admin/editkompensasi',$item->id)}}"><i class="fas fa-edit"></i></a>
                            |
                            <a href="#"><i class="fas fa-trash" style="color: red"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>


@endsection
