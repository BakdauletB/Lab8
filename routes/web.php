<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\UsersModel;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/user/add', function () {
    DB::table('users_info')->insert([
       'name'=>'Bakdaulet',
       'surname' => 'Batyrkhan',
       'email' => '190103440@stu.sdu.edu.kz',
       'photo' => 'C:\Users\asmir\Desktop\Baha\baha.jpg'
    ]);
});

// Task1 of Lab8

Route::get('user', [UserController::class, 'index']); //shows all users in the html plain, for more infos go to the UserController
Route::get('user/form', function(){
     return view('user.form'); // for displaying form
});

Route::post('user/form', [UserController::class, 'store'])->name('add-user'); // uploading file and other columns

//Task2 of Lab8

Route::get('email/sending', [MailController::class, 'send']);

