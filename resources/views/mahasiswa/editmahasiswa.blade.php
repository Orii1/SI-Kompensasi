@extends('layouts.mainlayout')

@section('tittle')

@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Mahasiswa</div>
        <div class="card-body">
            <form action="/editmahasiswa/{{$mahasiswa->id}}" method="POST">
                @method("PUT")
                @csrf
                <input type="hidden" name="id" id="id" value="{{$mahasiswa->id}}"/>
                <label for="">Nama</label><br>
                <input type="text" name="nama" id="nama" value="{{$mahasiswa->nama}}" class="form-control"><br>

                <div class="col-5">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jenis_kelamin">
                        <option selected disabled>{{$mahasiswa->jenis_kelamin}}</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                    </select>
                </div><br>

                <div class="col-5">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select class="form-select" name="kelas">
                        <option selected disabled>{{$mahasiswa->kelas}}</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                    </select>
                </div><br>

                <label for="">Email</label><br>
                <input type="text" name="email" id="email" value="{{$mahasiswa->email}}" class="form-control"><br>

                <div class="col-1">
                    <button type="submit" class="btn btn-primary form-control ">Submit</button>
                </div>

            </form>

        </div>

    </div>

@endsection
