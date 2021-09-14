<?php
namespace App\Http\Controllers;
use App\Models\pevac;
use App\Models\svirka;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PevacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $result=pevac::all();
        return $result;
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
    public function store(Request $request)
    {
           $pevac=new pevac();
       $pevac->ime=$request->ime;
        $pevac->prezime=$request->prezime;
        $pevac->vrsta_muzike=$request->vrsta_muzike;
        $pevac->prateci_vokali=$request->prateci_vokali;
        $pevac->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result=DB::table('pevacs')
        ->join('svirkas', function ($join) use($id){
            $join->on('pevacs.id', '=', 'svirkas.pevac_id')
                 ->where('pevacs.id', '=', $id);
        })
        ->get();

        return $result;
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
}
