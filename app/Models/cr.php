<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cr extends Model
{
    use HasFactory;

    protected $table = 'study_orders';
    protected $guarded = ['updated_at','deleted_at'];
    public $timestamps = false;
}
