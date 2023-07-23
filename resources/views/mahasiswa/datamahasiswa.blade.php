@extends('layouts.mainlayout')

@section('tittle')

@section('content')

<div class="row p-3 g-1">
    <div class="col-md-12 sm-12 col-xs-12">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body">Data Mahasiswa</div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-7 mb-2">
            <form action="{{ route('search') }}" method="GET" class="row">
                <div class="col-md-10 col-sm-10 col-xs-12">
                    <select class="form-select" name="kelas">
                        <option selected disabled>Pilih Kelas</option>
                        @foreach ($kelas as $k)
                            <option value="{{$k->id}}">
                                {{$k->nama}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <button class="btn btn-primary bg-dark" type="submit">
                        <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                    </button>
                </div>
            </form>
        </div>
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

                @if(isset($results))
                    @if($results->isEmpty())
                        <p>No results found.</p>
                    @else
                        @php($no=1)
                        @foreach ($results as $m)
                            <tbody>
                                    <td>{{$no++}}</td>
                                    <td>{{$m->nama}}</td>
                                    <td>{{$m->jenis_kelamin}}</td>
                                    <td>{{$m->kelasrel['nama']}}</td>
                                    <td>{{$m->email}}</td>
                                    <td>
                                        <a href="{{ url('/admin/editmahasiswa',$m->id) }}"><i class="fas fa-edit"></i></a>
                                        |
                                        <a href="{{ url('/admin/deletemahasiswa',$m->id) }}"><i class="fas fa-trash" style="color: red"></i></a>
                                    </td>
                            </tbody>
                        @endforeach
                    @endif
                @endif
        </table>
    </div>
</div>
@endsection

