<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upcome extends Model
{
    protected $fillable = [
        'name', 'img', 'date','address'
    ];
}
