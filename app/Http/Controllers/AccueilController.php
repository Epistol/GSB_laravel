<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class AccueilController
 *
 * @package \App\Http
 */
class AccueilController extends Controller{

	public function index()
	{
			return view('accueil');
	}

}
