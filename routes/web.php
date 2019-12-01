<?php

/*
  GET /schedules_tab                    {index}
  GET /schedules_tab/create             {create}
  GET /schedules_tab/{schedule}     {show}
  POST /schedules_tab                   {store}
  FET /schedules_tab/edit               {edit}
  PATCH /schedules_tab/{schedule}   {update}
  DELETE /schedules_tab/{schedule}  {destroy}
*/


Route::get('/schedules', 'ScheduleController@index');
Route::post('/schedules', 'ScheduleController@store');
Route::post('/schedules/{id}/edit', 'ScheduleController@edit');
Route::delete('/schedules/{id}', 'ScheduleController@destroy');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
