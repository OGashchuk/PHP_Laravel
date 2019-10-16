<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curort;
use App\Type;
use App\Country;
use Illuminate\Support\Facades\DB;
class CurortsController extends Controller
{
    public function index()
    {
        $curorts = Curort::all();
       $curorts = DB::table('curorts')
            ->join('countries', 'countries.id_country', '=', 'curorts.country_id')
            ->join('types', 'types.id_type', '=', 'curorts.type_id')
            ->select('curorts.*', 'countries.*', 'types.*')
            ->get();

      return view('curorts.index', ['curorts'=>$curorts]);
    }
    public function create()
    {
        $countries = Country::all();
        $types = Type::all();
        
      return view('curorts.create', ['countries'=>$countries, 'types'=>$types]);
    }
    public function store(Request $request)
    {
        $newCurort = new Curort;
        $newCurort->curort_name = $request->curort_name;

        //получаем id страны от пользователя из выпадающего списка и сохраняем id в новый курорт
        $country = $request->name_country;
        $id = DB::table('countries')
            ->select('id_country', 'name_country')
            ->where('name_country', $country)
            ->get();                               
        $newCurort->country_id = $id[0]->id_country;

        $type = $request->type_name;
        $id = DB::table('types')
            ->select('id_type', 'type_name')
            ->where('type_name', $type)
            ->get();                               
        $newCurort->type_id = $id[0]->id_type;


        $newCurort->save();
      return redirect()->route('curorts.index');
    }
    public function edit($id)
    {
      $myCurort = DB::table('curorts')
                      ->select('curorts.*')
                      ->where('curorts.id_curort', $id)
                      ->get(); 

      $countries = DB::table('countries')
          ->select('id_country', 'name_country')
          ->get();     

      $types = DB::table('types')
          ->select('id_type', 'type_name')
          ->get(); 

      return view('curorts.edit', ['curort' => $myCurort[0], 'countries'=>$countries, 'types'=>$types]);
    }
    public function update(Request $request, $id)
    {
        $country = $request->name_country;
        //dd($country);
        $id1 = DB::table('countries')
                                ->select('id_country', 'name_country')
                                ->where('name_country', $country)
                                ->get();                                                      
        $country_id = $id1[0]->id_country;

        //получаем id длительности от пользователя из выпадающего списка и сохраняем id в новый тур
        $type = $request->type_name;
        $id2 = DB::table('types')
                                ->select('id_type', 'type_name')
                                ->where('type_name', $type)
                                ->get();                              
        $type_id = $id2[0]->id_type;

        $myCurort = DB::table('curorts')
            ->where('curorts.id_curort', $id)
            ->update(['curort_name'=>$request->curort_name,
                    'type_id' => $type_id, 
                    'country_id' => $country_id
                    ]);


      return redirect()->route('curorts.index');
    }
     public function destroy($id)
    {
        
        $myCurort = DB::table('curorts')
                      ->where('curorts.id_curort', $id)
                      ->delete(); 

        return redirect()->route('curorts.index');
    }
}
