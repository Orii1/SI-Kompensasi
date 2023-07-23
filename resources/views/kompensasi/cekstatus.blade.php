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
    <div class="card-header">Cek Status</div>
        <div class="card-body">
            <form action="/admin/cekstatus/{{$kompens->id}}" method="POST">
                @method("PUT")
                @csrf
                <div class="col-5">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" name="status" id="status" class="form-control" required>
                </div>

                <div class="col-1">
                    <button type="submit" class="btn btn-primary form-control ">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
