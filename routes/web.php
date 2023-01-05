<?php

use App\Models\GastEntry;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    $entries = GastEntry::query()->get();
    return view('welcome', [
        'entries' => $entries
    ]);
})->name('welcome');

Route::post('/put-data', function (Request $request) {
    $name = $request->input('name');
    $message = $request->input('message');

    $entry = new GastEntry();
    $entry->name = $name;
    $entry->message = $message;
    $entry->save();

    return to_route('welcome');
});
