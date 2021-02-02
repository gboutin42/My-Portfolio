<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
	
	public function getFormulary()
	{
		return view('contact');
	}

	public function postMessage(Request $request)
	{
		if ($request) {
			$name = ($request->input('name') != "") ? $request->input('name') : "belle inconnu";
			$email = ($request->input('email') != "") ? $request->input('email') : "extra ordinaire que vous n'avez pas renseignez";
			$message = ($request->input('message') != "") ? "\"" . $request->input('message') . "\"" : "imaginaire";
			return "Bonjour <b>" . $name . "</b> votre message <i>" . $message . "</i> est bien parti depuis l'adresse email " . $email;
		}
		return "Erreur";
	}
}
