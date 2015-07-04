@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Branches / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$branch->id}}</p>
                </div>
                <div class="form-group">
                     <label for="branchname">BRANCHNAME</label>
                     <p class="form-control-static">{{$branch->branch_name}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('branches.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('branches.edit', $branch->id) }}">Edit</a>
            <form action="#/$branch->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection