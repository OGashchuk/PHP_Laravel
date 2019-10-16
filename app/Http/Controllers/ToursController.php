<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\Country;
use App\Curort;
use App\Departuredate;
use App\Duration;
use Illuminate\Support\Facades\DB;
class ToursController extends Controller
{
    public function index()
    {
        $tours = DB::table('tours')
            ->join('curorts', 'tours.curort_id', '=', 'curorts.id_curort')
            ->join('countries', 'countries.id_country', '=', 'curorts.country_id')
            ->join('departuredates', 'tours.departure_date_id', '=', 'departuredates.id_departure_date')
            ->join('types', 'types.id_type', '=', 'curorts.type_id')
            ->join('durations', 'durations.id_duration', '=', 'tours.duration_id')
            ->select('tours.*', 'curorts.*', 'countries.*', 'departuredates.*','types.*', 'durations.*' )
            ->orderBy('tours.id_tour', 'asc')
            ->get();


       
        // $tours = DB::table('tours')
        //     ->join('countries', 'tours.country_id', '=', 'countries.country_id')
        //     ->orderBy('tours.id', 'asc')
        //     ->paginate(3);
        
    	return view('tours.index', ['tours'=>$tours]);
    }
    public function create()
    {
        $curorts = Curort::all();
        $durations = Duration::all();
        $departuredates = Departuredate::all();

    	return view('tours.create', ['curorts'=>$curorts, 'durations'=>$durations, 'departuredates'=>$departuredates ]);
    }
    public function store(Request $request)
    {
        //Tour::create($request->all());
        $this->validate($request, [
        	'title'=>'required',
        	'description'=>'required',
        	'cost'=>'required',
        	'curort_name'=>'required|not_in:0',
        	'image'=>'required',
        	'duration'=>'required',
        	'departuredate'=>'required'

        ]);
        $newTour = new Tour;
        $newTour->title = $request->title;
        $newTour->description =$request->description;
        $newTour->cost=$request->cost;
        //получаем id курорта от пользователя из выпадающего списка и сохраняем id в новый тур
        $curort = $request->curort_name;
        $id = DB::table('curorts')
                                ->select('id_curort', 'curort_name')
                                ->where('curort_name', $curort)
                                ->get();                               
        $newTour->curort_id = $id[0]->id_curort;
        //получаем id длительности от пользователя из выпадающего списка и сохраняем id в новый тур
        $duration = $request->duration;
        $id = DB::table('durations')
                                ->select('id_duration', 'number_of_days')
                                ->where('number_of_days', $duration)
                                ->get();                              
        $newTour->duration_id = $id[0]->id_duration;
        //получаем id даты отправки от пользователя из выпадающего списка и сохраняем id в новый тур
        $departuredate = $request->departuredate;
        $id = DB::table('departuredates')
                                ->select('id_departure_date', 'departure_date')
                                ->where('departure_date', $departuredate)
                                ->get();                               
        $newTour->departure_date_id = $id[0]->id_departure_date;

        $path = $request->file('image')->store('uploads', 'public');
        $newTour->image = $path;
        $newTour->save();

    	return redirect()->route('tours.index');
    }
    public function edit($id)
    {
    	//$myTour = Tour::find($id_tour);
        $myTour = DB::table('tours')
                      ->select('tours.*')
                      ->where('tours.id_tour', $id)
                      ->get(); 

       
        $curorts = DB::table('curorts')
                                ->select('id_curort', 'curort_name')
                                ->get();                               
        
        //получаем id длительности от пользователя из выпадающего списка и сохраняем id в новый тур
        $durations = DB::table('durations')
                                ->select('id_duration', 'number_of_days')
                                ->get();                              
        
        //получаем id даты отправки от пользователя из выпадающего списка и сохраняем id в новый тур
        $departuredates = DB::table('departuredates')
                                ->select('id_departure_date', 'departure_date')
                                ->get();                               
                      
     
    	return view('tours.edit', ['tour' => $myTour[0], 'curorts'=>$curorts, 'durations'=>$durations, 'departuredates'=>$departuredates]);
    }
    public function update(Request $request, $id_tour)
    {
    	// $myTour = Tour::find("$id"."_tour");
    	// $myTour->update($request->all());
        
        $curort = $request->curort_name;
        $id = DB::table('curorts')
                                ->select('id_curort', 'curort_name')
                                ->where('curort_name', $curort)
                                ->get();                                                      
        $curort_id = $id[0]->id_curort;

        //получаем id длительности от пользователя из выпадающего списка и сохраняем id в новый тур
        $duration = $request->duration;
        $id2 = DB::table('durations')
                                ->select('id_duration', 'number_of_days')
                                ->where('number_of_days', $duration)
                                ->get();                              
        $duration_id = $id2[0]->id_duration;
       
        //получаем id даты отправки от пользователя из выпадающего списка и сохраняем id в новый тур
        $departuredate = $request->departuredate;
        $id3 = DB::table('departuredates')
                                ->select('id_departure_date', 'departure_date')
                                ->where('departure_date', $departuredate)
                                ->get();                               
        $departure_date_id = $id3[0]->id_departure_date;
       
        $myTour = DB::table('tours')
            ->where('tours.id_tour', $id_tour)
            ->update(['title'=>$request->title,
                    'description'=>$request->description,
                    'cost' => $request->cost,
                    'curort_id' => $curort_id, 
                    'duration_id' => $duration_id,
                    'departure_date_id' => $departure_date_id
                    ]);
    	return redirect()->route('tours.index');
    }

    public function destroy($id)
    {
       // Tour::find($id)->delete();
        $myTour = DB::table('tours')
                      ->where('tours.id_tour', $id)
                      ->delete(); 

        return redirect()->route('tours.index');
    }


}
