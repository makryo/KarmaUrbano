<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publicacione extends Model
{
    protected $fillable = [
        'url',
        'descripcion'
    ];
}
