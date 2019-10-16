<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use Illuminate\Support\Facades\DB;
class TypesController extends Controller
{
    public function index()
    {
        $types = Type::all();
    	return view('types.index', ['types'=>$types]);
    }
    public function create()
    {
    	return view('types.create');
    }
    public function store(Request $request)
    {
        $newType = new Type;
        $newType->type_name = $request->type_name;
        $newType->save();
    	return redirect()->route('types.index');
    }
    public function edit($id)
    {
    	$newType = Type::find($id);
    	return view('types.edit', ['type' => $newType]);
    }
    public function update(Request $request, $id)
    {
    	$newType = Type::find($id);
    	$newType->update($request->all());
    	return redirect()->route('types.index');
    	
    }
     public function destroy($id)
    {
       
        Type::find($id)->delete();

        return redirect()->route('types.index');
    }



}
