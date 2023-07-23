@extends('layouts.mainlayout')

@section('tittle')

@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Pengawas</div>
        <div class="card-body">
            <form action="/admin/editpengawas/{{$pengawas->id}}" method="POST">
                @method("PUT")
                @csrf
                <input type="hidden" name="id" id="id" value="{{$pengawas->id}}"/>
                <label for="">Nama</label><br>
                <input type="text" name="nama" id="nama" value="{{$pengawas->nama}}" class="form-control"><br>

                <div class="col-5">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jenis_kelamin">
                        <option selected disabled>{{$pengawas->jenis_kelamin}}</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                    </select>
                </div><br>

                <label for="">Email</label><br>
                <input type="text" name="email" id="email" value="{{$pengawas->email}}" class="form-control"><br>

                <div class="col-1">
                    <button type="submit" class="btn btn-primary form-control ">Submit</button>
                </div>

            </form>

        </div>

    </div>

@endsection
