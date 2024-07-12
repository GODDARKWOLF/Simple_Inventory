<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;

Route::get('/', function () {
    return view('home');
})->name('Home'); //route to home page

//route's to insert information into the database
Route::get('/create',[CrudController::class,'index'])->name('list_display');
Route::post('/create',[CrudController::class,'store'])->name('list_create');

//route to display the information in the database inside a table
Route::get('/',[CrudController::class,'display_table'])->name('display');

//route to delete data from the table/database
Route::delete('/{id}',[CrudController::class,'delete_data'])->name('delete_item');

//route to edit data within the table/database
Route::get('/edit/{id}',[CrudController::class, 'edit_display'])->name('edit_page');
Route::put('/edit/{id}',[CrudController::class,'edit_data'])->name('edit_item');
