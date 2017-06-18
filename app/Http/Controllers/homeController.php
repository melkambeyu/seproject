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
		$jobs = job::take(6)->get();
		return view('welcome',compact('jobs'));
	}
}
