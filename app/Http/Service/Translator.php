<?php

namespace App\Http\Service;

use Google\Cloud\Translate\V2\TranslateClient;
use Illuminate\Support\Facades\Http;

class Translator
{
    public function translate(string $sentence) {
        // TODO: add the api

        // OPTION 1 without the pack
        // $bearer = "'Bearer '+'$apiKey'";
        // $response = Http::withHeaders(['Content-Type' => 'application/json', 'Authorization' => $bearer])->post('https://translation.googleapis.com/language/translate/v2');

        // OPTION 2
        $translate = new TranslateClient(['key' => env('API_KEY')]);

        // TODO: ça marche mais t'as pas le pinyin

        // $result = $translate->translate($sentence, ['source' => 'en', 'target' => 'zh-CN']);

        return 'zinzin';
        //        return $result;
    }
}
