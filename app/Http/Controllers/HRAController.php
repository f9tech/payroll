<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\HRA;
use App\Employee;
use Illuminate\Http\Request;

class HRAController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$hras = HRA::all();

		return view('hras.index', compact('hras'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$employees = Employee::all();

		return view('hras.create',compact('employees'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$hra = new HRA();

		$hra->empname = $request->input("empname");
        $hra->hra = $request->input("hra");

		$hra->save();

		return redirect()->route('hras.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$hra = HRA::findOrFail($id);

		return view('hras.show', compact('hra'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$hra = HRA::findOrFail($id);

		return view('hras.edit', compact('hra'));
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
		$hra = HRA::findOrFail($id);

		$hra->empname = $request->input("empname");
        $hra->hra = $request->input("hra");

		$hra->save();

		return redirect()->route('hras.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$hra = HRA::findOrFail($id);
		$hra->delete();

		return redirect()->route('hras.index')->with('message', 'Item deleted successfully.');
	}

}
