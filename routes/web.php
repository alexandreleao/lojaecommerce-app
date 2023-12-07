<?php

use App\DataTables\UsersDataTable;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Intervention\Image\ImageManagerStatic;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{id}/edit',function($id){
    return $id;
})->name('users.edit');

Route::get('users/{id}/destroy',function($id){
    return $id;
})->name('users.destroy');

Route::get('/dashboard', function (UsersDataTable $dataTable) {
    return $dataTable->render('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('image', function(){
    $img = ImageManagerStatic::make('car2.jpeg')
    ->fit(400, 400)
    ->greyscale()
    ->blur(15);
   // $img->save('car2.jpeg',80);

   return $img->response();
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
