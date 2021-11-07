<?php

use App\Http\Controllers\AddressesController;
use App\Http\Controllers\EthereumController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TransactionsController;
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

Route::get('/', [PagesController::class, 'index'])->name('home');

Route::get('/getAddressInformation/{address}', [AddressesController::class, 'getAddressInformation']);
Route::get('/getTransactions', [TransactionsController::class, 'getTransactions']);

Route::post('/addressInformationHtml', [PagesController::class, 'addressInformationHtml']);
Route::post('/transactionsTableHtml', [PagesController::class, 'transactionsTableHtml']);