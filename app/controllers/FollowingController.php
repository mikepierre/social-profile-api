<?php
use Illuminate\Http\Request;
use App\Models\Following;


class FollowingController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET
	 * @return Response
	 */
	public function index()
	{
		$uid = Input::get('uid');
        return Following::where('uid',$uid)->get();
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
		$uid = Input::get('uid');
		$following_uid = Input::get('following_uid');

		$Following = new Following();
		$Following->following_uid = $following_uid;
		$Following->uid= $uid;
		$Following->save();

		return Users::where('uid',$uid)->get();

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
