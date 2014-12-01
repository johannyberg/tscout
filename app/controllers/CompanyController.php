<?php

class CompanyController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /company
	 *
	 * @return Response
	 */
	public function index($business=null)
	{
		if(isset($business)) {
			$companies = Company::with('businesses')->whereHas('businesses', function($q) use($business)
			{
				$q->where('slug', $business);

			})->get();
		} else {
			$companies = Company::with( array('businesses','categories') )->get();			
		}
		
		return View::make('companies', array('companies' => $companies));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /company/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /company
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /company/{id}
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
	 * GET /company/{id}/edit
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
	 * PUT /company/{id}
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
	 * DELETE /company/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}