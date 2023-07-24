@extends('layouts.mainlayout')

@section('tittle')

@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Ruangan</div>
        <div class="card-body">
            <form action="/admin/editruangan/{{$ruangan->id}}" method="POST">
                @method("PUT")
                @csrf
                <input type="hidden" name="id" id="id" value="{{$ruangan->id}}"/>
                <label for="">Nama</label><br>
                <input type="text" name="nama" id="nama" value="{{$ruangan->nama}}" class="form-control"><br>

                <div class="col-1">
                    <button type="submit" class="btn btn-primary form-control ">Submit</button>
                </div>

            </form>

        </div>

    </div>

@endsection
