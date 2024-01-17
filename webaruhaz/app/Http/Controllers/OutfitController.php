<?php

namespace App\Http\Controllers;

use App\Models\Outfit;
use Illuminate\Http\Request;

class OutfitController extends Controller
{
    public function index(){
        $outfits = response()->json(Outfit::all()); 
        return $outfits; 
    } 
 
    public function show($id){ 
        $outfits = response()->json(Outfit::findOrFail($id)); 
        return $outfits; 
    } 
 
    public function store(Request $request){ 
        echo "e!";
        $outfits = new Outfit(); 
        $outfits->name = $request->name; 
        $outfits->description = $request->description; 
        $outfits->save(); 
    } 
 
    public function update(Request $request, $id){ 
        $outfits = Outfit::findOrFail($id); 
        $outfits->name = $request->name; 
        $outfits->description = $request->description; 
        $outfits->save(); 
    } 

    public function destroy(Request $request, $id){ 
        $outfits = Outfit::findOrFail($id); 
        $outfits->delete(); 
    } 

}
