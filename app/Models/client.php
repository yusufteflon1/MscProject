<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'password',
        'telephone',
        'email',
        'education',
        'gender',
        'age_range',
        'disability',
        'state_of_origin',
        'client_id',
        'address',
        'house_condition',
        'lga',
        'identification',
        'id_number',
        'id_issue_date',
        'id_expiry',
        'qualification',
        'education',
    ];


    public function approvals()
    {
        return $this->hasMany('App\Models\approvals');
    }
}
