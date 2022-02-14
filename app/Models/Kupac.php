<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kupac extends Model
{
    use HasFactory;
    protected $fillable = [
'ime',
'prezime',
'telefon',
'grad',


    ];
}
