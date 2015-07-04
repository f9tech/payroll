@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Designations</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>DESIGNATIONNAME</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($designations as $designation)
                <tr>
                    <td>{{$designation->id}}</td>
                    <td>{{$designation->DesignationName}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('designations.show', $designation->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('designations.edit', $designation->id) }}">Edit</a>
                        <form action="{{ route('designations.destroy', $designation->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('designations.create') }}">Create</a>
        </div>
    </div>


@endsection