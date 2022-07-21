<?php

namespace App\Http\Controllers;

use Google\Cloud\Translate\V2\TranslateClient;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Overtrue\Pinyin\Pinyin;

class NameController extends Controller
{
    public function main() {
        return Inertia::render('Name');
    }

    public function getChineseName(Request $request, Pinyin $pinyin) {
        $name = $request->get('name');

        $translate = new TranslateClient(['key' => env('API_KEY')]);

        $result = $translate->translate($name, ['source' => 'en', 'target' => 'zh-CN']);
        $simplifiedChinese = $result['text'];
        $pinyinName = $pinyin->name($simplifiedChinese, PINYIN_TONE);

        return response()->json(['simplifiedChinese' => $simplifiedChinese, 'pinyinName' => implode(" ", $pinyinName)]);
    }
}
