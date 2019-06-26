<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etix extends Model
{   
    public $table = 'etixs';
    protected $fillable = [
        'name', 'img', 'price',  'address',' date'
    ];
}
