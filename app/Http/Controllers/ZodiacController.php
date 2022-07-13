<?php

namespace App\Http\Controllers;

use App\Models\Zodiac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ZodiacController extends Controller
{
    public function main(Request $request) {
        // 1- retrieve the birthday from the post
        $date = $request->get('date');
        //        dd($date);
        // 2- search for the zodiac sign where birthday = zodiac dates

        // array ? chinese year is from around february so you have to calculate smthg
        $result = Zodiac::findOrFail(1);

//        dd($result);
        return response()->json(['zodiac' => $result]);
    }
}
