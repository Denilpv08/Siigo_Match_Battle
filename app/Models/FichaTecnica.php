<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaTecnica extends Model
{   
    protected $table = 'tblFichasTenicas';
    protected $primarykey = 'fichaTecnicaId';
    protected $fillable = ['cilindraje', 'refrigeracion', 'potencia', 'sistemaAlimentacion', 
    'torque', 'velocidad'];
    public $timestamps = false;

}
