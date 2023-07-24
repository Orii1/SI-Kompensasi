@extends('layouts.pengawaslay')

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
    <div class="card-header">Status Kompensasi Mahasiswa</div>
        <div class="card-body">
            <form action="/pengawas/statuskompens/{{$kompens->id}}" method="POST">
                @method("PUT")
                @csrf
                <div class="col-5">
                    <select class="form-select" name="status_pengawas">
                        <option selected disabled>Status</option>
                                <option value="ACC">
                                    ACC
                                </option>
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
