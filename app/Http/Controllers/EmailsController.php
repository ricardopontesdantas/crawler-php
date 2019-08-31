<?php

namespace App\Http\Controllers;

use App\Email;
use App\Http\Resources\EmailResource;

class EmailsController extends Controller
{
	public function index()
	{
		return view('index');
	}

	public function show10Last()
	{
		$emails = Email::query()->limit(10)->orderby('id', 'desc')->get();
		return $emails;
	}
}