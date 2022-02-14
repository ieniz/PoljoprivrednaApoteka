<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kupovina extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [

'datumkupovine',
'kupac',
'proizvod',

    ];
}
