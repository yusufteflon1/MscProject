<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'uid';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = [];

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

    public function approvals()
    {
        return $this->hasMany(approvals::class, 'uid', 'uid');
    }

    public function payments()
    {
        return $this->hasMany(payment::class, 'uid', 'uid');
    }
    public function guarantors()
    {
        return $this->hasMany(guarantor::class, 'uid', 'uid');
    }

    public function business()
    {
        return $this->hasMany(business::class, 'uid', 'uid');
    }
}
