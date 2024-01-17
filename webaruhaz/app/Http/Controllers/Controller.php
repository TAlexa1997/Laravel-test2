<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index(){
        $users = response()->json(User::all()); 
        return $users; 
    } 
 
    public function show($id){ 
        $users = response()->json(User::findOrFail($id)); 
        return $users; 
    } 
 
    public function store(Request $request){ 
        echo "e!";
        $users = new User(); 
        $users->name = $request->name; 
        $users->email = $request->email; 
        $users->password = $request->password; 
        $users->VIP = $request->VIP; 
        $users->save(); 
    } 

    public function post(Request $request){ 
        echo "e!";
        $users = new User(); 
        $users->name = $request->name; 
        $users->email = $request->email; 
        $users->password = $request->password; 
        $users->VIP = $request->VIP; 
        $users->save(); 
    } 
 
    public function update(Request $request, $id){ 
        $users = User::findOrFail($id); 
        $users->name = $request->name; 
        $users->email = $request->email; 
        $users->password = $request->password; 
        $users->VIP = $request->VIP; 
        $users->save(); 
    } 

    public function destroy(Request $request, $id){ 
        $users = User::findOrFail($id); 
        $users->delete(); 
    } 

}
