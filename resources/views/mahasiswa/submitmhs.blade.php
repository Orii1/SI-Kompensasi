@extends('layouts.mahasiswalay')

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
    <div class="card-header">Upload Hasil Kompensasi</div>
        <div class="card-body">
            <form action="" method="POST">
                @csrf
                <input type="hidden" name="id_kompensasi" id="id" value="{{$kompensasi->id}}"/>
                <div class="col-5">
                    <label for="id_mahasiswa" class="form-label">Nama</label>
                    <select class="form-select" name="id_mahasiswa">
                        <option selected disabled>Pilih Nama</option>
                        @foreach ($mahasiswa as $k)
                            <option value="{{$k->id}}">
                                {{$k->nama}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-5 ">
                    <label for="">Kelas</label>
                    <div class="card">{{$kompensasi->kls['nama']}}</div>
                </div>

                <div class="col-5 ">
                    <label for="">Pengawas</label>
                    <div class="card">{{$kompensasi->pengs['nama']}}</div>
                </div>

                <div class="col-5 ">
                    <label for="">Ruangan</label>
                    <div class="card">{{$kompensasi->kls['nama']}}</div>
                </div>

                <div class="col-5">
                    <label for="">Foto</label> <br>
                    <input type="file" name="foto">
                </div> <br>


                <div class="col-1">
                    <button type="submit" class="btn btn-primary form-control ">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
