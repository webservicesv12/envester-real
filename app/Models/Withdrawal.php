<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;
    protected $table = "withdrawal";
    protected $guarded = [];

    function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    function payment_method()
    {
        return $this->hasOne(PaymentMethod::class,'id','payment_method_id');
    }
}
