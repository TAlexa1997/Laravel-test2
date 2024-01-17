<?php

namespace App\Http\Controllers;

use App\Models\Additional;
use Illuminate\Http\Request;

class AdditionalController extends Controller
{
    public function index(){
        $additionals = response()->json(Additional::all()); 
        return $additionals; 
    } 
 
    public function show($id){ 
        $additionals = response()->json(Additional::findOrFail($id)); 
        return $additionals; 
    } 
 
    public function store(Request $request){ 
        echo "e!";
        $additionals = new Additional(); 
        $additionals->name = $request->name; 
        $additionals->description = $request->description; 
        $additionals->save(); 
    } 
 
    public function update(Request $request, $id){ 
        $additionals = Additional::findOrFail($id); 
        $additionals->name = $request->name; 
        $additionals->description = $request->description; 
        $additionals->save(); 
    } 

    public function destroy(Request $request, $id){ 
        $additionals = Additional::findOrFail($id); 
        $additionals->delete(); 
    } 

    
}
