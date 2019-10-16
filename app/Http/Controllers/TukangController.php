<?php

namespace App\Http\Controllers;

use App\Pivot_Handyman_Skill;
use App\Tukang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TukangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tukang = DB::table('handyman')
            ->orderBy('handyman_name', 'ASC')->paginate(5);

        return view('BackEnd.akun.tukang.index', compact('tukang'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

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
    public function store(Request $request, Tukang $tukang)
    {
        $tukang->create([
           'handyman_name'  => $request->handyman_name,
           'handyman_phone'  => $request->handyman_phone,
           'handyman_price'  => $request->handyman_price,
           'handyman_address'  => $request->handyman_address,
        ]);

        return redirect('/add/skill');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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

    public function add()
    {
        return view('BackEnd.akun.tukang.add');
    }

    public function viewskill()
    {
        $handyman_latest = DB::table('handyman')
            ->max('handyman_id');
        $skill = DB::table('skill')
            ->get();
        return view('BackEnd.akun.tukang.skill', compact('skill', 'handyman_latest'));
    }

    public function skillpost(Request $request, Pivot_Handyman_Skill $pivot_Handyman_Skill)
    {

        $data = $request->skill_id;
        foreach ($data as $value){
          $pivot_Handyman_Skill->create([
             'handyman_id' => $request->handyman_latest,
             'skill_id' => $value,
          ]);
        };

        return redirect('/tukang');
    }
}
