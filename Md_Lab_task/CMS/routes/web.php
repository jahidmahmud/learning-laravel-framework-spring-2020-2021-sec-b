<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ProductController;

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


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('auth/login', [LoginController::class, 'login'])->name('login.custom');

Route::group(['middleware' => ['auth']], function () {

    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/admin', [LoginController::class, 'superAdminDashboard'])->name('superadmin.dashboard');
        Route::get('/customer', [LoginController::class, 'customerDashboard'])->name('admin.dashboard');
        Route::get('/accountant', [LoginController::class, 'accountantDashboard'])->name('author.dashboard');
        Route::get('/salesman', [LoginController::class, 'salesmanDashboard'])->name('user.dashboard');
        Route::get('/businesspartner', [LoginController::class, 'businesspartnerDashboard'])->name('user.dashboard');
        Route::get('/vendor', [LoginController::class, 'vendorDashboard'])->name('user.dashboard');
    });
    Route::group(['prefix' => 'system/product_management'], function () {

        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('/addProduct', [ProductController::class, 'add'])->name('product.add');
        Route::post('/addProduct', [ProductController::class, 'addProduct'])->name('product.addProduct');
        Route::get('/existingProduct', [ProductController::class, 'existing'])->name('product.existing');
        Route::get('/upcomingProduct', [ProductController::class, 'upcoming'])->name('product.upcoming');
    });

    Route::group(['prefix' => 'system/sales'], function () {

        Route::get('/physical_store', [SalesController::class, 'physicalStore'])->name('Sales.physicalStore');

        Route::get('physical_store/salesLog', [SalesController::class, 'salesLog'])->name('Sales.physical.salesLog');
        Route::post('physical_store/salesLog', [SalesController::class, 'salesLogData'])->name('Sales.physical.salesLog');

        Route::get('/social_media_store', [SalesController::class, 'mediastore'])->name('Sales.mediastore');

        Route::get('/ecommerce_store', [SalesController::class, 'ecommercestore'])->name('Sales.ecommercestore');
        Route::get('/physical_store/sales_log', [SalesController::class, 'loggs'])->name('Sales.loggs');
        Route::get('/physical_store/sold_log', [SalesController::class, 'soldlog'])->name('Sales.sold.log');
        Route::get('/physical_store/pending_log', [SalesController::class, 'loggspending'])->name('Sales.pending.log');
        Route::get('/physical_store/pdfdownload', [SalesController::class, 'download'])->name('Sales.pdf.download');
        Route::get('/physical_store/uploadexcel', [SalesController::class, 'upload'])->name('Sales.excel.upload');
        Route::get('/physical_store/all', [SalesController::class, 'alltable'])->name('Sales.all.log');
    });
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
