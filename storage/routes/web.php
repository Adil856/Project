<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
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


//  CONTROLLER !!!
Route::prefix('/customer')->group(function () {

Route::get('/',[CustomerController::class,'index']);
Route::post('/',[CustomerController::class,'register']);
Route::get('/view',[CustomerController::class,'show']);
Route::get('/remove/{id}',[CustomerController::class,'remove'])->name('user.remove');
Route::post('/update/{id}',[CustomerController::class,'update'])->name('user.update');
Route::get('/edit/{id}',[CustomerController::class,'edit'])->name('user.edit');
Route::get('/trash',[CustomerController::class,'trash'])->name('user.trash');
Route::get('/delete/{id}',[CustomerController::class,'delete'])->name('user.delete');
Route::get('/restore/{id}',[CustomerController::class,'restore'])->name('user.restore');

});

// SESSIONS !!!
Route::get('get-session',function (){
    $session = session()->all();
    echo '<pre>';
    print_r($session);
});

Route::get('put-session',function (){
    session()->put('name','Adil');
    session()->flash('success');
    return redirect('get-session');
});
Route::get('forget-session',function (){
    session()->forget('name');
    return redirect('get-session');
});

