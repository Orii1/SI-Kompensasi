@extends('layouts.mainlayout')

@section('tittle')

@section('content')

<div class="row p-3 g-1">
    <div class="col-md-12 sm-12 col-xs-12">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body">Data Mahasiswa</div>
        </div>
    </div>

    <div class="ol-md-12 sm-12 col-xs-12 mb-2">
        <select class="form-select" name="kelas">
            <option selected disabled>Pilih Kelas</option>
                @foreach ($kelas as $k)
                    <option value="{{$k->id}}">
                        {{$k->nama}}
                    </option>
                @endforeach
        </select>
    </div>

    <div class="card">
        <table class="table caption-top">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                @php($no=1)
                @foreach ($mahasiswa as $m)
                    <tbody>
                            <td>{{$no++}}</td>
                            <td>{{$m->nama}}</td>
                            <td>{{$m->jenis_kelamin}}</td>
                            <td>{{$m->kelasrel['nama']}}</td>
                            <td>{{$m->email}}</td>
                            <td>
                                <a href="{{ url('editmahasiswa',$m->id) }}"><i class="fas fa-edit"></i></a>
                                |
                                <a href="{{ url('deletemahasiswa',$m->id) }}"><i class="fas fa-trash" style="color: red"></i></a>
                            </td>
                    </tbody>
                @endforeach
        </table>
    </div>
</div>
@endsection

