<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // raw query
        // $result=DB::select(DB::raw("SELECT * FROM medicines"));

        // query builder
        // $result=DB::table("medicines")->get();

        // eloquent model
        $result=Medicine::all();

        // dd($result);

        // return view("medicine.index", compact('result'));
        return view("medicine.index", ["data"=>$result]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        // dd($medicine);
        $data=$medicine;
        return view("medicine.show", compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
    }

    public function coba1(){
        // echo "Test";
        
        //query builder filter 
        $result=DB::table('medicines')
            ->where("price",">",20000)
            ->get();

        $result=DB::table('medicines')
            ->where("generic_name","like",'%fen')
            ->get();
        
        //group by
        $result=DB::table('medicines')
            ->select("generic_name")
            ->groupBy("generic_name")
            ->get();

        //agregate  
        $result=DB::table('medicines')->count();

        $result=DB::table('medicines')->max('price');

        //filter + aggregate
        $result=DB::table('medicines')
            ->where("generic_name","like",'%fen')
            ->avg('price');
        
        //join
        $result=DB::table('medicines')
            ->join('categories','medicines.category_id','=','categories.id')
            ->get();


        dd($result);
    }
}
