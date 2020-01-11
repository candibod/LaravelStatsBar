<?php

namespace JeevanCandy\LaravelStatsBar\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JeevanCandy\LaravelStatsBar\Models\createForm;

class LaravelStatsBarController extends Controller
{

	public function index()
	{
		return view('laravelstatsbarviews::contact');
	}

	public function sendMail(Request $request)
	{
		createForm::create($request->all());

		return redirect(route('contact'))->with(['message' => 'Thank you, your mail has been sent successfully.']);
	}
}