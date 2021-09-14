<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pevac extends Model
{
     //use HasFactory;
    public $timestamps = false;
    protected $guarded=[];

    public function pevac(){
        return $this->belongsTo(pevac::class);
    }
}
