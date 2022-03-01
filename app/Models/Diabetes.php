<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diabetes extends Model
{
    use HasFactory;

    protected $table ="diabetes";
    protected $fillable =['nombre','apellido','cedula','eps','neurovegetativos','trastornos','deshidratación','sepsis','patologias','nivel'];

    public function sexo(){
       return $this->belongsTo(Sexo::class,'sexo_id','id');
    }
}