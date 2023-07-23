@extends('layouts.mainlayout')

@section('tittle')

@section('content')
<div class="row p-3 g-1">
        <div class="col-md-12 sm-12 col-xs-12 mb-4">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        Data Ruangan
                    </div>
                </div>
        </div>


        <div class="col-md-2 col-sm-2 col-xs-12 mb-2">
            <a href="{{ url ('admin/addruangan') }}">
                <button class="btn btn-primary bg-dark" type="submit">
                    <i class="fa-solid fa-square-plus fa-sm" style="color: #ffffff;"></i>
                    <label style="size: 5px;">Tambah Ruangan</label>
                </button>
            </a>
        </div>

        <div class="card">
            <table class="table caption-top">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                @php($no=1)
                @foreach ($ruangan as $r)
                    <tbody>

                            <td>{{$no++}}</td>
                            <td>{{$r->nama}}</td>
                            <td>
                                <a href="{{ url('editruangan',$r->id) }}"><i class="fas fa-edit"></i></a>
                                |
                                <a href="{{ url('deleteruangan',$r->id)}}"><i class="fas fa-trash" style="color: red"></i></a>
                            </td>
                    </tbody>
                @endforeach
            </table>

         </div>
</div>

@endsection
