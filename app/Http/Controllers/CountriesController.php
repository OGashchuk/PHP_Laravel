<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use Illuminate\Support\Facades\DB;
class CountriesController extends Controller
{
    public function index()
    {
        $countries = Country::all();
    	return view('countries.index', ['countries'=>$countries]);
    }
    public function create()
    {
    	return view('countries.create');
    }
    public function store(Request $request)
    {
        $newCountry = new Country;
        $newCountry->name_country = $request->name_country;
        $newCountry->save();
    	return redirect()->route('countries.index');
    }
    public function edit($id)
    {
        $myCountry = DB::table('countries')
            ->select('countries.*')
            ->where('countries.id_country', $id)
            ->get(); 
    	
    	return view('countries.edit', ['country' => $myCountry[0]]);
    }
    public function update(Request $request, $id)
    {
    	

    	$myCountry = DB::table('countries')
            ->where('countries.id_country', $id)
            ->update(['name_country'=>$request->name_country]);

    	return redirect()->route('countries.index');
    	
    }
     public function destroy($id)
    {
       
       $myCountry = DB::table('countries')
            ->where('countries.id_country', $id)
            ->delete(); 

        return redirect()->route('countries.index');
    }


}
