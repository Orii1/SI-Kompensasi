@extends('layouts.pengawaslay')

@section('tittle')

@section('content')

<div class="row p-3 g-1">
    <div class="col-md-12 sm-12 col-xs-12">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body">Kompensasi Mahasiswa</div>
        </div>
    </div>

    <div class="card">
        <table class="table caption-top">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Pengawas</th>
                    <th scope="col">Ruangan</th>
                    <th scope="col">Status Pengawas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>

            @php($no=1)
            @foreach ($status as $p)
                <tbody>

                        <td>{{$no++}}</td>
                        <td>{{$p->mahasiswa['nama']}}</td>
                        <td>{{$p->kompensasi->kls['nama']}}</td>
                        <td>{{$p->kompensasi->pengs['nama']}}</td>
                        <td>{{$p->kompensasi->ruang['nama']}}</td>
                        <td><b>{{$p->status_pengawas}}</b></td>
                        <td>
                            <a href="{{url ('/pengawas/statuskompens',$p->id)}}">
                                <div class="col-9">
                                    <button type="submit" class="btn btn-primary form-control bg-dark">ACC</button>
                                </div>
                            </a>
                        </td>
                </tbody>
            @endforeach
        </table>
    </div>
</div>

@endsection
