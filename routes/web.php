<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\werkbon;
use Illuminate\Http\Request;
use App\Http\Controllers\ImageUploadController;
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
    $werkbondata = DB::table('werkboninfo')->orderBy('id', 'DESC')->get();
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

Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');

Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');

Route::view('form','userview');
Route::view('show','show');
Route::get('show/{id}', function ($id)  {
    $werkbom = werkboninfo::findOrFail($id);
    return view('show', [
        'werkbom' => $werkbom
    ]);
})->name('show');
Route::post('submit',[werkbon::class, 'save']);

Route::post('status', function (Request $request)  {
    $afronden = DB::table('werkboninfo')->where('id', $request->id)->update(['status' => 'Afgerond']);
    return redirect()->route('show', $request->id);
})->name('status');
