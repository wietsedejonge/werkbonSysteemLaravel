<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\werkbon;
use App\Models\werkboninfo;

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

Route::get('/', function ()  {
    $werkbondata = werkboninfo::all();
            return view('welcome', [
                'werkbondata' => $werkbondata
            ]);
})->name('home');
Route::get('form', function()
{
    return view('form');
});
Route::post('form', function () {
    // Validate the request...

    return back();
});

Route::view('form','userview');
Route::post('submit',[werkbon::class, 'save']);

