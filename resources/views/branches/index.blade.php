@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Branches</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>BRANCHNAME</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($branches as $branch)
                <tr>
                    <td>{{$branch->id}}</td>
                    <td>{{$branch->branch_name}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('branches.show', $branch->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('branches.edit', $branch->id) }}">Edit</a>
                        <form action="{{ route('branches.destroy', $branch->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('branches.create') }}">Create</a>
        </div>
    </div>


@endsection