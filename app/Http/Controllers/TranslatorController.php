<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TranslatorController extends Controller
{
    public function main() {
        return Inertia::render('Translator');
    }
}
