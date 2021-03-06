@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Designations / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$designation->id}}</p>
                </div>
                <div class="form-group">
                     <label for="designationname">DESIGNATIONNAME</label>
                     <p class="form-control-static">{{$designation->DesignationName}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('designations.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('designations.edit', $designation->id) }}">Edit</a>
            <form action="#/$designation->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection