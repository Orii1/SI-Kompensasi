@extends('layouts.mainlayout')

@section('tittle')

@section('content')
<div class="row p-3 g-1">
    <div class="col-md-12 sm-12 col-xs-12">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body">Data Pengawas</div>
        </div>
    </div>

    <div class="card">
        <table class="table caption-top">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>

            @php($no=1)
            @foreach ($pengawas as $p)
                <tbody>

                        <td>{{$no++}}</td>
                        <td>{{$p->nama}}</td>
                        <td>{{$p->jenis_kelamin}}</td>
                        <td>{{$p->email}}</td>
                        <td>
                            <a href="{{ url('/admin/editpengawas',$p->id) }}"><i class="fas fa-edit"></i></a>
                            |
                            <a href="{{ url('/admin/deletepengawas',$p->id) }}"><i class="fas fa-trash" style="color: red"></i></a>
                        </td>
                </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection
