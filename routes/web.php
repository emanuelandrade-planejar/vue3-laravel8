<?php

use Illuminate\Support\Facades\Route;

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

$globalData = [
    "systems" => [
        ["name" => "Base", "description" => "Sitema Base"], 
        ["name" => "Frotas", "description" => "Sitema de Frotas"], 
        ["name" => "Almoxarifado", "description" => "Sitema de Almoxarifado"],
        ["name" => "Importação e Exportação", "description" => "Sitema de Importação e Exportação"], 
    ],
    "user" => [ "nome" => "José Silva", "idade" => 34 ]
];

Route::get('/', function () use ($globalData) {
    return view('welcome', [
        "props" => [
            "list" => [1,2,3,4,5,6]
        ],
        "global" => $globalData 
    ]);
})->name('Home');

Route::get('/sistemas', function () use ($globalData) {
    return view('welcome', [
        "props" => [
            "list" => [1,2,3,4,5,6]
        ],
        "global" => $globalData
    ]);
})->name('Systems');
