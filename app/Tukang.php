<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tukang extends Model
{
    protected $primaryKey = 'handyman_id';
    protected $table = 'handyman';
    protected $fillable = [
        'handyman_id', 'handyman_name', 'handyman_phone', 'handyman_price',
        'handyman_photo', 'handyman_address',
    ];
}
