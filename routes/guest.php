<?php
// user route
Route::prefix('user')->group(function () {
    Route::middleware(['auth','verified'])->group(function (){
        Route::resource('/dashboard', \App\Http\Controllers\guest\DashboardController::class);
        Route::resource('/deposits', \App\Http\Controllers\guest\DepositController::class);
        Route::resource('/withdraw', \App\Http\Controllers\guest\WithdrawController::class);
        Route::resource('/bank', \App\Http\Controllers\guest\BankWithdrawController::class);
        Route::resource('/referral', \App\Http\Controllers\guest\ReferralController::class);
        Route::resource('/investment', \App\Http\Controllers\guest\InvestmentController::class);
        Route::resource('/profile', \App\Http\Controllers\guest\ProfileController::class);
        Route::resource('/history', \App\Http\Controllers\guest\HistoryController::class);
        Route::resource('/withdraw-type', \App\Http\Controllers\guest\TypeController::class);
        Route::resource('/withdraw-history', \App\Http\Controllers\guest\WithdrawHistoryController::class);
        Route::resource('/change-password', \App\Http\Controllers\guest\PasswordController::class);
        Route::resource('/account-settings', \App\Http\Controllers\guest\SettingsController::class);

        Route::get('/logout', function () {
            auth()->logout();
            return redirect('login')->with('alert_success','You have successfully logged out');
        });
    });
});
