<?php


use App\Http\Controllers\MainController;
use App\Http\Controllers\FormControllerNew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

Route::get('/', function () {

    return view('main');
});

Route::get('test', MainController::class);
Route::get('form', [FormControllerNew::class,'viewForm']);
Route::post('form', [FormControllerNew::class, 'form'])->name('formOne');

Route::get('city/{utm}', function (Request $request) {

});


$go = ['on', 'off'];
Route::pattern('city', implode('|', $go));

Route::group(['prefix' => '{city}',], function () {

    Route::get('test', function (Request $request) {
        dd( $request->decodedPath() );
        dd("ok");
    });


});
