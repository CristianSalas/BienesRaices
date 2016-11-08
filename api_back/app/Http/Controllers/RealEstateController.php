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
		return RealEstateModel::orderBy('id', 'asc')->get();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$realestate = new RealEstateModel;

        $realestate->originalCost = $request->input('originalCost');
        $realestate->newCost = $request->input('newCost');
        $realestate->construction = $request->input('construction');
        $realestate->district = $request->input('district');
        $realestate->canton = $request->input('canton');
        $realestate->province = $request->input('province');
        $realestate->direction = $request->input('direction');
        $realestate->folio = $request->input('folio');
        $realestate->lot = $request->input('lot');
        $realestate->contactName = $request->input('contactName');
        $realestate->contactTelephoneNumber = $request->input('contactTelephoneNumber');
        $realestate->contactEmail = $request->input('contactEmail');
        $realestate->save();

        return $realestate;
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
		$realestate = RealEstateModel::find($request->input('id'));

		$realestate->originalCost = $request->input('originalCost');
        $realestate->newCost = $request->input('newCost');
        $realestate->construction = $request->input('construction');
        $realestate->district = $request->input('district');
        $realestate->canton = $request->input('canton');
        $realestate->province = $request->input('province');
        $realestate->direction = $request->input('direction');
        $realestate->folio = $request->input('folio');
        $realestate->lot = $request->input('lot');
        $realestate->contactName = $request->input('contactName');
        $realestate->contactTelephoneNumber = $request->input('contactTelephoneNumber');
        $realestate->contactEmail = $request->input('contactEmail');
        $realestate->save();
        return 0;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$realestate = RealEstateModel::find($id);
        $realestate->delete();
        return 0;
	}
}