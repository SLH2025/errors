<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    protected $table = 'brands';

    protected $fillable = [
        'id',
        'name',
        'image',
        'created_at',
    ];
}
