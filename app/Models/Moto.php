<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    protected $table = 'tblMotos';
    protected $primarykey = 'motosId';
    public $timestamps = false;
}
