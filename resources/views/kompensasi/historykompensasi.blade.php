@extends('layouts.mainlayout')

@section('tittle')

@section('content')

<div class="row p-3 g-1">
    <div class="col-md-12 sm-12 col-xs-12 mb-4">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <i class="fas fa-tachometer-alt fa-lg"></i>
                    History Kompensasi
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
                </tr>
            </thead>
            <tbody>
                @php($no=1)
                @foreach ($kompens as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->kls['nama'] }}</td>
                        <td>{{ $item->pengs['nama']}}</td>
                        <td>{{ $item->ruang['nama']}}</td>
                        <td>{{ $item->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>


@endsection
