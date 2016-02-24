<?php
use App\Taxi;
use Illuminate\Http\Request;

// Ovaj dio koda vraca url public welcome view
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {

    Route::get('{drzava}/{grad}', 'TaxiController@trazi');

});

Route::post('/task', function (Request $request) {

    return Redirect::to($request->drzava.'/'.$request->grad);

});