<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiculoDatos extends Model
{
    protected $table = 'tblVehiculosDatos';
    protected $primarykey = 'vehiculoDatoId';
    protected $fillable = ['nombre', 'foto'];
    public $timestamps = false;
}
