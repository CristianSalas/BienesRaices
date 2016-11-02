<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RealEstateModel;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class RealEstateController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return Person::orderBy('id', 'asc')->get();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		/*$person = new Person;

        $person->name = $request->input('name');
        $person->email = $request->input('email');
        $person->lastName = $request->input('lastName');
        $person->type = $request->input('type');
        $person->pass = md5($request->input('pass'));
        $person->save();

        return $person;*/
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}