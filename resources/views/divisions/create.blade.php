@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Divisions / Create </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('divisions.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="divisionname">DIVISIONNAME</label>
                     <input type="text" name="divisionname" class="form-control" value=""/>
                </div>



            <a class="btn btn-default" href="{{ route('divisions.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</a>
            </form>
        </div>
    </div>


@endsection