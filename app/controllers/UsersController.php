<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * POST
	 * @return Response
	 */
	public function index()
	{
		return "Hello";
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return 'saved';
	}


	/**
	 * Store a newly created resource in storage.
	 * GET
	 * @return Response
	 */
	public function store()
	{
		/*$user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->age =  $request->age;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->about = $request->about;
        $user->save();*/
        return 'saved';
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
