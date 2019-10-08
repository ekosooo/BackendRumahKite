<?php

namespace App\Http\Controllers;

use App\Image;
use App\Properti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TanahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanah = DB::table('property')
            ->join('company', 'property.company_id', '=', 'company.company_id')
            ->join('category', 'property.cat_id', '=','category.cat_id')
            ->where('cat_name', '=', 'Tanah')
            ->get();

        return view('BackEnd.properti.tanah.index', compact('tanah'))
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
    public function store(Request $request, Properti $properti)
    {
        $properti->create([
           'area_id'     => $request->area,
           'company_id'  => $request->company,
           'cat_id'      => $request->cat,
           'address'     => $request->address,
           'description' => $request->description,
           'land_size'   => $request->land_size,
           'lat'         => $request->lat,
           'long'        => $request->long,
           'rent_price'    => $request->rent_price,
           'cash_price'    => $request->cash_price,
           'type_certificate'   => $request->type_certificate,
           'status'             => $request->status
        ]);

       return redirect('/add/gambar');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = DB::table('company')
            ->get();
        $area = DB::table('area')
            ->get();
        $cat = DB::table('category')
            ->get();

        $tanah = DB::table('property')
            ->join('company', 'property.company_id', '=', 'company.company_id')
            ->join('area', 'property.area_id', '=', 'area.area_id')
            ->join('category', 'property.cat_id', '=', 'category.cat_id')
            ->where('property_id', '=', $id)
            ->get();

        return view('BackEnd.properti.tanah.edit', compact('tanah', 'company', 'area', 'cat'));
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
        $company = DB::table('company')
            ->get();
        $area = DB::table('area')
            ->get();
        $cat = DB::table('category')
            ->get();
        return view('BackEnd.properti.tanah.add', compact('company', 'area', 'cat'));
    }

    public function gambar()
    {

        return view('BackEnd.properti.tanah.gambar');
    }

    public function addgambar(Request $request, Image $image)
    {
        $id = DB::table('property')
          ->max('property_id');

       if ($request->hasFile('gambar')){
           $img = $request->file('gambar');
           $name = time().'.'.$img->getClientOriginalExtension();
           $destination = public_path('/images/tanah');
           $img->move($destination, $name);
       };

        $image->create([
            'property_id' => $id,
            'image_name'  => $name,
        ]);

        return redirect('/tanah');

    }

}
