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

Route::get('/', function () {
    return view('welcome', [
        "props" => [
            "list" => [1,2,3,4,5,6]
        ],
        "global" => [
            "systems" => ["Base", "Importação e Exportação", "Frotas", "Almoxarifado"],
            "user" => [ "nome" => "José Silva", "idade" => 34 ]
        ]
    ]);
});
