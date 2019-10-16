<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $primaryKey = 'skill_id';
    protected $table = 'skill';
    protected $fillable = [
        'skill_id', 'skill_name'
    ];
}
