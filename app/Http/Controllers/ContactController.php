<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;

class ContactController extends Controller
{
    public function getAdd(){
		return view('add');
	}

    // si le form est bien rempli:
	public function postAdd(Request $request){
	    //1. envoi d'un message à l'admin avec les infos du form
        Mail::send('messageEmailAdmin', $request->all(), function($message){
            $message->to('lucileghio@live.fr')->subject('Contact_1reAppliLaravel');
        });
        // 2. affiche la view messageValidated
        return view('messageValidated');
	}
}
