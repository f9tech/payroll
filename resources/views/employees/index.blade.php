@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Employees</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>FIRSTNAME</th>
                            <th>LASTNAME</th>
                            <th>FATHERNAME</th>
                            <th>DOB</th>
                            <th>QUALIFICATION</th>
                            <th>MOBILE</th>
                            <th>EMAILID</th>
                            <th>ADDRESS</th>
                            <th>DOJ</th>
                            <th>BRANCH</th>
                            <th>DIVISION</th>
                            <th>DESIGNATION</th>
                            <th>SALARY</th>
                            <th>DESCRIPTION</th>
                            <th>STATUS</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>

                    @foreach($employees as $employee)
                    <tr>
                        <td>{{$employee->id}}</td>
                        <td>{{$employee->firstname}}</td>
                        <td>{{$employee->lastname}}</td>
                        <td>{{$employee->fathername}}</td>
                        <td>{{$employee->dob}}</td>
                        <td>{{$employee->qualification}}</td>
                        <td>{{$employee->mobile}}</td>
                        <td>{{$employee->emailid}}</td>
                        <td>{{$employee->address}}</td>
                        <td>{{$employee->doj}}</td>
                        <td>{{$employee->branch}}</td>
                        <td>{{$employee->division}}</td>
                        <td>{{$employee->designation}}</td>
                        <td>{{$employee->salary}}</td>
                        <td>{{$employee->description}}</td>
                        <td>{{$employee->status}}</td>

                        <td class="text-right">
                            <a class="btn btn-primary" href="{{ route('employees.show', $employee->id) }}">View</a>
                            <a class="btn btn-warning " href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                        </td>
                    </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>

            <a class="btn btn-success" href="{{ route('employees.create') }}">Create</a>
        </div>
    </div>


@endsection