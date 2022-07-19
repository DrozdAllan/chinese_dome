<?php

namespace App\Http\Controllers;

use App\Models\Birthday;
use App\Models\Zodiac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ZodiacController extends Controller
{
    public function main() {
        return Inertia::render('Zodiac');
    }
    public function getZodiac(Request $request) {
        // 1- retrieve the birthday from the post
        $birthday = $request->get('birthday');

        // 2- search for the zodiac sign where birthday = zodiac dates
        $result = Birthday::where('year', $birthday)
                          ->with('zodiac')
                          ->firstOrFail();
        // TODO: chinese year is from around february so you have to calculate smthg

        // TODO: add images for animals https://mixkit.co/free-stock-art/discover/chinese-zodiac/
        // TODO: add images for flowers ?
        // link used for DB https://www.chinahighlights.com/travelguide/chinese-zodiac/
        return response()->json(['zodiac' => $result->zodiac]);
    }
}
