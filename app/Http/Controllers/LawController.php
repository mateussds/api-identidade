<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Law;

class LawController extends Controller
{
    public function index(){
        return Law::all();
    }
    
    public function create(Request $request){
        $law = new Law;
        $law->law_number = $request->law_number;
        $law->law_date = $request->law_date;
        $law->save(); 
    }

}
