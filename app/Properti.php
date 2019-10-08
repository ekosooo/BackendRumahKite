<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properti extends Model
{
    protected $primaryKey = 'property_id';
    protected $table = 'property';
    protected $fillable = [
       'property_id', 'area_id', 'company_id',
        'cat_id', 'address', 'description', 'land_size',
        'lat', 'long', 'rent_price', 'cash_price', 'status',
        'type_certificate',
    ];

}
