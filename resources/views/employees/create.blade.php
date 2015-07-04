@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Employees / Create </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('employees.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="firstname">FIRSTNAME</label>
                     <input type="text" name="firstname" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="lastname">LASTNAME</label>
                     <input type="text" name="lastname" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="fathername">FATHERNAME</label>
                     <input type="text" name="fathername" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="dob">DOB</label>
                     <input type="text" name="dob" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="qualification">QUALIFICATION</label>
                     <input type="text" name="qualification" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="mobile">MOBILE</label>
                     <input type="text" name="mobile" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="emailid">EMAILID</label>
                     <input type="text" name="emailid" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="address">ADDRESS</label>
                     <input type="text" name="address" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="doj">DOJ</label>
                     <input type="text" name="doj" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="branch">BRANCH</label>
                     <input type="text" name="branch" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="division">DIVISION</label>
                     <input type="text" name="division" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="designation">DESIGNATION</label>
                     <input type="text" name="designation" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="salary">SALARY</label>
                     <input type="text" name="salary" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="description">DESCRIPTION</label>
                     <input type="text" name="description" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="status">STATUS</label>
                     <input type="text" name="status" class="form-control" value=""/>
                </div>



            <a class="btn btn-default" href="{{ route('employees.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</a>
            </form>
        </div>
    </div>


@endsection