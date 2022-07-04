<?php
use ACME\Customer\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
Route::group([
        'prefix'        => 'admin/customer',
        'middleware'    => ['web', 'user']
    ], function () {

        Route::get('', 'ACME\Customer\Http\Controllers\CustomerController@index')->name('admin.customer.index');
        Route::get('/create', [ACME\Customer\Http\Controllers\CustomerController::class,'create'])->name('admin.customer.create');


});
