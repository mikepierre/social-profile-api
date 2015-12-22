<?php
use Illuminate\Http\Request;
use App\Models\Users;


class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET
	 * @return Response
	 */
	public function index()
	{
        return Users::where('uid',1)->get();
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

	}


	/**
	 * Store a newly created resource in storage.
	 * POST
	 * @return Response
	 */
	public function store()
	{
		$Users = new Users();
		$Users->first_name = 'Michael';
		$Users->last_name = 'Pierre';
		$Users->age = '31';
		$Users->city = 'Orlando';
		$Users->state = 'Florida';
		$Users->country = 'USA';
		$Users->about = 'Cool Dude';
		$Users->save();

		return Users::where('uid',$Users->id)->get();

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
