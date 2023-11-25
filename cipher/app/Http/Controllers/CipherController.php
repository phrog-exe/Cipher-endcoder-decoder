<?php

namespace App\Http\Controllers;

use App\Services\Affine;
use App\Services\Morse;
use App\Services\Vigenere;
use http\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CipherController extends Controller
{

    public function encode(Request $request)
    {


        $text = $request['text1'];

        if(str_contains($text, 'https://twitter.com') || str_contains($text, 'http://twitter.com')){
            $id = preg_split('/\//', $text)[5];

            $response =  Http::withHeaders([
              'Authorization' => 'Bearer AAAAAAAAAAAAAAAAAAAAAJmXeAEAAAAAycWwZKDharp9jWgiXkN%2FGquyNPE%3D0elvn3lJ9vESi5yPEO4crD8BfkaNL2KcmsbFmoRobbkPhyuFRc',

                ])->get('https://api.twitter.com/2/tweets/' . $id);

            $text = json_decode($response->body(), true)['data']['text'];


        } else {

            $text = str_replace("\r", "", $text);}
            $lines = explode(PHP_EOL, $text);

        $encoded = "";

        $morse = new Morse();


        foreach ($lines as $line) {


            $encoded .= $morse->encoder($line) . PHP_EOL;
        }
        error_log($encoded);

        return redirect()->route('encodeMorse')->with(['encodedText' => $encoded, 'text' => $text]);
    }


    public function decode(Request $request)
    {

        $text = $request['text1'];

        if(str_contains($text, 'https://twitter.com') || str_contains($text, 'http://twitter.com')){
            $id = preg_split('/\//', $text)[5];

            $response =  Http::withHeaders([
                'Authorization' => 'Bearer AAAAAAAAAAAAAAAAAAAAAJmXeAEAAAAAycWwZKDharp9jWgiXkN%2FGquyNPE%3D0elvn3lJ9vESi5yPEO4crD8BfkaNL2KcmsbFmoRobbkPhyuFRc',

            ])->get('https://api.twitter.com/2/tweets/' . $id);

            $text = json_decode($response->body(), true)['data']['text'];


        } else {
            $text = str_replace("\r", "", $text);}
            $lines = explode(PHP_EOL, $text);
            $encoded = "";

            $morse = new Morse();


            foreach ($lines as $line) {


                $encoded .= $morse->decoder($line) . PHP_EOL;
            }

        error_log($encoded);
        return redirect()->route('decodeMorse')->with(['encodedText2' => $encoded, 'text2' => $text]);
    }


    public function encodeA(Request $request)
    {

        $text = $request['text1'];

        if(str_contains($text, 'https://twitter.com') || str_contains($text, 'http://twitter.com')){
            $id = preg_split('/\//', $text)[5];

            $response =  Http::withHeaders([
                'Authorization' => 'Bearer AAAAAAAAAAAAAAAAAAAAAJmXeAEAAAAAycWwZKDharp9jWgiXkN%2FGquyNPE%3D0elvn3lJ9vESi5yPEO4crD8BfkaNL2KcmsbFmoRobbkPhyuFRc',

            ])->get('https://api.twitter.com/2/tweets/' . $id);

            $text = json_decode($response->body(), true)['data']['text'];


        } else {


            $text = str_replace("\r", "", $text);}
            $lines = explode(PHP_EOL, $text);
            $encoded = "";
            $num1 = $request['num1'];
            $num2 = $request['num2'];


            $affine = new Affine();


            foreach ($lines as $line) {


                $encoded .= $affine->encoder($line, $num1, $num2) . PHP_EOL;
            }


        return redirect()->route('encodeAffine')->with(['encodedText3' => $encoded, 'text3' => $text, 'num1' => $num1, 'num2' => $num2]);
    }


    public function decodeA(Request $request)
    {

        $text = $request['text1'];

        if(str_contains($text, 'https://twitter.com') || str_contains($text, 'http://twitter.com')){
            $id = preg_split('/\//', $text)[5];

            $response =  Http::withHeaders([
                'Authorization' => 'Bearer AAAAAAAAAAAAAAAAAAAAAJmXeAEAAAAAycWwZKDharp9jWgiXkN%2FGquyNPE%3D0elvn3lJ9vESi5yPEO4crD8BfkaNL2KcmsbFmoRobbkPhyuFRc',

            ])->get('https://api.twitter.com/2/tweets/' . $id);

            $text = json_decode($response->body(), true)['data']['text'];


        } else {

            $text = str_replace("\r", "", $text);}
            $lines = explode(PHP_EOL, $text);
            $encoded = "";
            $num1 = $request['num3'];
            $num2 = $request['num4'];


            $affine = new Affine();


            foreach ($lines as $line) {


                $encoded .= $affine->decoder($line, $num1, $num2) . PHP_EOL;
            }

        return redirect()->route('decodeAffine')->with(['encodedText4' => $encoded, 'text4' => $text, 'num1' => $num1, 'num2' => $num2]);
    }

    public function encodeV(Request $request)
    {

        $text = $request['text1'];
        $key = $request['key'];

        if(str_contains($text, 'https://twitter.com') || str_contains($text, 'http://twitter.com')){
            $id = preg_split('/\//', $text)[5];

            $response =  Http::withHeaders([
                'Authorization' => 'Bearer AAAAAAAAAAAAAAAAAAAAAJmXeAEAAAAAycWwZKDharp9jWgiXkN%2FGquyNPE%3D0elvn3lJ9vESi5yPEO4crD8BfkaNL2KcmsbFmoRobbkPhyuFRc',

            ])->get('https://api.twitter.com/2/tweets/' . $id);

            $text = json_decode($response->body(), true)['data']['text'];


        } else {

            $text = str_replace("\r", "", $text);}
            $lines = explode(PHP_EOL, $text);

            $encoded = "";

            $vigenere = new Vigenere();

            foreach ($lines as $line) {


                $encoded .= $vigenere->encoder($line, $key) . PHP_EOL;
            }

        error_log($encoded);
        return redirect()->route('encodeVigenere')->with(['encodedText5' => $encoded, 'text5' => $text, 'key' => $key]);
    }


    public function decodeV(Request $request)
    {

        $text = $request['text1'];
        $key = $request['key'];

        if(str_contains($text, 'https://twitter.com') || str_contains($text, 'http://twitter.com')){
            $id = preg_split('/\//', $text)[5];

            $response =  Http::withHeaders([
                'Authorization' => 'Bearer AAAAAAAAAAAAAAAAAAAAAJmXeAEAAAAAycWwZKDharp9jWgiXkN%2FGquyNPE%3D0elvn3lJ9vESi5yPEO4crD8BfkaNL2KcmsbFmoRobbkPhyuFRc',

            ])->get('https://api.twitter.com/2/tweets/' . $id);

            $text = json_decode($response->body(), true)['data']['text'];


        } else {

            $text = str_replace("\r", "", $text);}
            $lines = explode(PHP_EOL, $text);
            $encoded = "";


            $vigenere = new Vigenere();


            foreach ($lines as $line) {


                $encoded .= $vigenere->decoder($line, $key) . PHP_EOL;
            }

        return redirect()->route('decodeVigenere')->with(['encodedText6' => $encoded, 'text6' => $text, 'key' => $key]);
    }
}

