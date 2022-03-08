<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $first_name;
    public $title;

    public function approvals()
    {
        return $this->hasMany('App\Models\approvals');
    }
}
