<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plan
{
	use HasFactory;
	
	static $plans = [
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
		]
	];
	
	public static function all()
	{
		return self::$plans;
	}
}
