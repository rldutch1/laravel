<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //3:25
		public function index()
		{
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
}
