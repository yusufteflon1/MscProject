<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class approvals extends Model
{
    use HasFactory;
    /**
     * Attributes to guard against mass-assignment.
     *
     * @var array
     */

    protected $primaryKey = "apid";
    protected $table = "approvals";

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // public function approvalPayments()
    // {
    //     return $this->hasMany(payment::class, 'apid', 'apid');
    // }
}
