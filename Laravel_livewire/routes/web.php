<?php
use App\Http\Livewire\Contact;
use App\Http\Livewire\Home;
use App\Http\Livewire\Form;
use App\Http\Livewire\Action;
use App\Http\Livewire\Students;
use App\Http\Livewire\Create;
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
    return view('welcome');
});
 Route::view('search','usersearch');
 Route::view('student','studentprofile');
 Route::view('admin','adminprofile');
 Route::get('/home/{name}',Home::class);
 Route::get('/form',Form::class);
 Route::get('/action',Action::class);
 Route::get('/contact',Contact::class);
 Route::get('/students',Students::class);
 Route::get('/create',Create::class);