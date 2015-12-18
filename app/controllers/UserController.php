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
     * POST New information in to user
     * POST REQUEST
     * @param  int  $id
     * @return Response
     */
    public function index($id)
    {
         $user = User::where('uid', $id);
         return response()->json($user);
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