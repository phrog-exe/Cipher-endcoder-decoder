<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/* ENCODE MORSE */

Route::get('/encode', function () {

    return view('encodeMorse');

}) -> name('encodeMorse');

Route::post('/encode', [\App\Http\Controllers\CipherController::class, 'encode']);



/* DECODE MORSE */

Route::get('/decode', function () {

    return view('decodeMorse');

}) -> name('decodeMorse');

Route::post('/decode', [\App\Http\Controllers\CipherController::class, 'decode']);



/* ENCODE AFFINE */

Route::get('/encodeA', function () {

    return view('encodeAffine');

}) -> name('encodeAffine');

Route::post('/encodeA', [\App\Http\Controllers\CipherController::class, 'encodeA']);



/* DECODE AFFINE */

Route::get('/decodeA', function () {

    return view('decodeAffine');

}) -> name('decodeAffine');

Route::post('/decodeA', [\App\Http\Controllers\CipherController::class, 'decodeA']);


/* ENCODE VIGENERE */

Route::get('/encodeV', function () {

    return view('encodeVigenere');

}) -> name('encodeVigenere');

Route::post('/encodeV', [\App\Http\Controllers\CipherController::class, 'encodeV']);


/* DECODE VIGENERE */

Route::get('/decodeV', function () {

    return view('decodeVigenere');

}) -> name('decodeVigenere');

Route::post('/decodeV', [\App\Http\Controllers\CipherController::class, 'decodeV']);





