<?php

namespace App\Http\Controllers;

use App\Http\Service\Translator;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NameController extends Controller
{
    public function main() {
        return Inertia::render('Name');
    }

    public function getChineseName(Request $request, Translator $translator) {
        $name = $request->get('name');

        $result = $translator->translate($name);

        dd($result);

        // TODO: pass this into TranslateController and remove the service

        // TODO: try https://www.mdbg.net/chinese/dictionary?page=cedict to get pinyin
        // TODO: if it's too hard just remove the chinese name feature

        return response()->json(['chineseName' => $result]);
    }


}
