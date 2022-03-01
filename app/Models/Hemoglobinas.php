<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hemoglobinas extends Model
{
    use HasFactory;

    protected $table ="hemoglobinas";
    protected $fillable =['nombre','apellido','correo','fecha_nacimiento','sexo_id','nivel'];

    public function sexo(){
       return $this->belongsTo(Sexo::class,'sexo_id','id');
    }
}