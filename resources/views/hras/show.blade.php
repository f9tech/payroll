@extends('layout')

@section('content')
    <div class="page-header">
        <h1>HRAS / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$hra->id}}</p>
                </div>
                <div class="form-group">
                     <label for="empname">EMPNAME</label>
                     <p class="form-control-static">{{$hra->empname}}</p>
                </div>
                    <div class="form-group">
                     <label for="hra">HRA</label>
                     <p class="form-control-static">{{$hra->hra}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('hras.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('hras.edit', $hra->id) }}">Edit</a>
            <form action="#/$hra->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection