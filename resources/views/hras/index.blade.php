@extends('layout')

@section('content')
    <div class="page-header">
        <h1>HRAS</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>EMPNAME</th>
                        <th>HRA</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($hras as $hra)
                <tr>
                    <td>{{$hra->id}}</td>
                    <td>{{$hra->empname}}</td>
                    <td>{{$hra->hra}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('hras.show', $hra->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('hras.edit', $hra->id) }}">Edit</a>
                        <form action="{{ route('hras.destroy', $hra->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('hras.create') }}">Create</a>
        </div>
    </div>


@endsection