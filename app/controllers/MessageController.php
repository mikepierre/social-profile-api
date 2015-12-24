<?php
use Illuminate\Http\Request;
use App\Models\Messages;


class MessageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET
	 * @return Response
	 */
	public function index()
	{
		$uid_from = Input::get('uid_from');
		$uid = Input::get('uid');
		if(!empty($uid_from))
		{
			// get all messsages from uid to / from
			return Messages::whereRaw('uid_from = '.$uid_from.' AND uid_to='.$uid.'')->get();
		} else 
		{
			// get list of users
			return Messages::whereRaw('uid_to='.$uid.'')->get();
		}
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
		$uid_to = Input::get('uid_to');
		$uid_from = Input::get('uid_from');
		$message  = Input::get('message');

		$Messages = new Messages();
		$Messages->uid_to = $following_uid;
		$Messages->uid_from= $uid;
		$Messages->message = $message;
		$Messages->save();

		//return Users::where('uid',$uid)->get();
		return '';
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
