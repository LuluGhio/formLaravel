<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MessageController extends Controller
{
    public function getAdd(){
        return view('add');
    }
    
// 	public function postForm(MessagesRequest $request)
// 	{
// 		$messages = new messages;
// 		$messages->message = $request->input('email');
// 		$messages->save();
		
// 		return view('email_ok');
// 	}    
    

}
