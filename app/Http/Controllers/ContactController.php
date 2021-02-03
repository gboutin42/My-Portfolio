<?php

namespace App\Http\Controllers;

use Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
	
	public function getFormulary()
	{
		return view('contact');
	}

	public function postMessage(ContactRequest $request)
	{
		Mail::send('emails.contact', $request->all(), function($message) {
			$message->to('boutin_gregory@yahoo.com')->subject('Contact');
		});

		return view('confirmSendMessage');
	}
}
