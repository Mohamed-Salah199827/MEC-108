<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    // response()->json(['status' =>  'success'])
    function index() {
       $Students= Student::get();
        return response()->json(["status"=>"done","data"=>$Students]);  
    }

    function getUser(Request $request) {
        $Student= Student::find($request->user_id);
         return response()->json(["status"=>"done","data"=>$Student]);  
     }
}
