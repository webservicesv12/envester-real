<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investments extends Model
{
    use HasFactory;
    protected $table = "investments";
    protected $guarded = [];

    function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
    function package()
    {
        return $this->hasOne(Packages::class,'id', 'package_id');
    }


}
