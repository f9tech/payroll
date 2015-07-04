@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Branches / Create </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('branches.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="branchname">BRANCHNAME</label>
                     <input type="text" name="branchname" class="form-control" value=""/>
                </div>



            <a class="btn btn-default" href="{{ route('branches.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</a>
            </form>
        </div>
    </div>


@endsection