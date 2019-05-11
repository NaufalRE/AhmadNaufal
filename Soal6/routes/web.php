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

Route::get('/', 'UserSkillController@index');
Route::post('/post', 'UserSkillController@DataStore');
Route::post('/skill/{skills}', 'UserSkillController@UpdateSkill');
Route::post('/user/{users}', 'UserSkillController@UpdateSkill');