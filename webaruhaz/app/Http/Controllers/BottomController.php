<?php

namespace App\Http\Controllers;

use App\Models\Bottom;
use Illuminate\Http\Request;

class BottomController extends Controller
{
    public function index(){
        $bottoms = response()->json(Bottom::all()); 
        return $bottoms; 
    } 
 
    public function show($id){ 
        $bottoms = response()->json(Bottom::findOrFail($id)); 
        return $bottoms; 
    } 
 
    public function store(Request $request){ 
        echo "e!";
        $bottoms = new Bottom(); 
        $bottoms->name = $request->name; 
        $bottoms->description = $request->description; 
        $bottoms->save(); 
    } 
 
    public function update(Request $request, $id){ 
        $bottoms = Bottom::findOrFail($id); 
        $bottoms->name = $request->name; 
        $bottoms->description = $request->description; 
        $bottoms->save(); 
    } 

    public function destroy(Request $request, $id){ 
        $bottoms = Bottom::findOrFail($id); 
        $bottoms->delete(); 
    } 
}
