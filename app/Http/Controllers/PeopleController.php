<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function create(Request $request){
        $people = new People;
        $people->firstname = $request->firstname;
        $people->family_name = $request->family_name;
        $people->last_name = $request->last_name;
        $people->cpf = $request->cpf;
        $people->birthdate = $request->birthdate;
        $people->father_id = $request->father_id;
        $people->mother_id = $request->mother_id;
        $people->city_id =$request->city_id;   
        $people->save();
    }

    public function show($cpf){
        return People::where('cpf', $cpf)->firstOrFail();
    }
    
    public function update(Request $request, $cpf){
        $People = People::where('cpf',$cpf)->firstOrFail();

        if (!is_null($people->father_id) && is_null($request->father_id)) {}  
        if (!is_null($people->father_id) && !is_null($request->father_id)) {$people->father_id = $request->father_id;}
        if(is_null($people->father_id) && !is_null($request->father_id)){$people->father_id = $request->father_id;}
        if (!is_null($request->family_name)){$people->family_name = $request->family_name;}

        $people->save();

    }
}
