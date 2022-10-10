<?php

use App\Models\Tokobuku;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home', [
//         "tokobukus" => [
//             [
//                 'id' => '1',
//                 'nama' => 'Sang Pemimpi',
//                 'jenis' => 'fiksi',
//                 'harga' => '30000',
//             ],
//             [
//                 'id' => '2',
//                 'nama' => 'Laskar Pelangi',
//                 'jenis' => 'fiksi',
//                 'harga' => '115000',
//             ],
//             [
//                 'id' => '3',
//                 'nama' => 'Perahu Kertas',
//                 'jenis' => 'fiksi',
//                 'harga' => '40000',
//             ],
//         ]
//     ]);
// });


Route::get('/', function () {
        return view('home',[
            "tokobukus" => Tokobuku::all()
        ]);
    })->name('home');
    