<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;
Use App\User;

use Illuminate\Http\Request;

class RegisterController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	 public function saveUser(Request $request)
     {
    	
       $validator = Validator::make($request->all(), [
           'name'     => 'required|max:255',
           'email'    => 'required|email|max:255|unique:users,email',
           'password' => 'required|confirmed|min:6',
       ]);
	    
	    if ($validator->fails())
	    {
	        return redirect('auth/register')->withErrors($validator);
	    }
	   	else{ 
	       $result = User::create([
	           'name'     => $request['name'],
	           'email'    => $request['email'],
	           'password' => bcrypt($request['password']),
	    ]);

       if($result)
	      return redirect('auth/login')->with('success','Registered');  	
	   }
     }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
