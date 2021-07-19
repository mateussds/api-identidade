<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function documents(){
        return $this->hasMany(Document::Class);
    }

    public function state(){
        return $this->belongsTo(State::class);      
    }
}



   

