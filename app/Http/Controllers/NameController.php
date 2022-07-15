<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class NameController extends Controller
{
    public function main() {
        // TODO: https://chinese.gratis/names/
        // TODO: make a script to retrieve the answer from that page and use it, cause i can't find any good api
        return Inertia::render('Name');
    }
}
