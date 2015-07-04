<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$employees = Employee::all();

		return view('employees.index', compact('employees'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('employees.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$employee = new Employee();

        $employee->firstname = $request->input("firstname");
        $employee->lastname = $request->input("lastname");
        $employee->fathername = $request->input("fathername");
        $employee->dob = $request->input("dob");
        $employee->qualification = $request->input("qualification");
        $employee->mobile = $request->input("mobile");
        $employee->emailid = $request->input("emailid");
        $employee->address = $request->input("address");
        $employee->doj = $request->input("doj");
        $employee->branch = $request->input("branch");
        $employee->division = $request->input("division");
        $employee->designation = $request->input("designation");
        $employee->salary = $request->input("salary");
        $employee->description = $request->input("description");
        $employee->status = $request->input("status");

		$employee->save();

		return redirect()->route('employees.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$employee = Employee::findOrFail($id);

		return view('employees.show', compact('employee'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$employee = Employee::findOrFail($id);

		return view('employees.edit', compact('employee'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$employee = Employee::findOrFail($id);

        $employee->firstname = $request->input("firstname");
        $employee->lastname = $request->input("lastname");
        $employee->fathername = $request->input("fathername");
        $employee->dob = $request->input("dob");
        $employee->qualification = $request->input("qualification");
        $employee->mobile = $request->input("mobile");
        $employee->emailid = $request->input("emailid");
        $employee->address = $request->input("address");
        $employee->doj = $request->input("doj");
        $employee->branch = $request->input("branch");
        $employee->division = $request->input("division");
        $employee->designation = $request->input("designation");
        $employee->salary = $request->input("salary");
        $employee->description = $request->input("description");
        $employee->status = $request->input("status");

		$employee->save();

		return redirect()->route('employees.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$employee = Employee::findOrFail($id);
		$employee->delete();

		return redirect()->route('employees.index')->with('message', 'Item deleted successfully.');
	}

}
