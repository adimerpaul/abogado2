<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despacho extends Model
{
    use HasFactory;
    protected $fillable=[
        "fecha",
        "hora",
        "tipo",
        "juzgano",
        "webid",
        "nurej",
        "proceso",
        "demandante",
        "demandados",
        'tramite_id',
        'cliente_id',
    ];
}
