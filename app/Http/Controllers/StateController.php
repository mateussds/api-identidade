<?php

use App\Models\State;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index(){
        return State::all();
    }
}
