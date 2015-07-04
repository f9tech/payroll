@extends('layout')

@section('content')
    <div class="page-header">
        <h1>HRAS / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('hras.update', $hra->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$hra->id}}</p>
                </div>
                <div class="form-group">
                     <label for="empname">EMPNAME</label>
                     <input type="text" name="empname" class="form-control" value="{{$hra->empname}}"/>
                </div>
                    <div class="form-group">
                     <label for="hra">HRA</label>
                     <input type="text" name="hra" class="form-control" value="{{$hra->hra}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('hras.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection