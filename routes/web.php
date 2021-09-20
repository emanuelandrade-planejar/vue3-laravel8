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

$tableColumns = [
    [ "label" => 'Cabeçalho 1', "key" => 'cabecalho-1' ],
    [ "label" => 'Cabeçalho 2', "key" => 'cabecalho-2' ],
    [ "label" => 'Cabeçalho 3', "key" => 'cabecalho-3' ],
];

$tableData = [
    [ "cabecalho-1" => "Corpo 1-1", "cabecalho-2" => "Corpo 2-1", "cabecalho-3" => "Corpo 3-1" ],
    [ "cabecalho-1" => "Corpo 1-2", "cabecalho-2" => "Corpo 2-2", "cabecalho-3" => "Corpo 3-2" ],
    [ "cabecalho-1" => "Corpo 1-3", "cabecalho-2" => "Corpo 2-3", "cabecalho-3" => "Corpo 3-3" ],
    [ "cabecalho-1" => "Corpo 1-4", "cabecalho-2" => "Corpo 2-4", "cabecalho-3" => "Corpo 3-4" ],
    [ "cabecalho-1" => "Corpo 1-5", "cabecalho-2" => "Corpo 2-5", "cabecalho-3" => "Corpo 3-5" ],
    [ "cabecalho-1" => "Corpo 1-6", "cabecalho-2" => "Corpo 2-6", "cabecalho-3" => "Corpo 3-6" ],
    [ "cabecalho-1" => "Corpo 1-7", "cabecalho-2" => "Corpo 2-7", "cabecalho-3" => "Corpo 3-7" ],
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

Route::get('/abas', function () use ($globalData, $tableData, $tableColumns) {
    return view('welcome', [
        "props" => [
            "tableData" => $tableData,
            "tableColumns" => $tableColumns
        ],
        "global" => $globalData
    ]);
})->name('Tabs');

Route::get('/crud', function () use ($globalData, $tableData, $tableColumns) {
    return view('welcome', [
        "props" => [
            "tableData" => $tableData,
            "tableColumns" => $tableColumns
        ],
        "global" => $globalData
    ]);
})->name('Crud');

Route::get('/criar-conta', function () use ($globalData, $tableData, $tableColumns) {
    return view('welcome', [
        "props" => [],
        "global" => $globalData
    ]);
})->name('Signup');
