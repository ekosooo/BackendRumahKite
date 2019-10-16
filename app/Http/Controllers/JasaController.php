<?php

namespace App\Http\Controllers;

use App\Pivot_Handyman_Skill;
use App\TransaksiJasa;
use App\Transformers\TransaksiJasaTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesanan = DB::table('service_transaction')
            ->join('user', 'service_transaction.user_id', '=', 'user.user_id')
            ->orderBy('service_status', 'ASC')->paginate(5);


        return view('BackEnd.TransaksiJasa.index', compact('pesanan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, TransaksiJasa $transaksiJasa)
    {
        $transaksiJasa = $transaksiJasa->create([
            'user_id'               => $request->user_id,
            'handyman_id'           => $request->handyman_id,
            'service_description'   => $request->service_description,
            'service_order'         => $request->service_order,
            'service_day'           => $request->service_day,
            'service_status'        => $request->service_status,
            'service_price'         => $request->service_price
        ]);

        $response = fractal()
            ->item($transaksiJasa)
            ->transformWith(new TransaksiJasaTransformer)
            ->toArray();

        return response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail transaksi
        $detail = DB::table('service_transaction')
            ->join('user', 'service_transaction.user_id', '=', 'user.user_id')
            ->join('skill', 'service_transaction.service_code', '=', 'skill.skill_id')
//            ->join('handyman', 'service_transaction.handyman_id', '=', 'handyman.handyman_id')
            ->where('service_transaction_id', '=', $id)
            ->select('service_transaction_id', 'service_status', 'skill_name', 'service_price',
                'service_description', 'user_name', 'user_phone', 'service_order', 'service_day', 'service_address',
                'service_lat', 'service_long')
            ->get();

        $detailtukang = DB::table('service_transaction')
            ->join('handyman', 'service_transaction.handyman_id', '=', 'handyman.handyman_id')
            ->where('service_transaction_id', '=', $id)
            ->select('handyman_name', 'handyman_price', 'handyman_phone')
            ->get();

        //mendapatkan id service code
        $service_code = TransaksiJasa::find($id)->service_code;

        //mengambil koordinat tukang unuk marker
        $tukang = DB::table('pivot_handyman_skill')
            ->join('skill', 'pivot_handyman_skill.pivot_skill_id', '=', 'skill.skill_id')
            ->join('handyman', 'pivot_handyman_skill.pivot_handyman_id', '=', 'handyman.handyman_id')
            ->select('handyman_id', 'handyman_name', 'handyman_phone', 'handyman_lat', 'handyman_long')
            ->where('pivot_skill_id', '=', $service_code)
            ->get();

        return view('BackEnd.TransaksiJasa.detail', compact('detail', 'detailtukang', 'tukang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function verifikasi(Request $request)
    {
        $tukang = TransaksiJasa::find($request->service_transaction_id);

        $tukang->update([
            'handyman_id' => $request->handyman_id,
        ]);

        return redirect('/jasa');
    }

    public function statustukang(Request $request)
    {
        $status_tukang = TransaksiJasa::find($request->service_transaction_id);

        $status_tukang->update([
            'service_status' => $request->status,
        ]);

        return redirect('/jasa');
    }
}
