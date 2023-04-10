<?php

use App\Http\Livewire\Actions;
use App\Http\Livewire\Comments;
use App\Http\Livewire\Forms;
use App\Http\Livewire\Landing;
use App\Http\Livewire\LifeCycle;
use App\Http\Livewire\ShowPosts;
use App\Http\Livewire\ParamComponent;
use App\Http\Livewire\SecondComponent;
use App\Http\Livewire\Registration;
use App\Http\Livewire\SimpleCalculation;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Landing::class);
Route::get('/show-posts', ShowPosts::class);
Route::get('/second-component', SecondComponent::class);
Route::get('/param-component/{param?}', ParamComponent::class);
Route::get('/registration', Registration::class);
Route::get('/comments', Comments::class);
Route::get('/actions', Actions::class);
Route::get('/simple-calculation', SimpleCalculation::class);
Route::get('/life-cycle', LifeCycle::class);
Route::get('/form', Forms::class);
