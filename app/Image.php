<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $primaryKey = 'image_id';
    protected $table = 'image';
    protected $fillable = [
        'image_id', 'property_id', 'image_name', 'description_image',
    ];
}
