<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function create(Request $request){
        $people = new People;
        $people->name = $request->name;
        $people->cpf = $request->cpf;
        $people->birthdate = $request->birthdate;
        $people->father_id = $request->father_id;
        $people->mother_id = $request->mother_id;
        $people->city_id =$request->city_id;   
    }

    public function show(){

    }
    
    public function update(){

    }
}
