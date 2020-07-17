<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $table = 'bid';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'phone',
        'text'
    ];
}
