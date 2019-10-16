<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\DB;
class OrdersController extends Controller
{
    public function index()
    {}

    public function store(Request $request)
    {
        $tour = $request->tour;
        $id = DB::table('tours')
                                ->select('id_tour')
                                ->where('title', $tour)
                                ->get();                               
        

        $newOrder = new Order;
        $newOrder->first_name = $request->first_name;
        $newOrder->last_name =$request->last_name;
       	$newOrder->middle_name =$request->middle_name;
       	$newOrder->phone =$request->phone;
       	$newOrder->email =$request->email;
       	$newOrder->tour_id = $id[0]->id_tour;
       	$newOrder->number_of_persons =$request->number_of_persons;       	
        $newOrder->save();
        

    	 return redirect()->route('index');
    }

}