<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $primaryKey = "bid";
    protected $table = "business";


    public function business()
    {
        return $this->belongsTo('App\Models\User');
    }
}
