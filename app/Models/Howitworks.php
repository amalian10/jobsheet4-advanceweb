<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Howitworks extends Model
{
    use HasFactory;

    protected $table = "howitworkes";

    public static function howitworks(){
        return Howitworks::all();
    }
}
