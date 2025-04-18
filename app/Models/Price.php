<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'price';

    protected $fillable = [
        'id',
        'brand_id',
        'measurement',
        'price',
        'created_at',
        'updated_at',
    ];

    public function brand()
    {
        return $this->belongsTo(brand::class);
    }
}
