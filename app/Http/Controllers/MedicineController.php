<?php

namespace App\Http\Controllers;

use App\Category;
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

        //join + sort
        $result=DB::table('medicines')
            ->join('categories','medicines.category_id','=','categories.id')
            ->orderBy('price', 'desc')
            ->get();

        //eloquen        
        $result=Medicine::where("price",">",20000)
            ->get();

        $result=Medicine::find(3);

        dd($result);
    }

    public function coba2(){

        //Query 1 table
            //Show All Drug Category Data    
                //DB Query Builder
                $result=DB::table('categories')
                    ->get();
                //Eloquen
                $result=Category::all();
            //Show All Medicines Names, Formulas, and Prices
                //DB Query Builder
                $result=DB::table('medicines')
                    ->select('generic_name', 'form', 'price')
                    ->get();
                //Eloquen
                $result=Medicine::select('generic_name', 'form', 'price')
                    ->get();

        //Query Inner Join 2 Tables
            //Show All Medicines Names, Formulas, and Category Names
                //DB Query Builder
                $result=DB::table('medicines')
                    ->join('categories','medicines.category_id','=','categories.id')
                    ->select('medicines.generic_name', 'medicines.form', 'categories.name')
                    ->get();
                //Eloquen
                $result=Medicine::select('medicines.generic_name', 'medicines.form', 'categories.name')
                    ->join('categories','medicines.category_id','=','categories.id')
                    ->get();

        //There is an Aggregation of Sum, Count with 2 Tables
            //Display of the Number Categories that have data on medicines
                //DB Query Builder
                $result=DB::table('medicines')
                    ->distinct("category_id")
                    ->count();
                //Eloquen
                $result=Medicine::distinct("category_id")
                    ->count();
            //Show the name category that doesnt have any medicines data
                //DB Query Builder
                $result=DB::table('medicines')                 
                    ->select('categories.name')
                    ->join('categories','medicines.category_id','=','categories.id')
                    ->whereNotIn('medicines.category_id', [1,2,3,5])
                    ->get();
                //Eloquen
                
            //Show the average price of each drug category, if there is no medicine then give 0
                //DB Query Builder

                //Eloquen

            //Show drug categories that have only 1 medicine product
                //DB Query Builder

                //Eloquen

            //show drug that have one form
                //DB Query Builder

                //Eloquen

            //display the category and name of the drug that has the highest price
                //DB Query Builder
                $result=DB::table('medicines')
                    ->join('categories','medicines.category_id','=','categories.id')
                    ->select('medicines.generic_name', 'categories.name')
                    ->where('medicines.price', '>', 30000)
                    ->get();
                //Eloquen
                

        dd($result);
    }
}
