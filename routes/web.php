<?php

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
    return view("home");
});
Route::get('draggable', "WFDController@draggable")->name('draggable');
Route::get('droppable', "WFDController@droppable")->name('droppable');
Route::get('resizable', "WFDController@resizable")->name('resizable');
Route::get('selectable', "WFDController@selectable")->name('selectable');
Route::get('sortable', "WFDController@sortable")->name('sortable');
