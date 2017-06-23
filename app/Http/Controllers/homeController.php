<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\job;
use App\company;

class homeController extends Controller
{
    //
	public function index()
	{
			return view('welcome',compact('jobs'));
	}
}
