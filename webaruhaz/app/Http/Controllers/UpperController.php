<?php

namespace App\Http\Controllers;

use App\Models\Upper;
use Illuminate\Http\Request;

class UpperController extends Controller
{
    public function index(){
        $uppers = response()->json(Upper::all()); 
        return $uppers; 
    } 
 
    public function show($id){ 
        $uppers = response()->json(Upper::findOrFail($id)); 
        return $uppers; 
    } 
 
    public function store(Request $request){ 
        echo "e!";
        $uppers = new Upper(); 
        $uppers->name = $request->name; 
        $uppers->description = $request->description; 
        $uppers->save(); 
    } 
 
    public function update(Request $request, $id){ 
        $uppers = Upper::findOrFail($id); 
        $uppers->name = $request->name; 
        $uppers->description = $request->description; 
        $uppers->save(); 
    } 

    public function destroy(Request $request, $id){ 
        $uppers = Upper::findOrFail($id); 
        $uppers->delete(); 
    } 
}
