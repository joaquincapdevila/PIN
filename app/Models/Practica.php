<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Practica extends Model
{
    use SoftDeletes;
    protected $table = 'productos';
    protected $primaryKey =  'id';
    protected $fillabel = ['indec_id', 'nombre'];
}
