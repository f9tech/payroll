@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Designations / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('designations.update', $designation->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$designation->id}}</p>
                </div>
                <div class="form-group">
                     <label for="designationname">DESIGNATIONNAME</label>
                     <input type="text" name="DesignationName" class="form-control" value="{{$designation->DesignationName}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('designations.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection