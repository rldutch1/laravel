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
		    return view('welcome');
});

Route::get('users', ['uses' => 'UsersController@index']);

/*
Route::get('users', function () {
		$users = [
		'0' => [
			'first_name' => 'Robert',
			'last_name' => 'Holland',
			'location' => 'USA'
		],
		'1' => [
			'firstname' => 'Leah',
			'lastname' => 'Holland',
			'location' => 'USA'
		],
		'2' => [
			'firstname' => 'Jason',
			'lastname' => 'Holland',
			'location' => 'USA'
		],
		'3' => [
			'firstname' => 'Keira',
			'lastname' => 'Holland',
			'location' => 'USA'
		]
	];
	return $users;
}
);
*/