@extends('layouts.mainlayout')

@section('tittle')

@section('content')

<style>
    .main{
        height: 100vh;
        box-sizing: border-box;
    }


    form div{
        margin-bottom: 15px;
    }

</style>

<div class="card" style="margin:20px;">
    <div class="card-header">Tambah Mahasiswa</div>
        <div class="card-body">
            <form action="" method="POST">
                @csrf
                <div class="col-5">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>

                <div class="col-5">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jenis_kelamin">
                        <option selected disabled>Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="col-5">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select class="form-select" name="kelas">
                        <option selected disabled>Pilih kelas</option>
                        @foreach ($kelas as $k)
                            <option value="{{$k->id}}">
                                {{$k->nama}}
                            </option>
                        @endforeach
                    </select>
                </div>


                <div class="col-5">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control" required>
                </div>
                <div class="col-1">
                    <button type="submit" class="btn btn-primary form-control ">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
