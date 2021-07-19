<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function city(){
        return $this->belonTo(City::Class);
    }

    public function law(){
        return $this->belongTo(Law::Class);
    }

    public function people(){
        return $this->belongTo(People::Class);
    }
}
