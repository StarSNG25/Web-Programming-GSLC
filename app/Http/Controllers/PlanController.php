<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
	public function plans()
	{
		return view('example', [
			'plans' => Plan::all()
		]);
	}
}
