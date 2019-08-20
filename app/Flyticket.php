<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyticket extends Model
{
    protected $fillable = [
        'name', 'img', 'price', 'link','sold_out', 'address',' date'
    ];
}
