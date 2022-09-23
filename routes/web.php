<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Page\Homes;
use App\Http\Livewire\Page\Temptickets;
use App\Http\Livewire\Page\Dtickets;
use App\Http\Livewire\Page\Dredtickets;
use App\Http\Livewire\Page\Owtickets;
use App\Http\Livewire\Page\Owticketstwo;
use App\Http\Livewire\Page\Ftemplates;
use App\Http\Livewire\Page\Onewaytemp;
use App\Http\Livewire\Page\Layover;
use App\Http\Livewire\Pages\Oneway;
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


Route::get('/', Homes::class);
Route::get('/dredtickets/{id}', Dredtickets::class);
Route::get('/dtickets/{id}', Dtickets::class);
Route::get('/owtickets/{id}', Owtickets::class);
Route::get('/owticketstwo/{id}', Owticketstwo::class);

Route::get('/samptickets', Ftemplates::class);
Route::get('/onewaytickets', Onewaytemp::class);
Route::get('/dynamic', Layover::class);
Route::get('/oneway', Oneway::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Clear configurations:
			Route::get('/optimize', function() {
        Artisan::call('cache:clear');
      return Artisan::output();
			});
