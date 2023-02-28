<?php

use Illuminate\Support\Facades\Route;

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
    return view ('welcome');
});

Route::get('/person', function () {
    return view ('person', [
        'name' => 'Jojilyn P. Romero',
        'age' => 22,
        'address' => 'Nabua, Camarines Sur',
        'color' => 'blue',
        'siblings' => [
            [
                'name' => 'Jonalyn',
                'age' => 28
            ],
            [
                'name' => 'Jaycob',
                'age' => 6
            ],
            [
                'name' => 'Jake',
                'age' => 25
            ],
            [
                'name' => 'Joriz',
                'age' => 17
            ],
        ]
    ]);
});