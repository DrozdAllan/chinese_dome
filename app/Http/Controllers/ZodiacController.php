<?php

namespace App\Http\Controllers;

use App\Models\Birthday;
use App\Models\Zodiac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ZodiacController extends Controller
{
	public function main()
	{
		return Inertia::render('Zodiac');
	}
	public function getZodiac(Request $request)
	{
		// 1- retrieve the birthday from the post
		$birthday = $request->get('birthday');

		// 2- search for the zodiac sign where birthday >= first start_date
		$result = Birthday::whereDate('start_date', '<=', $birthday)
			->with('zodiac')
			->orderByDesc('start_date')
			->first();

		return response()->json(['zodiac' => $result->zodiac]);
	}
}
