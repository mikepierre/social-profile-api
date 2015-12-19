<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

/*
* This class gets single user information.
*/
class UserController extends Controller
{
    /**
     * get New information in to user
     * GET REQUEST
     * @param  int  $id
     * @return Response
     */
    public function index($id)
    {
         $user = User::where('uid', $id);
         return response()->json($user);
    }

    /**
     * Store single user information
     * POST REQUEST
     * @param  int  $id
     * @return Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->uid = $request->uid;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->age =  $request->age;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->about = $request->about;

        $user->save();
        //
    }

    /**
     * Display single user information
     * GET REQUEST
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update single user information
     * PUT REQUEST
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

}