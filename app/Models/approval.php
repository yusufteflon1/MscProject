<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Facade;

class approval extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function staff_id()
    {
        return $this->belongsTo(Staff::class);
    }
    public function facility_id()
    {
        return $this->belongsTo(Facade::class);
    }
}
