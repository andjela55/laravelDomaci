<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class svirka extends Model
{
   
    //use HasFactory;
 public $timestamps = false;

    public function svirka(){
        return $this->hasMany(svirka::class);
     }
}
