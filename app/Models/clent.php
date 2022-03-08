<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clent extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function approvals()
    {
        return $this->hasMany('App\Models\approvals');
    }
}
