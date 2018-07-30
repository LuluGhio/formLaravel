<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    public function getInfos()
    {
		return view('form');
	}

	public function postInfos(Request $request)
	{
		return 'Le prénom est ' . $request->input('nom'); 
	}
}
