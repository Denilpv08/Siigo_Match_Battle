<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    protected $table = 'motos';
    protected $primarykey = 'moto_id';
    public $timestamps = false;
}
