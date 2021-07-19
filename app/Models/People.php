<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    public function father(){
        return $this->belongTo(Father::Class);
    }

    public function mother(){
        return $this->belongTo(Mother::Class);
    }

    public function documents(){
        return $this->hasMany(Document::Class);
    }
}
