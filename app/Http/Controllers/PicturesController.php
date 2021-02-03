<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PicturesRequest;

use Illuminate\Support\Str;

class PicturesController extends Controller
{
	public function getPictures()
	{
		return view('picture');
	}

	public function postPictures(PicturesRequest $request)
	{
		$picture = $request->file('picture');

		if ($picture->isValid())
		{
			$path = config('pictures.path');

			$extension = $picture->getCLientOriginalExtension();

			do {
				$name = Str::random(10) . '.' . $extension;
			} while (file_exists($path . '/' . $name));

			if ($picture->move($path, $name)) {
				return view('pictureIsValid');
			}
		}

		return redirect('picture/form')
			->with('error', 'Désolé mais votre image ne peut pas être envoyée !');
	}

}
