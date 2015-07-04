@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Divisions / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('divisions.update', $division->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$division->id}}</p>
                </div>
                <div class="form-group">
                     <label for="divisionname">DIVISIONNAME</label>
                     <input type="text" name="divisionname" class="form-control" value="{{$division->DivisionName}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('divisions.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection