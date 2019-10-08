<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $primaryKey = 'cat_id';
    protected $table = 'category';
    protected $fillable = [
        'cat_id', 'cat_name',
    ];
}
