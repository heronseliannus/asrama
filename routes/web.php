<?php

use Illuminate\Http\Request;

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
    return view('home');
});

Route::get('/tampilan', function()
{
  return view('layout/tampilan');
});

//user
Route::get('/edit', function() {
  return view('user/edit');
});
Route::get('/update', function() {
  return view('user/update');
});


//admin
Route::get('/menuadmin', function() {
  return view('layout/menuadmin');
});
Route::get('/updatedata', function() {
  return view('admin/updatedata');
});
Route::get('/updatedata', function() {
  return view('admin/updatedata');
});

Route::get('akun', function() {
  return view('akun');
});

Route::get('/pendaftaran', function() {
  return view('pendaftaran');
});

Route::get('/login', function(){
  return view('admin/login');
});

Route::get('/kelolaregistrasi', function()
{
  return view('admin/kelolaregistrasi');
});


Route::get('/kelolanilai', function()
{
  return view('admin/kelolanilai');
});

Route::get('/masterdata', function()
{
  return view('admin/masterdata');
});

Route::get('/laporan', function()
{
  return view('user/laporan');
});

//laravel telescope

Route::get('/tampilpelatihan', function()
{
  return view('user/tampilpelatihan');
});

Route::get('/nilai', function()
{
  return view('user/nilai');
});

// dassboard admin

Route::get ('/index', function (){
 return view('menu/index');
});
//testing saja
Route::get ('/form', function(){
  return  view('menu/form');
});
Route::get ('/account', function(){
  return view('user/account');
});

//user
Route::get('/users', 'Users\UserController@index');
Route::post('/users', 'Users\UserController@store');

Route::post('/testing', 'TestingController@store');

Route::get('/users/{id}/edit', 'UserController@edit');
Route::put('/users/{id}', 'UserController@update');

Route::get('/users/{$program}/show', 'UserController@get');
Route::put('/users/{$program}', 'UserController@show');

// laporan
Route::get('laporan/pdf', 'LaporanController@pdf');

Route::delete('/users{id}', 'UsersController@delete');

Route::get('/users/create', 'Users\UserController@create');
Route::store('/users', 'Users\UserController@store');




Route::get('/edit', 'TestingController@edit');

Route::delete('/users{nik}/delete', 'Users\UserController@delete');
Route::put('/users{nik}', 'Users\UserController@update');

// admin
Route::get('/admin', 'Admins\KelolanilaiController@index');
Route::post('/admin', 'Admins\KelolanilaiController@store');