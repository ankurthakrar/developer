<?php

Route::get('/', 'Developer\Calculator\CalculatorController@index');

Route::get('add/{a}/{b}', 'Developer\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Developer\Calculator\CalculatorController@subtract');
Route::get('multiply/{a}/{b}', 'Developer\Calculator\CalculatorController@multiply');
Route::get('divide/{a}/{b}', 'Developer\Calculator\CalculatorController@divide');