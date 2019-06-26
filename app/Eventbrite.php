<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventbrite extends Model
{
    protected $fillable = [
        'name', 'img', 'price',  'address',' date'
    ];
}
