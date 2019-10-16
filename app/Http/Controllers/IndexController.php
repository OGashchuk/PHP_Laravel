<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    public function index()
    {
        $countries = DB::table('countries')
            ->orderBy('countries.id_country', 'asc')
            ->get();

        $types = DB::table('types')
            ->get();

        $tours = DB::table('tours')
            ->join('curorts', 'tours.curort_id', '=', 'curorts.id_curort')
            ->join('countries', 'countries.id_country', '=', 'curorts.country_id')
            ->join('departuredates', 'tours.departure_date_id', '=', 'departuredates.id_departure_date')
            ->join('types', 'types.id_type', '=', 'curorts.type_id')
            ->join('durations', 'durations.id_duration', '=', 'tours.duration_id')
            ->select('tours.*', 'curorts.*', 'countries.*', 'departuredates.*','types.*', 'durations.*' )
            ->paginate(3);
    
    	return view('index', ['tours'=>$tours, 'countries'=>$countries, 'types'=>$types]);
    }

    public function search(Request $request)
    {
        $countries = DB::table('countries')
            ->orderBy('countries.id_country', 'asc')
            ->get();

        $types = DB::table('types')
            ->get();

        $cost = $request->cost; 
        $country = $request->country_name;
        $type = $request->type_name;
        $tours = DB::table('tours')
            ->join('curorts', 'tours.curort_id', '=', 'curorts.id_curort')
            ->join('countries', 'countries.id_country', '=', 'curorts.country_id')
            ->join('departuredates', 'tours.departure_date_id', '=', 'departuredates.id_departure_date')
            ->join('types', 'types.id_type', '=', 'curorts.type_id')
            ->join('durations', 'durations.id_duration', '=', 'tours.duration_id')
            ->select('tours.*', 'curorts.*', 'countries.*', 'departuredates.*','types.*', 'durations.*' )
            ->where([['tours.cost', '<', $cost],
                    ['countries.name_country', '=', $country],
                    ['types.type_name', '=', $type],
              ])
            ->orderBy('tours.id_tour', 'asc')
            ->paginate(3);

        return view('search.show', ['tours'=>$tours, 'countries'=>$countries, 'types'=>$types]);
    }  
}