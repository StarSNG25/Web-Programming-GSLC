<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function ()
{
	return redirect('/plans');
});

Route::get('/plans', function()
{
	return view('example', [
		"plans" => [
			[
				"id" => "silver",
				"badge" => "silver_badge.png",
				"name" => "Silver Plan",
				"discount" => false,
				"price" => 99900,
				"discountPrice" => 49900
			],
			[
				"id" => "gold",
				"badge" => "gold_badge.png",
				"name" => "Gold Plan",
				"discount" => true,
				"price" => 199900,
				"discountPrice" => 149900
			]		]
	]);
});
