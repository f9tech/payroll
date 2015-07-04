@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Divisions</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>DIVISIONNAME</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($divisions as $division)
                <tr>
                    <td>{{$division->id}}</td>
                    <td>{{$division->DivisionName}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('divisions.show', $division->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('divisions.edit', $division->id) }}">Edit</a>
                        <form action="{{ route('divisions.destroy', $division->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('divisions.create') }}">Create</a>
        </div>
    </div>


@endsection