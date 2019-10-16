<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    public function getPost($id)
    {
        $tours = DB::table('tours')
            ->join('curorts', 'tours.curort_id', '=', 'curorts.id_curort')
            ->join('countries', 'countries.id_country', '=', 'curorts.country_id')
            ->join('departuredates', 'tours.departure_date_id', '=', 'departuredates.id_departure_date')
            ->join('types', 'types.id_type', '=', 'curorts.type_id')
            ->join('durations', 'durations.id_duration', '=', 'tours.duration_id')
            ->select('tours.*', 'curorts.*', 'countries.*', 'departuredates.*','types.*', 'durations.*' )
            ->where('tours.id_tour', $id)
            ->get();

        $countries = DB::table('countries')
            ->orderBy('countries.id_country', 'asc')
            ->get();

        $types = DB::table('types')
            ->get();
        

        
     
    	return view('posts.show', ['tour' => $tours[0], 'countries'=>$countries, 'types'=>$types]);
    }
}