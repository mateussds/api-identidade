<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Law extends Model
{
    public function documents(){
        return $this->hasMany(Document::class);
    }
}
