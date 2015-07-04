@extends('app')

@section('content')

    <div class="container">
        <div class="page-header">
            <h1>Branches</h1>
        </div>
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('branches.index') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
    	                 <label for="branchname">Select Branch Name ....</label>
    	                 <select name="branch" class="form-control">
    	                	@foreach($branches as $branch)
    	                 		<option>{{$branch->branch_name}}</option>
    	                	@endforeach
    	                 </select>
    	            </div>
                	<a class="btn btn-primary" href="{{ route('branches.index') }}">Submit</a>
                </form>
            </div>
        </div>
    </div>


@endsection