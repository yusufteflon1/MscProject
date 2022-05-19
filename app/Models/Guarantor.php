<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guarantor extends Model
{
    protected $primaryKey = "gid";
    protected $table = "guarantors";


    public function guarantors()
    {
        return $this->belongsTo('App\Models\User');
    }
}
