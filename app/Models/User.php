<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'balance',
        'role_id',
        'referral_user_id',
        'referral_code',
        'phone'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function referrals(){
        return $this->hasMany(User::class,'referral_user_id','id')->orderBy('id','DESC');
    }

    function withdrawals(){
        return $this->hasMany(Withdrawal::class,'user_id','id')->orderBy('id','DESC');
    }

    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }

    public function investments()
    {
        return $this->hasMany(Investments::class);
    }


}
