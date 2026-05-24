<?php
Route::prefix('panel')->group(function () {
    Route::resource('/login', \App\Http\Controllers\backend\AuthenticationController::class,['index']);
    Route::middleware(['IsAdmin','auth','verified'])->group(function (){
        Route::resource('/dashboard', \App\Http\Controllers\backend\DashboardController::class);

        Route::resource('/roles', \App\Http\Controllers\backend\RolesController::class);
        Route::resource('/clients', \App\Http\Controllers\backend\ClientsController::class);
        Route::resource('/administrative', \App\Http\Controllers\backend\AdminController::class);
        Route::resource('/packages', \App\Http\Controllers\backend\PackagesController::class);

        Route::resource('/payment-method', \App\Http\Controllers\backend\PaymentMethodController::class);
        Route::resource('/custom-message', \App\Http\Controllers\backend\CustomMessageController::class);
        Route::resource('/investments', \App\Http\Controllers\backend\InvestmentsController::class);
        Route::resource('/deposit', \App\Http\Controllers\backend\DepositController::class);
        Route::resource('/withdrawals', \App\Http\Controllers\backend\WithdrawalController::class);

        Route::resource('/settings', \App\Http\Controllers\backend\SettingsController::class);
        Route::get('/logout', function () {
            auth()->logout();;
            return redirect(url('panel/login'))->with('alert_success','You have successfully logged out');
        });
    });
});
