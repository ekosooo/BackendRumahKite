<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class TransaksiJasa extends Model
{
    protected $primaryKey = 'service_transaction_id';
    protected $table = 'service_transaction';
    protected $fillable = [
        'service_transaction_id', 'user_id', 'handyman_id', 'service_description',
        'service_order', 'service_day', 'service_status', 'service_price',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
