<?php

namespace App\Http\Controllers;

use App\Models\Zodiac;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ZodiacController extends Controller
{
    public function main() {

        $result = Zodiac::all();

        return Inertia::render('Zodiac', ['zodiacs' => $result]);
    }
}
