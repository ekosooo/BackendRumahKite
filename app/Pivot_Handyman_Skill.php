<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pivot_Handyman_Skill extends Model
{
    protected $table = 'pivot_handyman_skill';
    protected $fillable = [
        'pivot_handyman_id', 'pivot_skill_id',
    ];
}
