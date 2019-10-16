<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departuredate;
use Illuminate\Support\Facades\DB;
class DeparturedatesController extends Controller
{
    public function index()
    {
        $departuredates = Departuredate::all();
    	return view('departuredates.index', ['departuredates'=>$departuredates]);
    }
    public function create()
    {
    	return view('departuredates.create');
    }
    public function store(Request $request)
    {
        $newDeparturedates = new Departuredate;
        $newDeparturedates->departure_date = $request->departure_date;
        $newDeparturedates->save();
    	return redirect()->route('departuredates.index');
    }
    public function edit($id)
    {
    	$newDeparturedate = Departuredate::find($id);
        
    	return view('departuredates.edit', ['departuredate' => $newDeparturedate]);
    }
    public function update(Request $request, $id)
    {
    	$newDeparturedate = Departuredate::find($id);
    	$newDeparturedate->update($request->all());
    	return redirect()->route('departuredates.index');
    	
    }
    
    public function destroy($id)
    {
       
        Departuredate::find($id)->delete();

        return redirect()->route('departuredates.index');
    }

}
