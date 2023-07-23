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
    <div class="card-header">Tambah Kompensasi</div>
        <div class="card-body">
            <form action="" method="POST">

                @csrf

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
                    <label for="pengawas" class="form-label">Pengawas</label>
                    <select class="form-select" name="pengawas">
                        <option selected disabled>Pilih pengawas</option>
                        @foreach ($pengawas as $p)
                            <option value="{{$p->id}}">
                                {{$p->nama}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-5">
                    <label for="ruangan" class="form-label">Ruangan</label>
                    <select class="form-select" name="ruangan">
                        <option selected disabled>Pilih ruangan</option>
                        @foreach ($ruangan as $r)
                            <option value="{{$r->id}}">
                                {{$r->nama}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-1">
                    <button type="submit" class="btn btn-primary form-control ">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
