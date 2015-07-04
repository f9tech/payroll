@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Employees / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$employee->id}}</p>
                </div>
                    <div class="form-group">
                     <label for="firstname">FIRSTNAME</label>
                     <p class="form-control-static">{{$employee->firstname}}</p>
                </div>
                    <div class="form-group">
                     <label for="lastname">LASTNAME</label>
                     <p class="form-control-static">{{$employee->lastname}}</p>
                </div>
                    <div class="form-group">
                     <label for="fathername">FATHERNAME</label>
                     <p class="form-control-static">{{$employee->fathername}}</p>
                </div>
                    <div class="form-group">
                     <label for="dob">DOB</label>
                     <p class="form-control-static">{{$employee->dob}}</p>
                </div>
                    <div class="form-group">
                     <label for="qualification">QUALIFICATION</label>
                     <p class="form-control-static">{{$employee->qualification}}</p>
                </div>
                    <div class="form-group">
                     <label for="mobile">MOBILE</label>
                     <p class="form-control-static">{{$employee->mobile}}</p>
                </div>
                    <div class="form-group">
                     <label for="emailid">EMAILID</label>
                     <p class="form-control-static">{{$employee->emailid}}</p>
                </div>
                    <div class="form-group">
                     <label for="address">ADDRESS</label>
                     <p class="form-control-static">{{$employee->address}}</p>
                </div>
                    <div class="form-group">
                     <label for="doj">DOJ</label>
                     <p class="form-control-static">{{$employee->doj}}</p>
                </div>
                    <div class="form-group">
                     <label for="branch">BRANCH</label>
                     <p class="form-control-static">{{$employee->branch}}</p>
                </div>
                    <div class="form-group">
                     <label for="division">DIVISION</label>
                     <p class="form-control-static">{{$employee->division}}</p>
                </div>
                    <div class="form-group">
                     <label for="designation">DESIGNATION</label>
                     <p class="form-control-static">{{$employee->designation}}</p>
                </div>
                    <div class="form-group">
                     <label for="salary">SALARY</label>
                     <p class="form-control-static">{{$employee->salary}}</p>
                </div>
                    <div class="form-group">
                     <label for="description">DESCRIPTION</label>
                     <p class="form-control-static">{{$employee->description}}</p>
                </div>
                    <div class="form-group">
                     <label for="status">STATUS</label>
                     <p class="form-control-static">{{$employee->status}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('employees.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('employees.edit', $employee->id) }}">Edit</a>
            <form action="#/$employee->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection