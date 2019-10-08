<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $primaryKey = 'area_id';
    protected $table = 'area';
    protected $fillable = [
        'area_id', 'area_name', 'area_lat', 'area_long',
    ];
}
