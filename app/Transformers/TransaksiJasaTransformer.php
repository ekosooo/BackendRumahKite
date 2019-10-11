<?php

namespace App\Transformers;

use App\TransaksiJasa;
use League\Fractal\TransformerAbstract;

class TransaksiJasaTransformer extends TransformerAbstract
{
    public function transform(TransaksiJasa $transaksiJasa)
    {
        return [
            'service_transaction_id' => $transaksiJasa->service_transaction_id,
            'user_id' => $transaksiJasa->user_id,
            'handyman_id' => $transaksiJasa->handyman_id,
            'service_description' => $transaksiJasa->service_description,
            'service_order' => $transaksiJasa->service_order,
            'service_day' => $transaksiJasa->service_day,
            'service_status' => $transaksiJasa->service_status,
            'service_price' => $transaksiJasa->service_price,
        ];
    }
}
