@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Branches / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('branches.update', $branch->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$branch->id}}</p>
                </div>
                <div class="form-group">
                     <label for="branchname">BRANCHNAME</label>
                     <input type="text" name="branchname" class="form-control" value="{{$branch->branch_name}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('branches.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection