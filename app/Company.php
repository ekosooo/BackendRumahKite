<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $primaryKey = 'company_id';
    protected $table = 'company';
    protected $fillable = [
        'company_id', 'company_name', 'company_email', 'company_address', 'company_phone',
    ];

}
