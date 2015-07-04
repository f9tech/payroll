@if (Auth::guest())
    <h3 align="center">You are not login. Please click here to <a href="{{ url('/auth/login') }}" class="btn">login</a></h3>
@else
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>:: Payroll Application ::</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet"> -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Payroll Application</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/') }}">User Creation</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Master</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/branches') }}">Branch</a></li>
                        <li><a href="{{ url('/divisions') }}">Division</a></li>
                        <li><a href="{{ url('/designations') }}">Designation</a></li>
                        <li><a href="{{ url('/employees') }}">Employee</a></li>
                        <li><a href="{{ url('/hras') }}">HRA</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Master</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/') }}">Attendance</a></li>
                        <li><a href="{{ url('/') }}">Set Salary</a></li>
                        <li><a href="{{ url('/') }}">Payments</a></li>
                        <li><a href="{{ url('/') }}">Cash</a></li>
                        <li><a href="{{ url('/') }}">Cash Close</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reports</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/') }}">Employee List</a></li>
                        <li><a href="{{ url('/') }}">Employee Wise Report</a></li>
                        <li><a href="{{ url('/') }}">Salary Advance Report</a></li>
                        <li><a href="{{ url('/') }}">Attendance Report</a></li>
                        <li><a href="{{ url('/') }}">Set Salary Report</a></li>
                        <li><a href="{{ url('/') }}">Paid Report</a></li>
                        <li><a href="{{ url('/') }}">Cash Report</a></li>
                        <li><a href="{{ url('/') }}">Month Salary For Cashier</a></li>
                        <li><a href="{{ url('/') }}">Comparison Statement</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            @yield('content')
        </div>
    </div>
</div><!-- /.container -->



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
</body>
</html>

@endif